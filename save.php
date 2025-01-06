<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลผู้สมัคร...</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 90%;
        }
        h1 {
            text-align: center;
            color: #333333;
            font-size: 24px;
        }
        p {
            font-size: 16px;
            color: #555555;
            line-height: 1.6;
            margin: 10px 0;
        }
        .highlight {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ข้อมูลผู้สมัคร</h1>
        <?php 
        if ($_POST) {
            $name = $_POST['fname'];
            $surname = $_POST['lname'];
            $birthday = $_POST['birthday'];
            $sex = $_POST['sex'];
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];
        
            echo "<p>สวัสดีคุณ: <span class='highlight'>$name $surname</span></p>";
            echo "<p>วันเกิด: <span class='highlight'>$birthday</span></p>";
            echo "<p>เพศ: <span class='highlight'>" . ($sex === 'm' ? 'ชาย' : 'หญิง') . "</span></p>";
            echo "<p>ชื่อเข้าระบบ: <span class='highlight'>$username</span></p>";
            echo "<p>รหัสผ่านคือ: <span class='highlight'>$pwd</span></p>";
        }
        ?>
    </div>
</body>
</html>
