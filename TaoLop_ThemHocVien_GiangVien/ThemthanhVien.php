<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thêm Thành Viên</title>
<script language="javascript" src="../js/ThemHocVien.js"></script>
<link rel="stylesheet" href="../css/TaoLop.css">
</head>
<body>
<?php
	include("../include/config.php");
	session_start();
	$user_login = session();
    $info_user = check_NguoiDung($user_login);
    if($user_login != "QTV" || !isset($_SESSION['UserID'])){
        header("Location: home.php");
    }
    $MaLop = $_GET['MaLop'];
    $Loai = $_GET['Loai'];

    $xeplop = get_XepLop($MaLop);
    $giangday = get_GiangDay($MaLop);
    $nguoidung = NguoiDung();

    if(isset($_POST['DanhSachLop'])){
        header("Location: ../BaiTapLop/DanhSachLopHoc.php");
    }

    if(isset($_POST['submit'])){
        $hidden = $_POST['hidden'];
        if ($hidden == 1){
            $MaND = $_POST['MaND'];
            if($Loai == "GV"){
                $result = addGV($MaLop, $MaND); 
                if($result == 1){
                ?>
                    <script>alert("Thêm Giáo Viên Thành Công");
                </script>
                <?php
                header("Location: ThemThanhVien.php?MaLop=".$MaLop."&&Loai=".$Loai);
                }
            }
            else{
                $result = addHV($MaLop, $MaND);
                if($result == 1){
                    ?>
                    <script>alert("Thêm Học Viên Thành Công");
                    </script>
                    <?php
                    header("Location: ThemThanhVien.php?MaLop=".$MaLop."&&Loai=".$Loai);
                    }
            }
            
        }
    }
