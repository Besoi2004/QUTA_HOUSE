<?php
session_start();
include 'config.php';

if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['repassword'] != ''){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password != $repassword){
        $_SESSION["thongbao"] = "Mật khẩu không chính xác!";
        header("location:Register.php");
        exit();
    }


    $sql = "SELECT * FROM user WHERE username = '$username'";
    $old = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($old) > 0){
        $_SESSION["thongbao"] = "Tài khoản đã tồn tại!";
        header("location:Register.php");
        exit();
    }


    $sql = "INSERT INTO user(username, email, password) VALUES ('$username', '$email', '$password')";
    if(mysqli_query($conn, $sql)){
        $_SESSION["thongbao"] = "Đăng kí thành công!";
        header("location:Register.php");
        
    } else {
        echo "Lỗi khi đăng ký: " . mysqli_error($conn);
    }

} else {
    $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin";
    header("location:Register.php");
}
?>
