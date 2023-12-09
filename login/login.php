<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    require("navbarlogin.php");
    echo str_repeat("<br>", 2);
    ?>

    <div class="box">
        <div class="head">
            <h2>เข้าสู่ระบบ</h2>
        </div>

        <div class="form">
            <form>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">ชื่อผู้ใช้</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="ชื่อผู้ใช้">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">รหัสผ่าน</label>
                        <input type="password" id="disabledTextInput" class="form-control" placeholder="รหัสผ่าน">
                    </div>
                    <div class="mb-3">
                    </div>
                    <div class="button">
                    <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
                    <button type="submit" class="btn btn-secondary">สมัคสมาชิก</button>
                    <br>
                    <button type="submit" class="btn btn-primary">ลืมรหัสผ่าน</button>
                    </div>
                </form>
        <br>
        </div>
    </div>
</body>

</html>