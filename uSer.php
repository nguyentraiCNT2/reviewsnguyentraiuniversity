<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thông tin tài khoản</title>
</head>
<link rel="stylesheet" href="./Nhom_1/fontawesome-free-6.1.2-web/css/all.css">
<link rel="stylesheet" href="./Nhom_1/css/dangNhap.css">
<link rel="stylesheet" href="./Nhom_1/css/style.css">
<link rel="stylesheet" href="./Nhom_1/font/themify-icons/themify-icons.css">
<script src="./ketnoidangnhap.php"></script>
<body>
        <div class="header">
            <div class="logo">
                <ul> 
                <li><a href="trangChu.php"><img src="./Nhom_1/imge/logo_truong.png"></a></li>
                </ul>
            </div>
            <div class="menu">
                <ul class="nav">
                    <li><a href="trangChu.php">trang chủ</a></li>
                    <li><a href="#nganh">Đào tạo 
                        <i class="nav-arrow ti-angle-down"></i>
                        </a>
                        <ul class="subnav">
                        <li><a href="CNTT2.php">Công nghệ thông tin</a></li>
                        <li><a href="TKDH2.php">Thiết kế đồ họa</a></li>
                        <li><a href="QTKD2.php">Quản trị kinh doanh</a></li>
                        <li><a href="QHCC2.php">Quan hệ công chúng</a></li>
                        <li><a href="keToan2.php">Kế toán</a></li>
                        <li><a href="QTKDDL2.php">Quản trị kinh doanh du lịch</a></li>
                        <li><a href="kienTruc2.php">Kiết trúc</a></li>
                        <li><a href="NNN2.php">Ngôn ngữ Nhật</a></li>
                        <li><a href="HQH2.php">Hàn Quốc Học</a></li>
                        <li><a href="TCNH2.php">Tài chính ngân hàng</a></li>
                        <li><a href="TQH2.php">Trung Quốc học</a></li>
                        <li><a href="TKNT2.php">Thiết kết nội thất</a></li>
                        </ul>  
                    </li>
                    <li><a href="uSer.php"><i class="fa-solid fa-user-graduate"></i></a></li>
                </ul>
            </div>
        </div>
    <div class="anhtruong">
		<div class="content-dn" style="top: 0px"> 
			<h2 class="title">Thông tin tài khoản</h2>
                 <h1 style="text-align:center ;" >   <?php echo "Đang bảo trì"; ?></h1>
				
			</form>	
			<div class="linkLine">
				<br/>
				<br/>
			</div>
		</div>
	</div>
	<div class="footer">
        <div class="row">
            <div class="col col-third contact-info">
                <h3 class="footer-heading">Thông tin liên hệ</h3>
                <p><i class="ti-location-pin"></i>28A Lê Trọng Tấn</p>
                <p><i class="ti-headphone-alt"></i>Liên hệ: 0981924302</p>
                <p><i class="ti-email"></i>daihocnguyentrai@gmail.com</p>
            </div>
            <div class="col col-third contact-info">
                <h3 class="footer-heading">Liên kết nhanh</h3>
                <p><i class="ti-angle-right"></i><a href="">Đào tạo</p>
                <p><i class="ti-angle-right"></i><a href="">Cơ sở vật chất</a></p>
                <p><i class="ti-angle-right"></i><a href="">Tuyển sinh</a></p>
            </div>
            <div class="col col-third contact-info">
                <i class="ti-location-pin"></i><a href="">Bản dồ</a>
            </div>
        </div>
    </div>
</body>
<?PHP
$username = $_GET['username'];
$password = $_GET['password'];
$email = $_GET['email'];
?>
</html>