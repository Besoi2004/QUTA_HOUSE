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
</body >    
<div class="container" style="background: url(./image/coffee5.jpg) no-repeat center center/cover;">
    <div class="wrapper">
        <form action="Login_submit.php" method="POST">
            <h1>Chào mừng bạn đến với</h1>
            <div style="font-family: Droidiga;">
                <h2>QUTA House</h2>
            </div>

            <?php
                if( !isset($_SESSION["user"])){
                header("location:Login.php");
                exit();
                }
            ?>
            <button class="button"><a href="./Trang_chu.html" style="font-family: Lexend;" > Trải nghiệm ngay</a></button>
            <button class="button" type="submit"  value="Login"><a href="Logout.php">Logout</a></button>
        </form>
    </div>
  </div>
</html>     



