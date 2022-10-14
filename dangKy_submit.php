<?php
include 'ketnoidangky.php';
if(isset($_POST['login']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["password2"] != '' && $_POST["email"] != '') {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $email = $_POST["email"];
    $echo = "đăng ký thành công";
    $echofalse = "tài khoản đã tồn tại";
    if($password != $password2){
        header("location:dangKy.php");
    }
    $sql = "SELECT * FROM `bangdangky` user WHERE username = '$username'";
    $old = mysqli_query($conn,$sql);
    $password = md5($password);
  
    $sql = "INSERT INTO bangdangky (username,password,email) VALUES ('$username','$password','$email')";
    mysqli_query($conn,$sql);
    if( mysqli_num_rows($old) > 0 ){
        // header("location:dangNhap.php");
         die($echofalse);
    }
  else{
       die($echo);
    }
}else{
    header("location:dangKy.php");
}
?>