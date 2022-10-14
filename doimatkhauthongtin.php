<?php 
include 'ketnoidangky.php';
if(isset($_POST['login']) && $_POST["password"] != '' && $_POST["newpassword"] != '' && $_POST["newpassword2"] != ''){
$newpassword = $_POST["newpassword"];
$newpassword2 = $_POST["newpassword2"];
$password = $_POST["password"];
$echo = "Mật khẩu không trung khớp";
if($newpassword != $newpassword2){
    die($echo);
}
$sql = "UPDATE `bangdangky` SET `password`='$newpassword' WHERE password = '$password'";
echo "Đổi mật khẩu thành công";
}
?>