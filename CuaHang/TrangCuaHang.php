<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cửa hàng</title>

	<link rel="stylesheet" href="./CuaHangCss/cuahang.css">
	<link rel="stylesheet" href="./CuaHangCss/trangcuahang.css">
	
	<link rel="stylesheet" href="../css/header_footer.css">

	<script src='../js/header_footer.js'></script>
	<script src='../js/NutTop.js'></script>

</head>
<body>

<?php include("../Header_Footer/header_footer.php"); ?>

<!--PHẦN CODE THÊM-->
	<div id="Lin_Kt" style="text-align: justify;" >
	<table id="table">
		<tr>
			<td><div class="div_navi"><span><a href="../TrangChu/home.php">Trang chủ</a> &#62;&#62; <a href="./TrangCuaHang.php">Cửa hàng</a></div></td>
			<td style="text-align: right; width:570px" class="div_navi"><label id="DonHang" ><a href="./DonHang.php">Đơn Hàng</a></label></td>
		</tr>
	</table>
        		
        <h1>CỬA HÀNG SÁCH</h1>
		<p><b>Trung tâm Anh ngữ 2Eng</b> giới thiệu nhiều cuốn sách Anh ngữ bổ ích và phù hợp cho những ai đang muốn cải thiện trình độ ngoại ngữ của mình. </p>
		<p>Cùng xem qua 1 vài cuốn sách tại Trung tâm chúng tôi và nhanh chóng đặt mua cho mình 1 cuốn sách bổ ích để bắt đầu học Tiếng Anh nào !!!</p>
		</br> 

		<?php 
			$options = array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				);
			
			$dbh = new PDO('mysql:host=localhost;dbname=twoeng', 'root', '',$options);

			$bangsach=$dbh->query("select * from sach");

			echo "<table class='table-ch'>";
			$dem = 0;
			foreach($bangsach as $sach)
			{
				if($dem % 4 == 0)
					echo "<tr>";
				echo "<td>
						<a href='./TrangChiTietSach.php?masach=".$sach[0]."'><img class='img-sach' src='".$sach[3]."' /></a>
						<h3><a href='./TrangChiTietSach.php?masach=".$sach[0]."'>".$sach[2]."</a></h3>
						<h4>".number_format($sach[4])." VNĐ</h4>
						<a href='./TrangChiTietSach.php?masach=".$sach[0]."'><input type='button' class='button-datmua' value='Đặt mua' onclick=' '/></a>
					 </td>";	
				$dem++;	
				if($dem % 4 == 0)
					echo "</tr>";
			}
			echo "</table>";
		?>
	</div>
<!--PHẦN CODE THÊM-->

</body>
</html>