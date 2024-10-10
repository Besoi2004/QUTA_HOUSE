<?php
    session_start();
    include 'config.php';

    if(isset($_POST['submit']) && $_POST['username'] != ''  && $_POST['password'] != ''){

        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $user = mysqli_query($conn,$sql);
        if(mysqli_num_rows($user) > 0){
            $_SESSION['user'] = $username;
            header("Location: index.php");
        }
        else{
            $_SESSION["thongbao"] = "Tài khoản, mật khẩu không chính xác!";
            header("Location: Login.php");
            exit();
        }
    }else{
        $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin";
        header("Location: Login.php");
    }
?>
