<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch Khai giảng</title>

    <link rel="stylesheet" href="./KhaiGiangCss.css">
	
	<link rel="stylesheet" href="../css/header_footer.css">

	<script src='../js/header_footer.js'></script>
	<script src='../js/NutTop.js'></script>	
    
</head>
<body>

<?php include("../Header_Footer/header_footer.php"); ?>

<!--PHẦN CODE THÊM-->
	<div id="Lin_Kt" style="text-align: justify;" >
	<div class="div_navi"><span><a href="../TrangChu/home.php">Trang chủ</a> >> <a href="./TrangKG.php">Khai Giảng</a></span></div>

        <h1>LỊCH KHAI GIẢNG CÁC KHÓA HỌC TẠI ANH NGỮ 2Eng</h1> </br>
        <p><b>Trung tâm triển khai 2 loại hình học:</b> Trực tiếp và Online.</p>
			<ul style="padding-left: 35px;">
				<li>Lớp trực tiếp (<b>Offline</b>): Học ở Khu phố 6, P.Linh Trung, Q.Thủ Đức, TP.Hồ Chí Minh</li>
				<li>Lớp trực tuyến (Online): Giáo viên sẽ dạy bằng cách livestream với học viên qua phần mềm Zoom. Các bạn có thể linh hoạt học online qua máy tính hoặc điện thoại, miễn là có kết nối internet.</li>
			</ul>
		<p>Trung tâm đã mua các phần mềm trả phí, kết hợp với các công cụ mạnh mẽ nhất để đảm bảo chất lượng dạy online hiệu quả như các lớp trực tiếp.</p>
		<p>Nhanh tay chọn cho mình 1 lớp học phù hợp và Nhấn đăng ký ngay nào!</p>

	<?php 
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);
		   
		$dbh = new PDO('mysql:host=localhost;dbname=twoeng', 'root', '',$options);
		
		$LoaiLop = array("TOEIC2","TOEIC4", "VNU-EPT", "IELTS", "GIAOTIEP");
		foreach($LoaiLop as $loai){

			$bangKG=$dbh->query("select * from khaigiang where makhoahoc = '".$loai."'");

			echo "<table class='table-kg' cellspacing='0' cellpadding='00'>";
			switch($loai){
				case "TOEIC2":
					echo "<tr><td colspan='6'>
								<h3 class='kh-h3'>
									<a name='Toeic2'>LỊCH KHAI GIẢNG KHÓA HỌC TOEIC 2 KỸ NĂNG</a>
								</h3>
							  </td>
						  </tr>";
					break;
				
				case "TOEIC4":
					echo "<tr><td colspan='6'>
								<h3 class='kh-h3'>
									<a name='Toeic4'>LỊCH KHAI GIẢNG KHÓA HỌC TOEIC 4 KỸ NĂNG</a>
								</h3>
							  </td>
						  </tr>";
					break;

				case "VNU-EPT":
					echo "<tr><td colspan='6'>
								<h3 class='kh-h3'>
									<a name='VNU-EPT'>LỊCH KHAI GIẢNG KHÓA HỌC VNU-EPT</a>
								</h3>
							  </td>
						  </tr>";
					break;

				case "IELTS":
					echo "<tr><td colspan='6'>
								<h3 class='kh-h3'>
									<a name='Ielts'>LỊCH KHAI GIẢNG KHÓA HỌC IELTS</a>
								</h3>
							  </td>
						  </tr>";
					break;	

				case "GIAOTIEP":
					echo "<tr><td colspan='6'>
								<h3 class='kh-h3'>
									<a name='GiaoTiep'>LỊCH KHAI GIẢNG KHÓA HỌC TIẾNG ANH GIAO TIẾP</a>
								</h3>
							  </td>
						  </tr>";
					break;
				default:
					break;			
			}
				
			echo "<tr>
					<th>Ca</th>
					<th>Thứ</th>
					<th>Ngày khai giảng</th>
					<th>Hình thức</th>
					<th>Tình trạng</th>
					<th>Đăng ký</th>
				</tr>";
			
			foreach($bangKG as $kg)
			{
				echo "<tr>
					<td>".$kg[4]."</td>
					<td><b>".$kg[5]."</b></td>
					<td>".$kg[6]."</td>
					<td><b>".$kg[7]."</b></td>";

				if($kg[8] == 1)
					echo "<td style='color: red;'>FULL</td>
						<td></td>";
				else
					echo "<td style='color: blue;'>Còn trống</td>
						<td>
							<a href='../DangKi/register.php'>
								<img class='kg-img-dk' src='./img_khaigiang/dang-ky-ngay.gif' />
							</a>
						</td>";

				echo "</tr>";

			}
			echo "</table>";
		}
	?>
	</div>

<!--PHẦN CODE THÊM-->

</body>
</html>