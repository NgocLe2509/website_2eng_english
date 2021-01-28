<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thêm Bài Tập</title>
<link rel="stylesheet" href="../css/ThemBai.css">
<script language="javascript" src="../js/SuaBai.js"></script>
</head>
<body>
<?php
	
	include("../include/config.php");
	session_start();

	$user_login = session();
	$info_user = check_NguoiDung($user_login);
	if(!isset($_SESSION['UserID'])){
		header("Location:../login/login.php");
	}
    if(!isset($_SESSION['MaLop'])){
		header("Location:login_class.php");
	}
	else if ($_SESSION['MaLop'] == ""){
		header("Location:login_class.php");
	}

	if ($info_user['LoaiTK'] == "HV"){
		header("Location:BaiTapLop.php");
	}


	$row = get_NguoiDungWithUserID($user_login);

	if (isset($_POST['add']))
	{
		$MoTa = $_POST['MoTa'];
		$YeuCau = $_POST['YeuCau'];
		$filename = "";
		
		if (isset($_FILES['fileitem'])) {
			$target_dir = "BaiTap/";
			$target_file = $target_dir . basename($_FILES["fileitem"]["name"]);
			$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg" && $FileType != "xlsx" && $FileType != "pptx"
			&& $FileType != "txt" && $FileType != "pdf" && $FileType != "doc" && $FileType != "docx" && $FileType != "mp4"
			&& $FileType != "mp3" && $FileType != "zip" && $FileType != "rar") {
				//echo "Không cho phép upload file .".$FileType;
			}
			else {
				move_uploaded_file($_FILES['fileitem']['tmp_name'], "./BaiTap/".$_FILES['fileitem']['name']);
				$filename = $_FILES['fileitem']['name'];
			}
		}

		addBaiTapLop($_SESSION['MaLop'], $MoTa, $YeuCau , $filename);
		header("Location:GiaoBaiTap.php");
	}

	if(isset($_POST["delete"])){
		delete_BaiTap($STTBai);
		header("Location:GiaoBaiTap.php");
	}
