<?php
$hoTen = "Trương Nguyễn Ngọc Phú";
$mssv = "MSV : 3120224111";
$lop = "lớp : 24CNTT3";
$soThich = "Lập trình web, đọc sách";
$queQuan = "Đà Nẵng";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giới thiệu bản thân</title>
</head>
<body>
    <h1>Trang giới thiệu bản thân</h1>
    <p><strong>Họ tên:</strong> <?php echo $hoTen; ?></p>
    <p><strong>MSSV:</strong> <?php echo $mssv; ?></p>
    <p><strong>Lớp:</strong> <?php echo $lop; ?></p>
    <p><strong>Quê quán:</strong> <?php echo $queQuan; ?></p>
    <p><strong>Sở thích:</strong> <?php echo $soThich; ?></p>
    <hr>
    <p><em>Trang được tạo lúc: <?php echo date("H:i:s - d/m/Y"); ?></em></p>
</body>
</html>