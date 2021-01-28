<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/TrangHomeCss.css">
	<script src='../js/header_footer.js'></script>
	<script src='../js/NutTop.js'></script>

</head>
<body onload="showSlides(slideIndex = 0); showSlides2(slideIndex2 = 0);"> <!--Chạy slide đầu khi load trang-->

<?php include("../Header_Footer/header_footer.php"); ?>


<!--PHẦN CODE THÊM-->
	<div id="Lin_Kt" style="text-align: justify;" >
		
		<div class="slideshow-container">
			<div class="mySlides fade" style="width:100%">
				<a href="../KhaiGiang/TrangKG.php">
			  		<img src="./img-home/slider_lichkhaigiang.png" style="width:100%">
				</a>
			</div>
		   
			<div class="mySlides fade">
				<a href="../CuaHang/TrangCuaHang.php">
			  		<img src="./img-home/slider_toeic500.jpg" style="width:100%">
				</a>
				<p class="text">NHẤN ĐỂ XEM NGAY</p>
			</div>
		   
			<div class="mySlides fade">
				<a href="../KhoaHoc/TrangKH.php">
					<img src="./img-home/slider_hoctructuyen.jpg" style="width:100%">
				</a>
				<p class="text">NHẤN ĐỂ XEM NGAY</p>
			</div>
		</div>
		<br>
		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(0)"></span> 
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
		</div>

			<!--Liên kết đến Trang về Anh ngữ 2Eng khi nhấn GIỚI THIỆU-->
		<a href="../static_page/vechungtoi.php"><h4 class="home-h4">GIỚI THIỆU</h4></a>
		<h1 class="home-h1">Anh ngữ 2Eng</h1>
		<p class="home-p">Tự hào là một trong những đơn vị đầu tiên giảng dạy theo phương pháp truyền cảm hứng với mô hình đào tạo S-SMART kết hợp dạy bảng và slide một cách thông minh. Nhờ phương pháp này, hàng nghìn học viên và giáo viên của Anh ngữ 2Eng đều được đồng bộ hóa về giá trị đào tạo. Với mong muốn lan toả nhiều hơn những giá trị đào tạo và khai phá tiềm năng của học viên, chúng tôi sẽ không chỉ dừng lại ở 5 cơ sở tại TP. HCM mà còn đến với các tỉnh thành khác trên toàn quốc.</p>
			<!--Liên kết đến Trang về Anh ngữ 2Eng khi nhấn nút Xem chi tiết-->
		<input type='button' class='button-xemchitiet' value='XEM CHI TIẾT' onclick="window.location.href='../static_page/vechungtoi.php'" />

		<table class="table-ld">
			<tr>
				<td style="padding-bottom: 60px; vertical-align: middle;"><h5 style="color: white;">LÝ DO VÌ SAO CHỌN</h5></td>
				<td colspan="3" style="padding-right: 0; padding-bottom: 60px;">
					<h1 class="home-h1">Anh ngữ 2Eng</h1>
					<p class="home-p1">Được thành lập từ năm 2015, sau hơn 5 năm phát triển, Anh Ngữ 2Eng đã trở thành đơn vị đào tạo tiếng Anh hàng đầu tại Việt Nam.</p>
				</td>
			</tr>
			<tr>
				<td>
					<img class="img-ld" src="./img-home/lido_1.png" />
				</td>
				<td>
					<img class="img-ld" src="./img-home/lido_2.png" />
				</td>
				<td>
					<img class="img-ld" src="./img-home/lido_3.png" />
				</td>
				<td style="padding-right: 0;">
					<img class="img-ld" src="./img-home/lido_4.png" />
				</td>
			</tr>
			<tr>
				<td>
					<p class="home-p1">Đào tạo hơn 10.000 bạn trẻ mất gốc tiếng Anh, sở hữu chứng chỉ TOIEC, IELTS, VNU-EPT với điểm số cao.</p>
				</td>
				<td>
					<p class="home-p1">Lộ trình học tại trung tâm 2Eng được thiết kế theo giáo trình riêng, rõ ràng, tinh gọn và hiệu quả.</p>
				</td>
				<td>
					<p class="home-p1">Đội ngũ giảng viên, trợ giảng chuyên nghiệp đến từ các trường đại học danh tiếng trong và ngoài nước.</p>
				</td>
				<td style="padding-right: 0;">
					<p class="home-p1">Cam kết đầu ra bằng văn bản với học viên.</p>
				</td>
			</tr>
		</table>
		</br>

		<table>
			<td style="width: 400px; padding-right: 20px; vertical-align: top;">
				<a href="../KhoaHoc/TrangKH.php"><h4 class="home-h4">CÁC KHÓA HỌC</h4></a>
				<h1 class="home-h1">Anh ngữ 2Eng</h1>
				<p class="home-p">Với sự đa dạng hóa khóa học từ offline đến online, mỗi học viên sẽ có cơ hội trải nghiệm các phương pháp học tiếng Anh độc đáo, chỉ duy nhất tại 2Eng. Học viên sẽ dễ dàng tiếp nhận kiến thức mới nhờ phương pháp giảng dạy tinh - gọn - nhẹ từ những giảng viên xuất sắc trên toàn quốc.</p>
			</td>
			<td>
				<div class="slideshow-container">
					<div class="mySlides2 fade2" style="width:100%">
						<a href="../KhoaHoc/TrangToeic2.php">
							  <img src="../KhoaHoc/img_khoahoc/toeic2kn.png" style="width:100%; height: 300px;">
						</a>
						<p class="text">NHẤN ĐỂ XEM NGAY</p>
					</div>
					<div class="mySlides2 fade2" style="width:100%">
						<a href="../KhoaHoc/TrangToeic4.php">
							  <img src="../KhoaHoc/img_khoahoc/toeic4kn.png" style="width:100%; height: 300px;">
						</a>
						<p class="text">NHẤN ĐỂ XEM NGAY</p>
					</div>
					<div class="mySlides2 fade2" style="width:100%">
						<a href="../KhoaHoc/TrangVNU-EPT.php">
							  <img src="../KhoaHoc/img_khoahoc/VNU-eptkh.jpg" style="width:100%; height: 300px;">
						</a>
						<p class="text">NHẤN ĐỂ XEM NGAY</p>
					</div>
					<div class="mySlides2 fade2" style="width:100%">
						<a href="../KhoaHoc/TrangIelts.php">
							  <img src="../KhoaHoc/img_khoahoc/ieltskh.jpg" style="width:100%; height: 300px;">
						</a>
						<p class="text">NHẤN ĐỂ XEM NGAY</p>
					</div>
					<div class="mySlides2 fade2" style="width:100%">
						<a href="../KhoaHoc/TrangGiaoTiep.php">
							  <img src="../KhoaHoc/img_khoahoc/tagtiepkh.jpg" style="width:100%; height: 300px;">
						</a>
						<p class="text">NHẤN ĐỂ XEM NGAY</p>
					</div>
				</div>
				<br>
				<div style="text-align:center">
					<span class="dot2" onclick="currentSlide2(0)"></span> 
					<span class="dot2" onclick="currentSlide2(1)"></span> 
					<span class="dot2" onclick="currentSlide2(2)"></span>
					<span class="dot2" onclick="currentSlide2(3)"></span> 
					<span class="dot2" onclick="currentSlide2(4)"></span>  
				</div>
			</td>
		</table>

		<p>Nhanh chóng lựa chọn cho mình 1 khóa học phù hợp để bắt đầu trau dồi khả năng ngoại ngữ của mình ngay từ bây giờ nào !!</p>
		<p>Nếu còn thắc mắc vấn đề gì nữa, nhanh chóng liên hệ tư vấn để được đội ngũ 2Eng giải đáp thắc mắc.</p>
		<a href="../LienHe/contact.php">
			<img class="img-tv" src="./img-home/tu_van.jpeg" />
		</a>

	</div>
<!--PHẦN CODE THÊM-->


</body>
</html>