<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The QUTA HOUSE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./css/t2.css">
    <link rel="Website icon" href="../image/logoWeb.png" type="png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>    
        <div class="header">    
    
            <div class="navbar">
                <ul>
                    <li><a href="./Trang_chu.html" class="logo" >QUTA House</a></li>
                    <li><a href="./Trang_chu.html#menu" class="logo"  >Menu</a></li>
                    <li><a href="./Trang_chu.html#about"  class="logo" >cloudfee</a></li>
                    <li><a href="./Trang_chu.html#review" class="logo">Review</a></li>
                    <li><a href="./Trang_chu.html#blog" class="logo">oUr_house</a></li>
                    <li><a href="./Login.php" class="logo">Member</a></li>
                </ul>
            </div>
        </div>
    </header>
</body>
<div class="container" style="background: url(./image/coffee5.jpg) no-repeat center center/cover;">
    <div class="wrapper">
        <form action="Register_submit.php" method="POST">
        <h1>Đăng kí thành viên</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Tài Khoản" required >
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" required >
                <i class="bx bxs-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Mật Khẩu " required >
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="password" name="repassword" placeholder="Nhập Lại Mật Khẩu " required >
                <i class="bx bxs-lock-alt"></i>
            </div>
            <p style="color:red" >
            <?php
                if(isset($_SESSION["thongbao"])) {
                    echo $_SESSION["thongbao"];
                    unset($_SESSION["thongbao"]);
                }
            ?>
            </p>

            <button class="button" type="submit" name="submit" value="Login">Đăng Kí</button>
            <div class="links">
            <a href="Login.php"> Đăng nhập ngay!</a>
            </div>
        </form>
    </div>
  </div>
</html>     