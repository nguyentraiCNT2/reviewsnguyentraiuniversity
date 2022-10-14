
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
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
                    <li><a href="#">Đăng nhập</a></li>
                    <li><a href="dangKy.php">Đăng kí</a></li>
                </ul>
            </div>
        </div>
    <div class="anhtruong">
		<div class="content-dn" style="top: 0px"> 
			<h2 class="title">Đăng nhập</h2>
			<form id="login-form" action="dangNhan_submit.php" method="POST" class="loginForm">
				<div id="line-account" class="line">
					<input id="login_form_account" name="username" type="text" placeholder="Tài khoản sinh viên" 
					autocorrecct="off" autocapitalize="off" title="Tài khoản sinh viên">
				</div>
				<div id="line-password" class="line">
					<input id="login_form_password" name="password" type="password" placeholder="Mật khẩu">
				</div>
				
				<div class="line btnLine">
					 <input id="confrim-btn" name="login" type="submit"  value="Đăng nhập" class="btn">
					</div>
				<div class="divider">
					Hoặc
				</div>
				
			</form>	
			<div class="linkLine">
				<a href="dangKy.php">Đăng kí tài khoản sinh viên</a> 
				<br/>
				<br/>
				<a href="./doimatkhau.php">Thay đổi mật khẩu tài khoản của bạn</a>
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
</html>