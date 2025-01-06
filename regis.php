<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #333333;
        }
        form label {
            display: block;
            margin: 10px 0 5px;
            color: #555555;
        }
        form input, form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        form input[type="submit"], form input[type="reset"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            cursor: pointer;
            font-weight: bold;
            margin: 5px 0;
        }
        form input[type="reset"] {
            background-color: #ff6b6b;
        }
        form input[type="submit"]:hover, form input[type="reset"]:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>สมัครข้อมูล</h2>
        <form action="save.php" method="POST">
            <label for="sex">เพศ :</label>
            <select name="sex">
                <option value="f">หญิง</option>
                <option value="m">ชาย</option>
            </select>

            <label for="fname">ชื่อ :</label>
            <input type="text" id="fname" name="fname">

            <label for="lname">สกุล :</label>
            <input type="text" id="lname" name="lname">

            <label for="birthday">วันเกิด :</label>
            <input type="date" name="birthday">

            <label for="username">Username :</label>
            <input type="text" name="username">

            <label for="password">Password :</label>
            <input type="password" name="pwd">

            <input type="submit" value="บันทึกข้อมูล">
            <input type="reset" value="รีเซ็ตข้อมูล">
        </form>
    </div>
</body>
</html>
