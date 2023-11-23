<?php 
    include ("inc/connect.inc");
    $_lop=$_GET['lop'];
    $sql="SELECT * FROM sinhvien WHERE lop ='$_lop'";
    $rs=mysqli_query($con,$sql);
    $str= "<table>
                <tr class=hd>
                    <td>TT</td>
                    <td>Mã Số</td>
                    <td>Họ tên</td>
                    <td>Địa chỉ</td>
                </tr>";
                $tt=1;
                while($row =mysqli_fetch_array($rs)){
                    $str.="<tr>
                            <td>$tt</td>
                            <td>{$row['masv']}</td>
                            <td>{$row['hoten']}</td>
                            <td>{$row['diachi']}</td>
                    </tr>";
                    $tt++;
                }
    $str."</table>";
    echo $str; 
          
?>