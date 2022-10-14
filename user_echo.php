<?php 
include 'ketnoidangnhap.php';
$username = $_GET['username'];
$password = $_GET['password'];
$email = $_GET['email'];

$sql = "SELECT * FROM 'bangdangky' user WHERE username = '$username' and password = '$password' and email = '$email'";
$old = mysqli_query($conn,$sql);
    mysqli_query($conn,$sql); 
?>