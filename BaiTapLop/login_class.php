<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Đăng Nhập Lớp Học</title>
<link rel="stylesheet" href="../css/login_class.css">
<script language="javascript" src="../js/login_class.js"></script>
</head>
<body>
<?php
	include("../include/config.php");
	session_start();
	if(isset($_SESSION['MaLop']) && $_SESSION['MaLop'] != ""){
		header("Location:BaiTapLop.php");
    }
	$user_login = session();
	$info_user = check_NguoiDung($user_login);
	$a = 1;

	if(isset($_POST['dangnhap'])){
		$malop = $_POST['malop'];
		$matkhau = $_POST['matkhau'];
	
		if($malop != "" && $matkhau != ""){ 
			$row = check_malop($malop, $matkhau);
			if($row == 0){ 
				$a = 0;
			}
			else {
				$_SESSION['MaLop'] = $malop;
				$a = 1;
				if ($info_user['LoaiTK'] == "GV"){
					header("Location:GiaoBaiTap.php");
				}
				else{
					header("Location:BaiTapLop.php");
				}
					
			}
		}
		else {
			$a = 0;
		}
	}
?>
<div id="Web_1366__1">
	<img id="Untitled" src="../img/Untitled.png">
	<div id="LEARN_TO_ENGLISH_WITH_2Eng">
		<span>LEARN TO ENGLISH WITH 2Eng</span>
	</div>
	<?php if($user_login == "none_user") { 
		header("Location: login.php");
	 }
	else { ?>
		<div id="Hi">
			<span>Hi,</span>
		</div>
		<div id="Ngc">
			<span style="cursor:pointer;" id="demo" onclick="myFunction()"><?php echo $info_user["Lastname"]; ?></span>
		</div>
	<?php } ?>
	<img id="ID1" src="../img/ID1.png">
	<svg class="Rectangle_15">
		<rect id="Rectangle_15" rx="0" ry="0" x="0" y="0" width="1291" height="1000">
		</rect>
	</svg>
	<div id="Group_18">
		<svg class="Rectangle_14">
			<rect id="Rectangle_14" rx="0" ry="0" x="0" y="0" width="1523" height="299">
			</rect>
		</svg>
		<div id="TRUNG_TM_ANH_NG_2Eng_a_ch_Khu_">
			
			<span>TRUNG TÂM ANH NGỮ 2Eng</span><br><span style="font-size:25px;color:rgba(242,242,243,1);">Địa chỉ: Khu phố 6, P.Linh Trung, Q.Thủ Đức, TP.Hồ Chí Minh<br/>Điện thoại: (028) 782 50593.<br/>Email: 2Eng@group2.edu.vn</span>
		</div>
		<img id="Image_4" src="../img/Image_41.png">
		<svg class="Line_16" viewBox="0 0 1267 2">
			<path id="Line_16" d="M 0 0 L 1267 0">
			</path>
		</svg>
		<div id="_2020_2Eng_All_Rights_Reserved">
			<span>© 2020 2Eng. All Rights Reserved</span>
		</div>
		<div id="Group_17">
			<div id="FOLLOW_2Eng__">
				<span>FOLLOW 2Eng<br/></span><br>
			</div>
			<img id="Image_1" src="../img/Image_1.png">
			<img id="Image_2" src="../img/Image_2.png">
		</div>
	</div>
	<img id="logo-da-thong-bao-website-voi-" src="../img/logo-da-thong-bao-website-voi-.png">
	<img id="form-login-popup" src="../img/form-login-popup.png">
	<img id="Image_4_bh" src="../img/Image_41.png">
	<!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
		<!-- --------------------------------------------------------------------------------- -->
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
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////// -->
    
    <div id="NG_NHP_LP_HC">
			<span>ĐĂNG NHẬP LỚP HỌC</span>
    </div>
    
    <svg class="khung">
        <rect id="khung" rx="46" ry="46" x="0" y="0" width="811" height="301">
        </rect>
    </svg>
        <svg class="Icon_material-verified-user" viewBox="4.5 1.5 33.7 37.5">
			<path id="Icon_material-verified-user" d="M 21.35000801086426 1.5 L 4.5 8.318181991577148 L 4.5 18.54545402526855 C 4.5 28.00568199157715 11.6893367767334 36.85227584838867 21.35000801086426 39 C 31.01067924499512 36.85227584838867 38.20001220703125 28.00568199157715 38.20001220703125 18.54545402526855 L 38.20001220703125 8.318181991577148 L 21.35000801086426 1.5 Z M 17.60556030273438 28.77272605895996 L 10.11666870117188 21.95454406738281 L 12.75650215148926 19.5511360168457 L 17.60556030273438 23.94886207580566 L 29.94351387023926 12.71590805053711 L 32.58334732055664 15.1363639831543 L 17.60556030273438 28.77272605895996 Z">
			</path>
        </svg>

        <svg class="Icon_metro-key" viewBox="2.571 1.928 29.582 32.466">
			<path id="Icon_metro-key" d="M 22.90816497802734 1.928033351898193 C 17.80271148681641 1.928033351898193 13.66386318206787 6.470398902893066 13.66386318206787 12.07375526428223 C 13.66386318206787 12.70868682861328 13.71753883361816 13.32979679107666 13.81916809082031 13.93245220184326 L 2.570701360702515 26.27776336669922 L 2.570701360702515 32.36520004272461 C 2.570701360702515 33.48585891723633 3.398470640182495 34.39434432983398 4.419561862945557 34.39434432983398 L 6.268421649932861 34.39434432983398 L 6.268421649932861 32.36519622802734 L 9.966141700744629 32.36519622802734 L 9.966141700744629 28.30690765380859 L 13.66386318206787 28.30690765380859 L 13.66386318206787 24.24862098693848 L 17.3615837097168 24.24862098693848 L 19.76053810119629 21.61574363708496 C 20.74303245544434 22.0062255859375 21.80283737182617 22.2194766998291 22.90816497802734 22.2194766998291 C 28.01362037658691 22.2194766998291 32.1524658203125 17.67711067199707 32.1524658203125 12.07375526428223 C 32.1524658203125 6.470398902893066 28.01361846923828 1.928033828735352 22.90816497802734 1.928033828735352 Z M 25.67781639099121 12.07775020599365 C 24.14615058898926 12.07775020599365 22.90452575683594 10.71505260467529 22.90452575683594 9.03403377532959 C 22.90452575683594 7.353014945983887 24.14615058898926 5.990317344665527 25.67781639099121 5.990317344665527 C 27.20948028564453 5.990317344665527 28.45110702514648 7.353014469146729 28.45110702514648 9.03403377532959 C 28.45110702514648 10.71505355834961 27.20948028564453 12.07775020599365 25.67781639099121 12.07775020599365 Z">
			</path>
		</svg>
		
        <form method="post">
            <input type="text" class="Rectangle_16" name="malop" placeholder="(*) Nhập Mã Lớp" id="malop">
            <input type="password" class="Rectangle_19" name="matkhau" placeholder="(*) Mật Khẩu" id="matkhau">
			<input type="submit" class="Rectangle_18" name="dangnhap" value="Đăng Nhập" onclick='checkEmpty()'>
			<label id="ng_nhp_khng_thnh_cng"></label>
        </form>

        <div id="I_TC_CA__CHNG_TI">
		<span>ĐỐI TÁC CỦA <br/>CHÚNG TÔI</span>
	</div>
	<img id="Image_3" src="../img/Image_3.png">
	<img id="Image_4777" src="../img/metro.png">
	<img id="Image_5" src="../img/oil.png">
	<img id="Image_6" src="../img/vin.png">
    <img id="Image_7" src="../img/fpt.png">
    
    <svg class="Rectangle_20">
			<a href="contact.php"><rect id="Rectangle_20" rx="24" ry="24" x="0" y="0" width="240" height="48">
			</rect></a>
		</svg>
		<svg class="Icon_awesome-hand-point-right" viewBox="0 4.5 36 27">
			<path id="Icon_awesome-hand-point-right" d="M 36 14.03803157806396 C 36 15.69916439056396 34.54804611206055 17.11954689025879 32.84999847412109 17.11954689025879 L 25.82922554016113 17.11954689025879 C 26.9781322479248 18.31823348999023 27.11917877197266 20.61871910095215 25.38632774353027 22.10779571533203 C 26.39095306396484 23.71295928955078 25.53728866577148 25.8355541229248 24.22968673706055 26.48931884765625 C 24.86067199707031 29.94454765319824 22.68660926818848 31.5 19.125 31.5 C 18.93192100524902 31.5 18.19153213500977 31.48572731018066 18 31.48628997802734 C 13.64266395568848 31.49810218811035 12.59339046478271 29.30203247070313 9.300164222717285 28.79226684570313 C 8.479406356811523 28.66521072387695 7.875 27.95618057250977 7.875 27.12557792663574 L 7.875 15.06522655487061 L 7.87514066696167 15.06515598297119 C 7.875914096832275 13.77379608154297 8.620944976806641 12.54171085357666 9.87651538848877 11.98230457305908 C 11.90756225585938 11.06866359710693 16.58524131774902 8.534319877624512 17.4375 6.545531272888184 C 17.98572731018066 5.266265869140625 18.94106292724609 4.50056266784668 20.25 4.5 C 22.65623474121094 4.499015808105469 24.31068801879883 6.967827796936035 23.35211753845215 9.204468727111816 C 23.10018730163574 9.792210578918457 22.76767921447754 10.37657833099365 22.35698509216309 10.95651531219482 L 32.84999847412109 10.95651531219482 C 34.49882507324219 10.95651531219482 36 12.40094470977783 36 14.03803062438965 Z M 6.75 14.0625 L 6.75 27.5625 C 6.75 28.49449157714844 5.994492053985596 29.25 5.0625 29.25 L 1.6875 29.25 C 0.7555078268051147 29.25 0 28.49449157714844 0 27.5625 L 0 14.0625 C 0 13.13050746917725 0.7555078268051147 12.375 1.6875 12.375 L 5.0625 12.375 C 5.994492053985596 12.375 6.75 13.13050746917725 6.75 14.0625 Z M 4.78125 25.875 C 4.78125 25.09832763671875 4.151671886444092 24.46875 3.375 24.46875 C 2.598328113555908 24.46875 1.96875 25.09832763671875 1.96875 25.875 C 1.96875 26.65167236328125 2.598328113555908 27.28125 3.375 27.28125 C 4.151671886444092 27.28125 4.78125 26.65167236328125 4.78125 25.875 Z">
			</path>
		</svg>
		<a href="contact.php" style="text-decoration: none; color:#fff;"><div id="Lin_H_T_Vn">
			<span>Liên Hệ Tư Vấn</span>
		</div></a>

</div>
	<script>
		var result = <?php echo json_encode($a); ?>;
		if(result < 1){
			document.getElementById("ng_nhp_khng_thnh_cng").innerHTML="Đăng nhập không thành công!";
		}
		else {
			document.getElementById("ng_nhp_khng_thnh_cng").innerHTML="";
		}
	</script>

</body>
</html>