?>
<div id="Web_1920__1">
	<img id="ID1" src="img/ID1.png">
	<img id="Untitled" src="img/Untitled.png">
	<svg class="Path_1" viewBox="-6.986 0 1276.626 871.325">
		<path id="Path_1" d="M -6.986007690429688 0 L 616.3311157226563 0 L 1265.245849609375 0 L 1269.639770507813 871.3246459960938 L 603.1038818359375 871.3246459960938 L -5.2960205078125 871.3246459960938 L -6.986007690429688 0 Z">
		</path>
	</svg>
	<div id="LEARN_TO_ENGLISH_WITH_2Eng">
		<span>LEARN TO ENGLISH WITH 2Eng</span>
	</div>
	<div id="Group_18">
		<svg class="Rectangle_14">
			<rect id="Rectangle_14" rx="0" ry="0" x="0" y="0" width="1802" height="299">
			</rect>
		</svg>
		<div id="TRUNG_TM_ANH_NG_2Eng_a_ch_Khu_">
			<span>TRUNG TÂM ANH NGỮ 2Eng</span><br><span style="font-size:25px;color:rgba(242,242,243,1);">Địa chỉ: Khu phố 6, P.Linh Trung, Q.Thủ Đức, TP.Hồ Chí Minh<br/>Điện thoại: (028) 782 50593.<br/>Email: 2Eng@group2.edu.vn</span>
		</div>
		<svg class="Line_16" viewBox="0 0 1345 9">
			<path id="Line_16" d="M 0 0 L 1345 9">
			</path>
		</svg>
		<div id="_2020_2Eng_All_Rights_Reserved">
			<span>© 2020 2Eng. All Rights Reserved</span>
		</div>
		<div id="Group_17">
			<div id="FOLLOW_2Eng__">
				<span>FOLLOW 2Eng<br/></span><br>
			</div>
			<img id="Image_1" src="img/Image_1.png">
			<img id="Image_2" src="img/Image_2.png">
		</div>
	</div>
	<img id="form-login-popup" src="img/form-login-popup.png">
	<img id="Image_4" src="img/Image_41.png">
	<img id="Image_4_x" src="img/Image_41.png">
	<div id="User_Profile">
		<span>Thêm Bài Tập</span>
	</div>
	<div id="Email">
		<span>Yêu Cầu</span>
	</div>
	<div id="Number_Phone">
		<span>Mô Tả</span>
	</div>
	<div id="Ngy_Sinh">
		<span>File</span>
	</div>
    <!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
		<?php if($user_login == "none_user") { ?>
	<div id="Group_14">
		<div id="Group_13">
			<svg class="Rectangle_7">
				<a href="login.php"><rect id="Rectangle_7" rx="19" ry="19" x="0" y="0" width="172" height="55"></rect></a>
				
			</svg>
			<div>
				<a id="ng_nhp" href="login.php" style="text-decoration: none;">Đăng nhập</a>
			</div>
		</div>
	</div>
	<?php }
	else { ?>
		<div id="Hi">
			<span>Hi,</span>
		</div>
		<div id="Ngc">
			<span style="cursor:pointer;" id="demo" onclick="myFunction()"><?php echo $info_user["Lastname"]; ?></span>
		</div>
	<?php } ?>
		
	<div id="dropdown" style="display: none;">
		<ul>
			<?php if($user_login == "QTV"){
				?>
				<a href=<?php echo "../TaoLop_ThemHocVien_GiangVien/ThemHocVien.php"; ?> style="text-decoration: none; color:black"><li>Thêm Người Dùng</li></a>
				<a href=<?php echo "../TaoLop_ThemHocVien_GiangVien/TaoLop.php"; ?> style="text-decoration: none; color:black"><li>Tạo Lớp</li></a>
				<?php
			} ?>
			<a href=<?php echo "../infoUser/infoUser.php"; ?> style="text-decoration: none; color:black"><li>Thông Tin Cá Nhân</li></a>
			<a href="../BaiTapLop/login_class.php" style="text-decoration: none; color:black"><li>Bài Tập Lớp</li>
			<a href="../TestOnline/LichSuTest.php" style="text-decoration: none; color:black"><li>Lịch Sử Test</li>
			<a href="../login/resetPassword.php" style="text-decoration: none; color:black"><li>Thay Đổi Mật Khẩu</li>
			<a href="../login/logout.php" style="text-decoration: none; color:black"><li>Đăng Xuất</li>
		</ul> 
	</div>
	<div id="menu">
		<ul>
			<li><a href="../TrangChu/home.php">
					<svg class="Icon_awesome-home" viewBox="-0.001 2.254 56.934 46.346">
						<path id="Icon_awesome-home" d="M 27.71131134033203 14.27700519561768 L 9.48876953125 29.9879322052002 L 9.48876953125 46.94456100463867 C 9.48876953125 47.85882186889648 10.19678211212158 48.59997177124023 11.07015895843506 48.59997177124023 L 22.14581108093262 48.56997299194336 C 23.01609992980957 48.5654182434082 23.71930503845215 47.82559585571289 23.71929359436035 46.91455841064453 L 23.71929359436035 37.01206970214844 C 23.71929359436035 36.09780502319336 24.42730522155762 35.35665130615234 25.30068206787109 35.35665130615234 L 31.6262378692627 35.35665130615234 C 32.49961471557617 35.35665130615234 33.20762634277344 36.09780502319336 33.20762634277344 37.01206970214844 L 33.20762634277344 46.90730667114258 C 33.20631408691406 47.34724426269531 33.37234115600586 47.7696418762207 33.66905212402344 48.08121871948242 C 33.96576309204102 48.39278411865234 34.36874771118164 48.56790161132813 34.78901290893555 48.56790161132813 L 45.86071395874023 48.59997177124023 C 46.73408508300781 48.59997177124023 47.44210433959961 47.85882186889648 47.44210433959961 46.94456100463867 L 47.44210433959961 29.97655296325684 L 29.22351264953613 14.27700519561768 C 28.78220367431641 13.90463352203369 28.15262413024902 13.90463352203369 27.71131134033203 14.27700519561768 Z M 56.49555206298828 24.95546913146973 L 48.23279571533203 17.82580375671387 L 48.23279571533203 3.495077610015869 C 48.23279571533203 2.80938196182251 47.70178985595703 2.25351619720459 47.0467529296875 2.25351619720459 L 41.51189422607422 2.25351619720459 C 40.85686111450195 2.25351619720459 40.32585144042969 2.809382677078247 40.32585144042969 3.495078086853027 L 40.32585144042969 11.00755882263184 L 31.47699356079102 3.386440992355347 C 29.72567939758301 1.877823829650879 27.19926643371582 1.877823829650879 25.44795036315918 3.386440992355347 L 0.4293886125087738 24.95546913146973 C -0.0757187157869339 25.39249801635742 -0.1465346217155457 26.17551231384277 0.2712500989437103 26.70400428771973 L 2.791588306427002 29.9113712310791 C 2.991665363311768 30.16604423522949 3.280301570892334 30.32694053649902 3.593838214874268 30.35857772827148 C 3.907374858856201 30.39021492004395 4.220054626464844 30.28999328613281 4.462918281555176 30.08001708984375 L 27.71131134033203 10.03500270843506 C 28.15262413024902 9.662633895874023 28.78220367431641 9.662633895874023 29.2235164642334 10.03500366210938 L 52.47289657592773 30.08001708984375 C 52.97775268554688 30.51735496520996 53.72575378417969 30.44322204589844 54.14323806762695 29.91447448730469 L 56.66357803344727 26.70710563659668 C 56.86399459838867 26.45184516906738 56.95894622802734 26.12348747253418 56.92741012573242 25.79472541809082 C 56.8958740234375 25.46596336364746 56.74045562744141 25.1639232635498 56.49556350708008 24.95546913146973 Z"></path>
					</svg> 
				</a>
			</li>
			<li><a href="#">&#160;&#160;&#160;<b>Giới thiệu</b>&#160;&#160;</a>
				<ul class="sub-menu" class="sub1">
					<li class="li6"><a href="../static_page/vechungtoi.php">Về Anh ngữ 2ENG</a></li><br>
					<li class="li7"><a href="../static_page/phuongthucdaotao.php">Phương thức đào tạo</a></li><br>
					<li class="li8"><a href="../static_page/tuyendung.php">Tuyển dụng</a></li><br>
					<li class="li9"><a href="../static_page/chiasekinhnghiem.php">Chia sẻ kinh nghiệm</a></li>
				</ul>
			</li>
			<li><a href="./KhoaHoc/TrangKH.php">&#160;&#160;&#160;<b>Khóa học</b>&#160;&#160;</a>
				<ul class="sub-menu" class="sub2">
					<li class="li1"><a href="../KhoaHoc/TrangToeic2.php">TOEIC 2 Kỹ Năng</a></li><br>
					<li class="li2"><a href="../KhoaHoc/TrangToeic4.php">TOEIC 4 Kỹ Năng</a></li><br>
					<li class="li3"><a href="../KhoaHoc/TrangVNU-EPT.php">Luyện Thi VNU-EPT</a></li><br>
					<li class="li4"><a href="../KhoaHoc/TrangIelts.php">Luyện Thi IELTS</a></li><br>
					<li class="li5"><a href="../KhoaHoc/TrangGiaoTiep.php">Tiếng Anh Giao Tiếp</a></li><br>
				</ul>
			</li>
			<li><a href="./KhaiGiang/TrangKG.php">&#160;&#160;&#160;<b>Lịch Khai Giảng</b>&#160;&#160;</a>
				<ul class="sub-menu" class="sub2">
					<li class="li1"><a href="../KhaiGiang/TrangKG.php#Toeic2">TOEIC 2 Kỹ Năng</a></li><br>
					<li class="li2"><a href="../KhaiGiang/TrangKG.php#Toeic4">TOEIC 4 Kỹ Năng</a></li><br>
					<li class="li3"><a href="../KhaiGiang/TrangKG.php#VNU-EPT">Luyện Thi VNU-EPT</a></li><br>
					<li class="li4"><a href="../KhaiGiang/TrangKG.php#Ielts">Luyện Thi IELTS</a></li><br>
					<li class="li5"><a href="../KhaiGiang/TrangKG.php#GiaoTiep">Tiếng Anh Giao Tiếp</a></li><br>
				</ul>
			</li>
			<li><a href="#">&#160;&#160;&#160;<b>Học Viên</b>&#160;&#160;</a>
				<ul class="sub-menu" class="sub3">
					<li class="li10"><a href="../HocVien/TrangStudentPolicy.php">Chính sách học viên</a></li><br>
					<li class="li11"><a href="../HocVien/TrangSupportStudents.php">Hỗ trợ học viên</a></li><br>
					<li class="li12"><a href="../HocVien/TrangFeedback.php">Phản hồi</a></li>
				</ul>
			</li>
			<li><a href="../DangKi/register.php">&#160;&#160;&#160;<b>Đăng Kí</b>&#160;&#160;</a></li>
			<li><a href="../BaiTapLop/login_class.php">&#160;&#160;&#160;<b>Bài Tập Lớp</b>&#160;&#160;</a></li>
			<li><a href="../CuaHang/TrangCuaHang.php">&#160;&#160;&#160;<b>Cửa Hàng</b>&#160;&#160;</a></li>
			<li><a href="../TestOnline/test_toeic.php">&#160;&#160;&#160;<b>Test Online</b>&#160;&#160;</a></li>
			<li><a href="../LienHe/contact.php">&#160;&#160;&#160;<b>Liên Hệ</b>&#160;&#160;</a>
		</ul>
	</div>
	<script>
