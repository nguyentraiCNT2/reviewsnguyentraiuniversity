<?php
include 'ketnoidangnhap.php';
if(isset($_POST['login']) && $_POST["username"] != '' && $_POST["password"] != '') {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $echo = "đăng nhập thành công";
    $echofalse = "tài khoản không tồn tại";
    $sql = "SELECT * FROM `bangdangky` user WHERE username = '$username' and password = '$password'";
    $old = mysqli_query($conn,$sql);
    mysqli_query($conn,$sql);
    if(mysqli_query($conn,$sql) > 0){
        header("location:trangChu2.php");
    }else{
        die($echofalse);
    }
   
}else{
    header("location:dangNhap.php");
}
?>