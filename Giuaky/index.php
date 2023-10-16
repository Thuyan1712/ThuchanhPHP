<?php
	ob_start();
	session_start();
    include("connect.php");	
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="giaodien.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
	<body>
		<center>
			<table >
                <tr>
                    <td>
                        <header class="header">
                            <div class="header-1">
                                <a href="index.php" class="logo">WEB BÁN HÀNG</a>

                                <form action="" class="search-form">
                                    <input type="search" name="" placeholder="search ..." id="search-box">
                                    <label for="search-box" class="fas fa-search"></label>
                                </form>

                                <div class="icons">
                                    <div id="search-btn" class="fas fa-search"></div>
                                    <div id="cart" class="fa fa-shopping-cart"></div>
                                    <div id="login-btn" class="fas fa-user"></div>
                                </div>
                        </div>
                    </td>
                </tr>
				
				<tr>
					<td height="50px" >
                    <?php 
                        $query="select id,ten,parent  from menu_ngang";
                        $query_1=mysqli_query($connect,$query); 
                    
                        function  buiding_menu($parent,$menuData){
                            $html="";
                            if(isset($menuData['parent'][$parent])){
                               
                                $html.="<ul class='nav'>";
                                foreach($menuData['parent'][$parent] as $value){
                                    $html.="<li>";
                                    $html.="<a href='index.php'>".$menuData['items'][$value]['ten']."</a>";
                                    $html.=buiding_menu($value,$menuData);
                                    $html.="</li>";
                                }
                                $html.="</ul>";
                           
                            }
                            return $html;
                         }
                        //if (!is_null($query_1) && is_array($query_1)) {
                       foreach($query_1 as $value){
                            $menuData['items'][$value['id']]=$value;//Lưu dữ liệu các biến có id kha
                            $menuData['parent'][$value['parent']][]=$value['id'];
                        }
                    //}
                    ?> 
                        <?php
                           if(isset($menuData)) echo buiding_menu(0,$menuData);
                        ?>
					</td>
				</tr>
		        
			</table>
		</center>
	</body>
</html>
