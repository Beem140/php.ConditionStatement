<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>แสดงผมการคำนวณพื้นที่รูปเรขาคณิต</title>
</head>
<body>
    <h1>พื้นที่รูปสามเหลี่ยม</h1>
    <?php
        $height = $_POST['height']; //รับค่าความสูงสามเหลี่ยม
        $width = $_POST['width']; // รับค่าความยาว
        $area = 0.5*$height*$width;
        echo "<h3>รูปสามเหลี่ยมที่มีความสูง $height และมีความยาวฐาน $width <h/3>";
        echo "<br><br>";
        echo "<h3>คำนวณพื้นที่ได้ $area ตารางหน่วย</h3>";
    ?>
    
</body>
</html>