function myFunction() {
	var x = document.getElementById("dropdown");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
	
	<div id="form">
			<form action="" method = "POST" enctype="multipart/form-data">
				<input type="text" class="input" id="email" name="YeuCau" value="" oninput="limitLengStart()" maxlength="500">
				<input type="text" class="input" id="sdt" name="MoTa" value="" oninput="limitLengStart1()" maxlength="500"></br>
				<input id="file" type="file" name="fileitem" value="Upload File">
				<br><input type="submit" class="Rectangle_24" name="add" value="Thêm"></br> 
			</form>
	</div>

	<svg class="Rectangle_21">
	<a href="#"><rect id="Rectangle_21" rx="0" ry="0" x="0" y="0" width="397" height="44">
		</rect></a>
	</svg>
	<svg class="Icon_awesome-user-alt_bs" viewBox="0 0 20 20">
	<a href="#"><path id="Icon_awesome-user-alt_bs" d="M 10 11.25 C 13.10546875 11.25 15.625 8.73046875 15.625 5.625 C 15.625 2.51953125 13.10546875 0 10 0 C 6.89453125 0 4.375 2.51953125 4.375 5.625 C 4.375 8.73046875 6.89453125 11.25 10 11.25 Z M 15 12.5 L 12.84765625 12.5 C 11.98046875 12.8984375 11.015625 13.125 10 13.125 C 8.984375 13.125 8.0234375 12.8984375 7.15234375 12.5 L 5 12.5 C 2.23828125 12.5 0 14.73828125 0 17.5 L 0 18.125 C 0 19.16015625 0.83984375 20 1.875 20 L 18.125 20 C 19.16015625 20 20 19.16015625 20 18.125 L 20 17.5 C 20 14.73828125 17.76171875 12.5 15 12.5 Z">
		</path></a>
	</svg>
	<div id="_Change_Personal_Information">
		<span><br/><a href="GiaoBaiTap.php" style="text-decoration: none; color:black">Bài Tập Lớp</a></span>
	</div>
	<svg class="Line_18" viewBox="0 0 5 44">
		<path id="Line_18" d="M 0 0 L 0 44">
		</path>
	</svg>
	<svg class="Rectangle_22">
	<a href="DanhSachLop.php"><rect id="Rectangle_22" rx="0" ry="0" x="0" y="0" width="397" height="44">
		</rect></a>
	</svg>
	<div id="_Change_Password">
		<span><a href="DanhSachLop.php" style="text-decoration: none; color:black"><br/>Danh Sách Lớp</a></span>
	</div>
	<svg class="Icon_awesome-lock" viewBox="0 0 17.5 20">
	<a href="DanhSachLop.php"><path id="Icon_awesome-lock" d="M 15.625 8.75 L 14.6875 8.75 L 14.6875 5.9375 C 14.6875 2.6640625 12.0234375 0 8.75 0 C 5.4765625 0 2.8125 2.6640625 2.8125 5.9375 L 2.8125 8.75 L 1.875 8.75 C 0.83984375 8.75 0 9.58984375 0 10.625 L 0 18.125 C 0 19.16015625 0.83984375 20 1.875 20 L 15.625 20 C 16.66015625 20 17.5 19.16015625 17.5 18.125 L 17.5 10.625 C 17.5 9.58984375 16.66015625 8.75 15.625 8.75 Z M 11.5625 8.75 L 5.9375 8.75 L 5.9375 5.9375 C 5.9375 4.38671875 7.19921875 3.125 8.75 3.125 C 10.30078125 3.125 11.5625 4.38671875 11.5625 5.9375 L 11.5625 8.75 Z">
		</path></a>
	</svg>
	<svg class="Rectangle_23">
	<a href="logout_class.php"><rect id="Rectangle_23" rx="0" ry="0" x="0" y="0" width="397" height="44">
		</rect></a>
	</svg>
	<svg class="Icon_open-account-logout" viewBox="0 0 20 17.5">
	<a href="logout_class.php"><path id="Icon_open-account-logout" d="M 7.5 0 L 7.5 2.5 L 17.5 2.5 L 17.5 15 L 7.5 15 L 7.5 17.5 L 20 17.5 L 20 0 L 7.5 0 Z M 5 5 L 0 8.75 L 5 12.5 L 5 10 L 15 10 L 15 7.5 L 5 7.5 L 5 5 Z">
		</path></a>
	</svg>
	<div id="_Logout">
		<span><a href="logout_class.php" style="text-decoration: none; color:black"><br/>Đăng Xuất Lớp</a></span>
    </div>

    <svg class="add">
	<a href="ThemBai.php"><rect id="add" rx="0" ry="0" x="0" y="0" width="397" height="44">
		</rect></a>
    </svg>
    
    <svg class="_add" viewBox="3 3 30 30">
    <a href="ThemBai.php"><path id="_add" d="M 18 3 C 9.720000267028809 3 3 9.720000267028809 3 18 C 3 26.27999877929688 9.719999313354492 33 18 33 C 26.28000068664551 33 33 26.28000068664551 33 18 C 33 9.719999313354492 26.28000068664551 3 18 3 Z M 25.5 19.5 L 19.5 19.5 L 19.5 25.5 L 16.5 25.5 L 16.5 19.5 L 10.5 19.5 L 10.5 16.5 L 16.5 16.5 L 16.5 10.5 L 19.5 10.5 L 19.5 16.5 L 25.5 16.5 L 25.5 19.5 Z">
		</path></a>
	</svg>

	<div id="__add">
		<span><a href="ThemBai.php" style="text-decoration: none; color:red"><br/>Thêm Bài Tập</a></span>
	</div>


</div>
</body>
</html>