?>
<div id="Web_1366__1">
	<img id="Untitled" src="../img/Untitled.png">
	<div id="LEARN_TO_ENGLISH_WITH_2Eng">
		<span>LEARN TO ENGLISH WITH 2Eng</span>
	</div>
	<?php if($user_login == "none_user") { ?>
	<div id="Group_14">
		<div id="Group_13">
			<svg class="Rectangle_7">
				<a href="login.php"><rect id="Rectangle_7" rx="19" ry="19" x="0" y="0" width="172" height="55"></a>
				</rect>
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
	<img id="ID1" src="../img/ID1.png">
	<svg class="Rectangle_15">
		<rect id="Rectangle_15" rx="0" ry="0" x="0" y="0" width="1291" height="700">
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
		<img id="Image_4" src="../img/Image_41.png">
	</div>
	<img id="logo-da-thong-bao-website-voi-" src="../img/logo-da-thong-bao-website-voi-.png">
	<img id="form-login-popup" src="../img/form-login-popup.png">
    
	<a href="./static_page/lotrinh650-800.php"><img id="khoa-hoc-toeic-650-2" src="../img/khoa-hoc-toeic-650-2.png"></a>
	<a href="./static_page/baithitoeic.php"><img id="L-trnh-n-thi-TOEIC--mi-t-500-i" src="../img/TOEIC-Test-Preparation-in-Canada.png"></a>
	<a href="./static_page/lotrinh500.php"><img id="maxresdefault-9" src="../static_page/img/toeic-4.jpg"></a>

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
    
    <form method="post">
        <input type="hidden" name="hidden" id="hidden">
        <table id="table">
        </table>
    </form>
    

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


    /********************************************************************* */
    /********************************************************************* */

    var table = document.getElementById("table");

    var row4 = table.insertRow();
    var cell6 = row4.insertCell(0);
    cell6.innerHTML = "<input type='submit' name='DanhSachLop' id='DanhSachLop' value = 'Xem Danh Sách Lớp Học'>";
    cell6.style.textAlign = "center";
    cell6.style.color = "rgba(57,24,159,1)";
    cell6.style.fontWeight = "bold";
    cell6.style.paddingTop = "30px";
    cell6.style.paddingBottom = "60px";
    cell6.style.fontSize = "30px";
    cell6.colSpan = 2;


    var row4 = table.insertRow();
    var cell6 = row4.insertCell(0);
    cell6.innerHTML = "Thêm Thành Viên Lớp";
    cell6.style.textAlign = "center";
    cell6.style.color = "rgba(57,24,159,1)";
    cell6.style.fontWeight = "bold";
    cell6.style.paddingTop = "30px";
    cell6.style.paddingBottom = "60px";
    cell6.style.fontSize = "30px";
    cell6.colSpan = 2;

    var row3 = table.insertRow();
    var cell4 = row3.insertCell(0);
    var cell5 = row3.insertCell(1);
    cell4.innerHTML = "Mã Lớp";
    cell4.style.border = "1px solid black";
    cell4.style.paddingLeft = "10px";
    cell5.innerHTML = <?php echo json_encode($MaLop); ?>,
    cell5.style.border = "1px solid black";

    var row3 = table.insertRow();
    var cell4 = row3.insertCell(0);
    var cell5 = row3.insertCell(1);
    cell4.innerHTML = "Loại Người Dùng";
    cell4.style.border = "1px solid black";
    cell4.style.paddingLeft = "10px";
    var Loai = <?php echo json_encode($Loai); ?>;
    if(Loai == "GV"){
        Loai = "Giáo Viên";
    }
    else{
        Loai = "Học Viên";
    }
    cell5.innerHTML = Loai,
    cell5.style.border = "1px solid black";

    var row3 = table.insertRow();
    var cell4 = row3.insertCell(0);
    var cell5 = row3.insertCell(1);
    cell4.innerHTML = "Mã Người Dùng";
    cell4.style.paddingLeft = "10px";
    cell4.style.paddingRight = "10px";
    cell4.style.border = "1px solid black";
    cell5.innerHTML = "<input type=\"text\" name=\"MaND\" id='MaND' class='input'>",
    cell5.style.border = "1px solid black";

    var row4 = table.insertRow();
    var cell6 = row4.insertCell(0);
    cell6.innerHTML = "<input type='submit' id='ThemThanhVien' name='submit' onclick='checkND()' value='Thêm Thành Viên Lớp'>";
    cell6.style.textAlign = "center";
    cell6.colSpan = 2;


    function checkND(){
        var LoaiND = <?php echo json_encode($Loai); ?>;
        var MaND = document.getElementById("MaND").value;
        var loaitk;
        if(LoaiND == "GV"){
            loaitk = "Giáo Viên";
        }
        else {
            loaitk = "Học Viên";
        }
        var xeplop = <?php echo json_encode($xeplop); ?>;
        var giangday = <?php echo json_encode($giangday); ?>;
        var nguoidung = <?php echo json_encode($nguoidung); ?>;

        var index = 0;

        if(MaND == null || MaND == ""){
            alert("Chưa Nhập Mã Người Dùng!");
            index = 0;
        }
        else {
            var checkND = -1;
            for(var i = 0; i<nguoidung.length; i++){
                if(nguoidung[i].UserID == MaND){
                    if(nguoidung[i].LoaiTK == LoaiND){
                        checkND = i;
                    }
                }
            }
            if(checkND != -1){
                if(LoaiND == "GV"){
                    var checkGV = 0;
                    if (giangday == null){
                        index = 1;
                    }
                    else {
                        if(giangday.length == undefined){
                            if(giangday.MaGV == MaND){
                                alert("Người Dùng Đã Là Giảng Viên Của Lớp");
                                index = 0;
                            }
                            else {
                                index = 1;
                            }
                        }
                        else {
                            for(var i = 0; i<giangday.length; i++){
                                if(giangday[i].MaGV == MaND){
                                    alert("Người Dùng Đã Là Giảng Viên Của Lớp");
                                    checkGV = 1;
                                }
                            }
                            if(checkGV == 1){
                                index = 0;
                            }
                            else {
                                index = 1;
                            }
                        }
                    }
                    
                }
                else{
                    var checkHV = 0;
                    if (xeplop == null){
                        index = 1;
                    }
                    else {
                        if(xeplop.length == undefined){
                            if(xeplop.MaHV == MaND){
                                alert("Người Dùng Đã Là Học Viên Của Lớp");
                                index = 0;
                                
                            }
                        }
                        else {
                            for(var i = 0; i<xeplop.length; i++){
                                if(xeplop[i].MaHV == MaND){
                                    alert("Người Dùng Đã Là Học Viên Của Lớp");
                                    checkHV = 1;
                                }
                            }
                            if(checkHV == 1){
                                index = 0;
                            }
                            else {
                                index = 1;
                            }
                        }
                    }
                }
            }
            else{
                index = 0;
                alert("Người Dùng Không Tìm Thấy Hoặc Không Phải Là " + loaitk);
            }

        }

        if (index == 1){
            document.getElementById("hidden").value = 1;
        }
        else {
            document.getElementById("hidden").value = 0;
        }
    }

</script>
</body>
</html>
