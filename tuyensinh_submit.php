
<?php
include 'ketnoituyensinh.php';
if(isset($_POST['submit']) && $_POST["stname"] != '' && $sex = $_POST["sex"] != '' && $date = $_POST["date"] != '' && $phone = $_POST["phone"] != '' && $school = $_POST["school"] != '' && $nganh = $_POST["nganh"] != '') {
    $stname = $_POST["stname"];
    $sex = $_POST["sex"];
    $date = $_POST["date"];
    $phone = $_POST["phone"];
    $school = $_POST["school"];
    $nganh = $_POST["nganh"];
    $echotuyensinh = "Đăng ký tuyển sinh thành công";
    $sql = "SELECT * FROM `tuyensinhtb` user WHERE stname = '$stname'";
    $old = mysqli_query($conn,$sql);
    $sql = "INSERT INTO tuyensinhtb (stname,sex,date,phone,school,nganh) VALUES ('$stname','$sex','$date','$phone','$school','$nganh')";
// die($sql); 
    mysqli_query($conn,$sql);
   die($echotuyensinh);

}else{
    header("location:trangChu.php#tuyenSinh");
}
?>