<?php
    $link = mysqli_connect("localhost", "root", "", "udn");
    // Kiểm tra kết nối
    if($link === false){
        die("ERROR: Không thể kết nối. " . mysqli_connect_error());
    }
    if(isset($_REQUEST["term"])){
        $sql = "SELECT * FROM hocphan WHERE tenhp LIKE ?";// Chuẩn bị câu lệnh SQL SELECT
        if($stmt = mysqli_prepare($link, $sql)){
            // Liên kết biến đến câu lệnh đã chuẩn bị như là tham số
            mysqli_stmt_bind_param($stmt, "s", $param_term);
            // Thiết lập các tham số
            $param_term = $_REQUEST["term"] . '%';
            // Cố gắng thực thi câu lệnh đã chuẩn bị
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
                // Kiểm tra số lượng row trong kết quả
                    if(mysqli_num_rows($result) > 0){
                    // Tìm nạp các hàng kết quả dưới dạng mảng kết hợp
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            echo "<p>" . $row["tenhp"] . "</p>";
                        }
                    } else{
                        echo "<p>Không tìm thấy kết quả nào</p>";
                    }
            } else{
                echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);}
        }
        // Đóng câu lệnh
        mysqli_stmt_close($stmt);
    }
    // Đóng kết nối
    mysqli_close($link);
?>