<!DOCTYPE html>
<html>
<head>
    <title>Nhập và tính toán trên dãy số</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <form method="POST" action="result.php">
        <table>
            <thead>
                <tr>
                    <th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhập dãy số:</td>
                    <td><input type="text" name="nhap_mang" value="<?php if(isset($_POST['nhap_mang']))echo $_POST['nhap_mang'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn_goi" value="Tổng dãy số" ></td>
                </tr>
                <tr>
                    <td>Tổng dãy số:</td>
                    <td><input type="text" name="ket_qua" disabled="disabled" value="<?php if(isset($ket_qua)) echo $ket_qua ?>" ></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>