<?php
	include("../include/config.php");
	session_start();
	$user_login = session();
	$info_user = check_NguoiDung($user_login);

    echo "<div id='Web_1366__1'>
            <img id='Untitled' src='../img/Untitled.png'>
            <div id='LEARN_TO_ENGLISH_WITH_2Eng'>
                <span>LEARN TO ENGLISH WITH 2Eng</span>
            </div>";
	if($user_login == "none_user") { 
        
        echo "<div id='Group_14'>
                <div id='Group_13'>
                    <svg class='Rectangle_7'>
                        <a href='../login/login.php'><rect id='Rectangle_7' rx='19' ry='19' x='0' y='0' width='172' height='55'></rect></a>
                        
                    </svg>
                    <div>
                        <a id='ng_nhp' href='../login/login.php' style='text-decoration: none;'>Đăng nhập</a>
                    </div>
                </div>
            </div>";
	}
	else { 
        echo "
            <div id='Hi'>
                <span>Hi,</span>
            </div>
            <div id='Ngc'>
                <span style='cursor:pointer;' id='demo' onclick='myFunction()'>".$info_user["Lastname"]." </span>
            </div>";
    }
     
    echo "
        <img id='ID1' src='../img/ID1.png'>
        <svg class='Rectangle_15'>
            <rect id='Rectangle_15' rx='0' ry='0' x='0' y='0' width='1291' height='1000'>
            </rect>
        </svg>
        <div id='Group_18'>
            <svg class='Rectangle_14'>
                <rect id='Rectangle_14' rx='0' ry='0' x='0' y='0' width='1523' height='299'>
                </rect>
            </svg>
            <div id='TRUNG_TM_ANH_NG_2Eng_a_ch_Khu_'>
                <img id='Image_4' src='../img/Image_41.png'>
                <span>TRUNG TÂM ANH NGỮ 2Eng</span><br><span style='font-size:25px;color:rgba(242,242,243,1);'>Địa chỉ: Khu phố 6, P.Linh Trung, Q.Thủ Đức, TP.Hồ Chí Minh<br/>Điện thoại: (028) 782 50593.<br/>Email: 2Eng@group2.edu.vn</span>
            </div>
            <svg class='Line_16' viewBox='0 0 1267 2'>
                <path id='Line_16' d='M 0 0 L 1267 0'>
                </path>
            </svg>
            <div id='_2020_2Eng_All_Rights_Reserved'>
                <span>© 2020 2Eng. All Rights Reserved</span>
            </div>
            <div id='Group_17'>
                <div id='FOLLOW_2Eng__'>
                    <span>FOLLOW 2Eng<br/></span><br>
                </div>
                <img id='Image_1' src='../img/Image_1.png'>
                <img id='Image_2' src='../img/Image_2.png'>
                <img id='logo-da-thong-bao-website-voi-' src='../img/logo-da-thong-bao-website-voi-.png'>
            </div>
        </div>
        <a href='../LienHe/contact.php'>
            <img id='form-login-popup' src='../img/form-login-popup.png'>
        </a>";

    echo "
        <a href='../static_page/lotrinh650-800.php'><img id='khoa-hoc-toeic-650-2' src='../img/khoa-hoc-toeic-650-2.png'></a>
        <a href='../static_page/baithitoeic.php'><img id='L-trnh-n-thi-TOEIC--mi-t-500-i' src='../img/TOEIC-Test-Preparation-in-Canada.png'></a>
        <a href='../static_page/lotrinh500.php'><img id='maxresdefault-9' src='../img/toeic-4.jpg'></a>
        <svg class='Rectangle_18'>
            <rect id='Rectangle_18' rx='0' ry='0' x='0' y='0' width='307' height='381'>
            </rect>
        </svg>
        <svg class='Line_19' viewBox='0 0 245 1'>
            <path id='Line_19' d='M 0 0 L 245 0'>
            </path>
        </svg>
        <div id='NG_K_T_VN'>
            <span>ĐĂNG KÍ TƯ VẤN</span>
        </div>
        <img id='Image_4_bh' src='../img/Image_41.png'>

            <!-- --------------------------------------------------------------------------------- -->
            <!-- --------------------------------------------------------------------------------- -->
            <!-- --------------------------------------------------------------------------------- -->
            <!-- --------------------------------------------------------------------------------- -->
            <!-- --------------------------------------------------------------------------------- -->
            <!-- --------------------------------------------------------------------------------- -->
            <!-- --------------------------------------------------------------------------------- -->
        <div id='dropdown' style='display: none;'>
            <ul>";
        
	if($user_login == "QTV"){		
		echo "<a href='../TaoLop_ThemHocVien_GiangVien/ThemHocVien.php' style='text-decoration: none; color:black'><li>Thêm Người Dùng</li></a>
				<a href='../TaoLop_ThemHocVien_GiangVien/TaoLop.php' style='text-decoration: none; color:black'><li>Tạo Lớp</li></a> ";
    } 
    
    echo "	<a href='../infoUser/infoUser.php' style='text-decoration: none; color:black'><li>Thông Tin Cá Nhân</li></a>
			<a href='../BaiTapLop/login_class.php' style='text-decoration: none; color:black'><li>Bài Tập Lớp</li>
			<a href='../TestOnline/LichSuTest.php' style='text-decoration: none; color:black'><li>Lịch Sử Test</li>
			<a href='../login/resetPassword.php' style='text-decoration: none; color:black'><li>Thay Đổi Mật Khẩu</li>
			<a href='../login/logout.php' style='text-decoration: none; color:black'><li>Đăng Xuất</li>
		</ul> 
        </div>
        <div id='menu'>
            <ul>
                <li><a href='../TrangChu/home.php'>
                        <svg class='Icon_awesome-home' viewBox='-0.001 2.254 56.934 46.346'>
                            <path id='Icon_awesome-home' d='M 27.71131134033203 14.27700519561768 L 9.48876953125 29.9879322052002 L 9.48876953125 46.94456100463867 C 9.48876953125 47.85882186889648 10.19678211212158 48.59997177124023 11.07015895843506 48.59997177124023 L 22.14581108093262 48.56997299194336 C 23.01609992980957 48.5654182434082 23.71930503845215 47.82559585571289 23.71929359436035 46.91455841064453 L 23.71929359436035 37.01206970214844 C 23.71929359436035 36.09780502319336 24.42730522155762 35.35665130615234 25.30068206787109 35.35665130615234 L 31.6262378692627 35.35665130615234 C 32.49961471557617 35.35665130615234 33.20762634277344 36.09780502319336 33.20762634277344 37.01206970214844 L 33.20762634277344 46.90730667114258 C 33.20631408691406 47.34724426269531 33.37234115600586 47.7696418762207 33.66905212402344 48.08121871948242 C 33.96576309204102 48.39278411865234 34.36874771118164 48.56790161132813 34.78901290893555 48.56790161132813 L 45.86071395874023 48.59997177124023 C 46.73408508300781 48.59997177124023 47.44210433959961 47.85882186889648 47.44210433959961 46.94456100463867 L 47.44210433959961 29.97655296325684 L 29.22351264953613 14.27700519561768 C 28.78220367431641 13.90463352203369 28.15262413024902 13.90463352203369 27.71131134033203 14.27700519561768 Z M 56.49555206298828 24.95546913146973 L 48.23279571533203 17.82580375671387 L 48.23279571533203 3.495077610015869 C 48.23279571533203 2.80938196182251 47.70178985595703 2.25351619720459 47.0467529296875 2.25351619720459 L 41.51189422607422 2.25351619720459 C 40.85686111450195 2.25351619720459 40.32585144042969 2.809382677078247 40.32585144042969 3.495078086853027 L 40.32585144042969 11.00755882263184 L 31.47699356079102 3.386440992355347 C 29.72567939758301 1.877823829650879 27.19926643371582 1.877823829650879 25.44795036315918 3.386440992355347 L 0.4293886125087738 24.95546913146973 C -0.0757187157869339 25.39249801635742 -0.1465346217155457 26.17551231384277 0.2712500989437103 26.70400428771973 L 2.791588306427002 29.9113712310791 C 2.991665363311768 30.16604423522949 3.280301570892334 30.32694053649902 3.593838214874268 30.35857772827148 C 3.907374858856201 30.39021492004395 4.220054626464844 30.28999328613281 4.462918281555176 30.08001708984375 L 27.71131134033203 10.03500270843506 C 28.15262413024902 9.662633895874023 28.78220367431641 9.662633895874023 29.2235164642334 10.03500366210938 L 52.47289657592773 30.08001708984375 C 52.97775268554688 30.51735496520996 53.72575378417969 30.44322204589844 54.14323806762695 29.91447448730469 L 56.66357803344727 26.70710563659668 C 56.86399459838867 26.45184516906738 56.95894622802734 26.12348747253418 56.92741012573242 25.79472541809082 C 56.8958740234375 25.46596336364746 56.74045562744141 25.1639232635498 56.49556350708008 24.95546913146973 Z'></path>
                        </svg> 
                    </a>
                </li>
                <li><a href='#'>&#160;&#160;&#160;<b>Giới thiệu</b>&#160;&#160;</a>
                    <ul class='sub-menu' class='sub1'>
                        <li class='li6'><a href='../static_page/vechungtoi.php'>Về Anh ngữ 2ENG</a></li><br>
                        <li class='li7'><a href='../static_page/phuongthucdaotao.php'>Phương thức đào tạo</a></li><br>
                        <li class='li8'><a href='../static_page/tuyendung.php'>Tuyển dụng</a></li><br>
                        <li class='li9'><a href='../static_page/chiasekinhnghiem.php'>Chia sẻ kinh nghiệm</a></li>
                    </ul>
                </li>
                <li><a href='../KhoaHoc/TrangKH.php'>&#160;&#160;&#160;<b>Khóa học</b>&#160;&#160;</a>
                    <ul class='sub-menu' class='sub2'>
                        <li class='li1'><a href='../KhoaHoc/TrangToeic2.php'>TOEIC 2 Kỹ Năng</a></li><br>
                        <li class='li2'><a href='../KhoaHoc/TrangToeic4.php'>TOEIC 4 Kỹ Năng</a></li><br>
                        <li class='li3'><a href='../KhoaHoc/TrangVNU-EPT.php'>Luyện Thi VNU-EPT</a></li><br>
                        <li class='li4'><a href='../KhoaHoc/TrangIelts.php'>Luyện Thi IELTS</a></li><br>
                        <li class='li5'><a href='../KhoaHoc/TrangGiaoTiep.php'>Tiếng Anh Giao Tiếp</a></li><br>
                    </ul>
                </li>
                <li><a href='../KhaiGiang/TrangKG.php'>&#160;&#160;&#160;<b>Lịch Khai Giảng</b>&#160;&#160;</a>
                    <ul class='sub-menu' class='sub2'>
                        <li class='li1'><a href='../KhaiGiang/TrangKG.php#Toeic2'>TOEIC 2 Kỹ Năng</a></li><br>
                        <li class='li2'><a href='../KhaiGiang/TrangKG.php#Toeic4'>TOEIC 4 Kỹ Năng</a></li><br>
                        <li class='li3'><a href='../KhaiGiang/TrangKG.php#VNU-EPT'>Luyện Thi VNU-EPT</a></li><br>
                        <li class='li4'><a href='../KhaiGiang/TrangKG.php#Ielts'>Luyện Thi IELTS</a></li><br>
                        <li class='li5'><a href='../KhaiGiang/TrangKG.php#GiaoTiep'>Tiếng Anh Giao Tiếp</a></li><br>
                    </ul>
                </li>
                <li><a href='#'>&#160;&#160;&#160;<b>Học Viên</b>&#160;&#160;</a>
                    <ul class='sub-menu' class='sub3'>
                        <li class='li10'><a href='../HocVien/TrangStudentPolicy.php'>Chính sách học viên</a></li><br>
                        <li class='li11'><a href='../HocVien/TrangSupportStudents.php'>Hỗ trợ học viên</a></li><br>
                        <li class='li12'><a href='../HocVien/TrangFeedback.php'>Phản hồi</a></li>
                    </ul>
                </li>
                <li><a href='../DangKi/register.php'>&#160;&#160;&#160;<b>Đăng Kí</b>&#160;&#160;</a></li>
                <li><a href='../BaiTapLop/login_class.php'>&#160;&#160;&#160;<b>Bài Tập Lớp</b>&#160;&#160;</a></li>
                <li><a href='../CuaHang/TrangCuaHang.php'>&#160;&#160;&#160;<b>Cửa Hàng</b>&#160;&#160;</a></li>
                <li><a href='../TestOnline/test_toeic.php'>&#160;&#160;&#160;<b>Test Online</b>&#160;&#160;</a></li>
                <li><a href='../LienHe/contact.php'>&#160;&#160;&#160;<b>Liên Hệ</b>&#160;&#160;</a>
            </ul>
        </div>
        <!-- /////////////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////////////// -->
    <!--scroll to top-->
        <span id='top' onclick='topFunction()'>
            <img src='../img/button-top.png' alt='' class='top-img' />
        </span>
    <!--chat-->	
        <a href='http://m.me/QuocThanh21/' target='_blank' class='chat'>
            <img src='../img/chat.png' alt='' class='chat-img' />
        </a>
    <!---->
    </div>";

    echo "<script>
                function myFunction() {
                    var x = document.getElementById('dropdown');
                    if (x.style.display === 'none') {
                        x.style.display = 'block';
                    } else {
                        x.style.display = 'none';
                    }
                }
          </script>";

    echo "
        <form method='post'>
            <input type='text' class='Rectangle_19' name='HoTen' placeholder='(*) Họ và Tên' style='padding-left: 10px;' id='HoTen' oninput='limitLengStartUsername()' maxlength='50'>
            <input type='text' name='SDT' class='Rectangle_21' placeholder='(*) Số Điện Thoại' style='padding-left: 10px;' id='SDT' oninput='limitLengStartSDT()' maxlength='12'>
            <input type='text' name='Email' class='Rectangle_20' placeholder='(*) Email' style='padding-left: 10px;' id='Email' oninput='limitLengStartEmail()' maxlength='60'>
            <input type='hidden' name='hidden' id='hidden'>
            <input type='submit' class='Rectangle_22' name='Gui' value='Gửi' onclick='sendTuVan()' style='background-color:red; color:#fff; font-weight:bold'>
        </form> ";

    echo "    <script>
                    function limitLengStartUsername ()
                {
                    var a;
                    a = document.getElementById('HoTen');
                    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
                }

                function limitLengStartSDT ()
                {
                    var a;
                    a = document.getElementById('SDT');
                    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
                }

                function limitLengStartEmail ()
                {
                    var a;
                    a = document.getElementById('Email');
                    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
                }

                function sendTuVan ()
                {
                    var index = 0;
                    var HoTen = document.getElementById('HoTen').value;
                    var email = document.getElementById('Email');
                    var mobile = document.getElementById('SDT').value;

                    var vnf_regex = /^((09[1-4|6-9]|03[2-9]|07[0|6-9]|08[1-5|8|9]|05[6|8|9])+([0-9]{7}))$/; //sdt VN bắt đầu bằng các đầu số trên và có 10 chữ số

                    if (HoTen == '' || HoTen == null){
                        alert('Bạn Chưa Nhập Họ Tên');
                        index = 1;
                    }
                    else if (mobile == '' || mobile == null){
                        alert('Bạn Chưa Nhập Số Điện Thoại');
                        index = 1;
                    }
                    else if(mobile !=='' && vnf_regex.test(mobile) == false){
                        alert('Số Điện Thoại Không Hợp Lệ');
                        index = 1;
                    }
                    else if(email.value == '' || email.value == null){
                        alert('Bạn Chưa Nhập Email');
                        index = 1;
                    }
                    else if (!email.value || !/^[\w\.%\+\-]+@[a-z0-9.-]+\.(com|gov|in|jo|org|vn)$/i.test(email.value)){
                        alert('Email Không Hợp Lệ');
                        index = 1;
                    }
                    
                    
                    document.getElementById('hidden').value = index;
                }

                </script>";

	if(isset($_POST["Gui"])){
		$hidden = $_POST['hidden'];
		if($hidden == 0){
			$ten = $_POST['HoTen'];
			$sdt = $_POST['SDT'];
			$email = $_POST['Email'];


			// Khai báo biến
			$subject = "[DANG KY TU VAN]";
			$from = $email;
			
			
			// Để gửi thư HTML, Content-type header phải được thiết lập
			$head  = 'MIME-Version: 1.0' . "\r\n";
			$head .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			
			// Tạo Email headers
			
			$head .= 'From: 18521155@gm.uit.edu.vn\r\n'.
				'Reply-To: '.$from."\r\n" .
				'X-Mailer: PHP/' . phpversion();
			
			// Soạn tin nhắn email HTML đơn giản
			$message = '<html><body>';
			$message .= '<p><b>Họ và Tên: </b>'.$ten.'</p>';
			$message .= '<p><b>Số điện thoại: </b>'.$sdt.'</p>';
			$message .= '<p><b>Email: </b>'.$email.'</p>';
			$message .= '</body></html>';
			if(mail('18521155@gm.uit.edu.vn', $subject, $message, $head)){ 
                echo "
				<script>
					document.getElementById('result_Problem').innerHTML='Trung tâm sẽ liên hệ tư vấn với bạn sớm nhất nhé!';
				</script>";
			}
			else{ 
                echo "
                    <script>
                        document.getElementById('result_Problem').innerHTML='Ui... Đăng kí tư vấn của bạn gửi không thành công!';
                    </script> ";
		    }
		}
	}
?>