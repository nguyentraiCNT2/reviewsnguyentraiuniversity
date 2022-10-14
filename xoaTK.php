<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa tài khoản</title>
</head>
<link rel="stylesheet" href="./Nhom_1/css/style.css">
<link rel="stylesheet" href="./Nhom_1/font/themify-icons/themify-icons.css">
<link rel="stylesheet" href="./Nhom_1/css/dangNhap.css">
<script language="php"></script>
<script src="xoaTaiKhoan.php"></script>
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
                <li><a href="#nganh">Đào tạo<i class="nav-arrow ti-angle-down"></i></a>
                    <ul class="subnav">
                    	<li><a href="CNTT.php">Công nghệ thông tin</a></li>
                   		<li><a href="TKDH.php">Thiết kế đồ họa</a></li>
                    	<li><a href="QTKD.php">Quản trị kinh doanh</a></li>
                   		<li><a href="QHCC.php">Quan hệ công chúng</a></li>
                    	<li><a href="keToan.php">Kế toán</a></li>
                    	<li><a href="QTKDDL.php">Quản trị kinh doanh du lịch</a></li>
                    	<li><a href="kienTruc.php">Kiết trúc</a></li>
                    	<li><a href="NNN.php">Ngôn ngữ Nhật</a></li>
                    	<li><a href="HQH.php">Hàn Quốc Học</a></li>
                    	<li><a href="TCNH.php">Tài chính ngân hàng</a></li>
                    	<li><a href="TQH.php">Trung Quốc học</a></li>
                    	<li><a href="TKNT.php">Thiết kết nội thất</a></li>
                    </ul>  
                </li>                    
					<li><a href="dangNhap.php">Đăng nhập</a></li>
                    <li><a href="dangKy.php">Đăng kí</a></li>
            </ul>
        </div>
    </div>
    <div class="anhtruong">
		<div class="content-dn" style="top: 0px"> 
			<h2 class="title">Xóa Tài khoản</h2>
			<form id="login-form" method="post" action="xoaTK.php" class="loginForm">
				<div id="line-account" class="line">
					<input id="login_form_account" name="username" type="text" placeholder="Tài khoản sinh viên" 
					autocorrecct="off" autocapitalize="off" title="Tài khoản sinh viên">
				</div>
				<div id="line-password" class="line">
					<input id="login_form_password" name="password" type="password" placeholder="Mật khẩu">
				</div>
				
				<div class="line btnLine">
					<input id="confrim-btn" name="login" type="submit" value="Xác nhận" onclick="javascript:return false;" class="btn">
				</div>
				<div class="divider">
					Hoặc
				</div>
			</form>	
			<div class="linkLine">
					<a href="doiMatKhau.php">Trở về</a>

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
                <p><i class="ti-angle-right"></i><a href="trangChu.php">Trang chủ</p>
                <p><i class="ti-angle-right"></i><a href="dangNhap.php">Đăng nhập</a></p>
                <p><i class="ti-angle-right"></i><a href="dangKy.php">Đăng ký</a></p>
            </div>
            <div class="col col-third contact-info">
                <i class="ti-location-pin"></i><a href="https://www.google.com/maps/place/%C4%90%E1%BA%A1i+h%E1%BB%8Dc+Nguy%E1%BB%85n+Tr%C3%A3i/@20.963849,105.770231,15z/data=!4m5!3m4!1s0x0:0xdb02223a0620af21!8m2!3d20.9630873!4d105.7641176?hl=vi">Bản dồ</a>
            </div>
        </div>
    </div>
</body>
</html>

