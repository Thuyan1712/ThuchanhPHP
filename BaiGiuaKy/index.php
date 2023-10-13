<?php
	ob_start();
	session_start();
    include("connect.php");	
    //include("chuc_nang/ham/ham.php");	
	// if(isset($_POST['thong_tin_khach_hang']))
	// {
	// 	include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	// }
	// if(isset($_POST['cap_nhat_gio_hang']))
	// {
	// 	include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
	// 	include("chuc_nang/gio_hang/xoa_san_pham_gio_hang.php");
		
	// 	trang_truoc();
	// }
		
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<!-- <title>Web bán hàng</title> -->
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
	<body>
		<center>
			<table width='1500px' >
                <tr>
                    <td>
                        <header class="header">
                            <div class="header-1">
                                <a href="index.html" class="logo">WEB BÁN HÀNG</a>

                                <form action="" class="search-form">
                                    <input type="search" name="" placeholder="search ..." id="search-box">
                                    <label for="search-box" class="fas fa-search"></label>
                                </form>

                                <div class="icons">
                                    <div id="search-btn" class="fas fa-search"></div>
                                    <a href="#" class="fa fa-heart"></a>
                                    <div id="cart" class="fa fa-shopping-cart"></div>
                                    <div id="login-btn" class="fas fa-user"></div>
                                </div>
                        </div>
                    </td>
                </tr>
                </tr>
				
				<tr>
					<td colspan="3" height="50px" >
                    <?php 
                        $query="select id,ten,loai_menu from menu_ngang order by id";
                        $query_1=mysqli_query($connect,$query);
                        echo "<div  class='menu_ngang' >";
                        echo "<a href='index.php'>Trang chủ</a>";
                        while($query_2=mysqli_fetch_array($query_1))
                        {
                            if($query_2['loai_menu']==""){
                                $link_menu="?id=".$query_2['id'];
                            }
                            if($query_2['loai_menu']=="san_pham"){
                                $link_menu="?san_pham";
                            }
                            echo "<a href='$link_menu'>";
                            echo $query_2['ten'];
                            echo "</a>";
                        }
                        echo "</div>";
                    ?> 
					</td>
				</tr>
		        <tr>
					<td colspan="3"><img src='hinhanh/banner/banner.jpg' width='1730px' height='400px' ></td>
				</tr>
			</table>
		</center>
	</body>
</html>