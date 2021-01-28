<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng Ký</title>
	<link rel="stylesheet" href="./register.css">
	<script language="javascript" src="./register.js"></script>
	<script language="javascript" src="../js/NutTop.js"></script>

</head>
<body>
<?php
	include("../include/config.php");
	session_start();
	$user_login = session();
	$info_user = check_NguoiDung($user_login);
	$KhaiGiang = get_KhaiGiang();
?>
<div id="iPhone_XR_XS_Max_11__1">
	<div id="Group_18">
		<img id="ID1" src="../img/ID1.png">
		<img id="Untitled" src="../img/Untitled.png">
		<svg class="Path_3">
			<path id="Path_3" d="M 0 0 L 1291 0 L 1291 5600 L 0 5600 L 0 0 Z">
			</path>
		</svg>
		<?php if($user_login == "none_user") { ?>
	<div id="Group_14">
		<div id="Group_13">
			<svg class="Rectangle_7">
				<a href="../login/login.php"><rect id="Rectangle_7" rx="19" ry="19" x="0" y="0" width="172" height="55"></a>
				</rect>
			</svg>
			<div>
				<a id="ng_nhp" href="../login/login.php" style="text-decoration: none;">Đăng nhập</a>
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
		<div id="LEARN_TO_ENGLISH_WITH_2Eng">
			<span>LEARN TO ENGLISH WITH 2Eng</span>
		</div>
		<div id="Group_4">
			<svg class="Rectangle_14">
				<rect id="Rectangle_14" rx="0" ry="0" x="0" y="0" width="1556" height="299">
				</rect>
			</svg>
			<div id="TRUNG_TM_ANH_NG_2Eng_a_ch_Khu_">
				<span>TRUNG TÂM ANH NGỮ 2Eng</span><br><span style="font-size:25px;color:rgba(242,242,243,1);">Địa chỉ: Khu phố 6, P.Linh Trung, Q.Thủ Đức, TP.Hồ Chí Minh<br/>Điện thoại: (028) 782 50593.<br/>Email: 2Eng@group2.edu.vn</span>
			</div>
			<svg class="Line_16" viewBox="0 0 1420 2">
				<path id="Line_16" d="M 0 0 L 1420 0">
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
			<img id="logo-da-thong-bao-website-voi-" src="../img/logo-da-thong-bao-website-voi-.png">
			<img id="Image_4_x" src="../img/Image_41.png">
		</div>
		<img id="form-login-popup" src="../img/form-login-popup.png">
		<img id="Image_4_x_" src="../img/Image_41.png">

		
		<svg class="Line_17" viewBox="0 0 1 471">
			<path id="Line_17" d="M 1 0 L 0 471">
			</path>
		</svg>
		
		<div id="Cch_ng_K_Hc_Ti_Trung_Tm_Anh_Ng">
			<span>Cách Đăng Kí Học Tại Trung Tâm Anh Ngữ 2ENG</span>
		</div>
		<div id="Di_y_l_cc_hng_dn__cc_em_ng_k_h">
			<span>Dưới đây là các hướng dẫn để các em đăng ký học tại Trung tâm 2ENG. Tùy thuộc vào nơi ở, nơi học hoặc nơi làm việc <br/>của mình, các em hãy chọn cách đăng ký thuận tiện nhất cho mình nhé.</span>
		</div>
		<div id="Cch_ng_K">
			<span>Cách Đăng Kí:</span>
		</div>
		<div id="CCH_1_ng_k_v_ng_hc_ph_trc_tip_">
			<span>CÁCH 1</span><span style="font-style:normal;font-weight:normal;">: Đăng ký và đóng học phí trực tiếp ở Phòng Ghi danh</span><br>
		</div>
		<div id="Cc_em_n_Phng_Ghi_danh_a_ch__s_">
			<span>Các em đến Phòng Ghi danh địa chỉ ở số Khu phố 6, Phường Linh Trung, Quận Thủ <br/>Đức, TP. Hồ Chí Minh để đăng ký và đóng học phí trực tiếp.</span>
		</div>
		<div id="CCH_2__ng_k_online_v_np_hc_ph_">
			<span>CÁCH 2:  </span><span style="font-style:normal;font-weight:normal;">Đăng ký online và nộp học phí qua ngân hàng</span><span> </span>
		</div>
		<div id="c_bit_ch_">
			<span>Đặc biệt chú ý:</span>
		</div>
		<div id="Cc_lp_thng_ht_ch_khong_10_ngy_">
			<span>Các lớp thường hết chỗ khoảng 10 ngày trước ngày khai giảng. Vì vậy để chắc chắn <br/>được nhận vào lớp mong muốn, các em hãy đăng ký sớm.<br/>Khi đã chọn được lịch học phù hợp với mình, các em hãy đăng ký ngay. Thầy cô sẽ <br/>ưu tiên cho những bạn đóng học phí sớm trước. Một khi lớp đã hết chỗ, thầy cô sẽ <br/>không nhận thêm học viên để đảm bảo chất lượng của khóa học.</span>
		</div>
		<div id="_tit_kim_thi_gian_v_cng_sc_i_l">
			<span>Để tiết kiệm thời gian và công sức đi lại, các em có thể đăng ký học bằng cách điền<br/>form online và nộp học phí qua ngân hàng mà không cần trực tiếp đến Trung tâm.</span>
		</div>
		<div id="Hotline_h_tr">
			<span>Hotline hỗ trợ</span>
		</div>
		<div id="ID0123456789_hoc_147258369">
			<span>0123456789 </span><span style="font-style:normal;font-weight:normal;">hoặc</span><span> 147258369</span>
		</div>
		<svg class="Rectangle_15">
			<rect id="Rectangle_15" rx="0" ry="0" x="0" y="0" width="1291" height="82">
			</rect>
		</svg>
		<div id="HNG_DN_NG_K_HC">
			<span>HƯỚNG DẪN ĐĂNG KÍ HỌC</span>
		</div>
		<div id="_ng_k_trc_tip">
			<span>* Đăng kí trực tiếp</span>
		</div>
		<svg class="Rectangle_16">
			<rect id="Rectangle_16" rx="39" ry="39" x="0" y="0" width="620" height="279">
			</rect>
		</svg>
		<svg class="Rectangle_17">
			<rect id="Rectangle_17" rx="42" ry="42" x="0" y="0" width="620" height="279">
			</rect>
		</svg>
		<img id="Image_3" src="../img/Image_3@2x.png">
		<img id="Image_4" src="../img/Image_4@2x.png">
		<div id="PHNG_GHI_DANH">
			<span>PHÒNG GHI DANH</span>
		</div>
		<div id="THI_GIAN_LM_VIC">
			<span>THỜI GIAN LÀM VIỆC</span>
		</div>
		<div id="Cc_bn_n_trc_tip_Tr_s_Trung_tm_">
			<span>Các bạn đến trực tiếp Trụ sở Trung tâm ở 53 Chương Dương, <br/>Phường Linh Chiểu, Quận Thủ Đức, TP.HCM để đăng ký học<br/>và đóng học phí trực tiếp nhé.</span>
		</div>
		<div id="Th_Hai_-_Th_By_-_Sng_7h_-_11h3">
			<span>Thứ Hai - Thứ Bảy<br/>- Sáng: 7h - 11h30<br/>- Chiều: 13h - 20h<br/>(Trung tâm nghỉ Chủ nhật và các ngày lễ)</span>
		</div>
		<div id="_ng_k_qua_website">
			<span>* Đăng kí qua website</span>
		</div>
		<svg class="Icon_awesome-hand-point-right" viewBox="0 4.5 58.8 45.3">
			<path id="Icon_awesome-hand-point-right" d="M 58.800048828125 20.50263023376465 C 58.800048828125 23.28962898254395 56.42852020263672 25.67270660400391 53.6550407409668 25.67270660400391 L 42.18776702880859 25.67270660400391 C 44.0643196105957 27.6838264465332 44.29469299316406 31.54351234436035 41.4643669128418 34.04183959960938 C 43.10525894165039 36.73493576049805 41.7109375 40.29616546630859 39.57518768310547 41.39303207397461 C 40.60579681396484 47.19011306762695 37.05482482910156 49.7998046875 31.23752403259277 49.7998046875 C 30.92216300964355 49.7998046875 29.71286010742188 49.77585983276367 29.4000244140625 49.77680206298828 C 22.28303527832031 49.79662322998047 20.56922149658203 46.11212158203125 15.19027996063232 45.25685119628906 C 13.84970855712891 45.04367828369141 12.86251068115234 43.85408782958984 12.86251068115234 42.46052932739258 L 12.86251068115234 22.22602844238281 L 12.86273956298828 22.22590827941895 C 12.86400318145752 20.05930328369141 14.08088779449463 17.99214744567871 16.13165473937988 17.05359077453613 C 19.44903373718262 15.52071189880371 27.08924865722656 11.26866340637207 28.48127365112305 7.931932926177979 C 29.37671089172363 5.785619258880615 30.93709373474121 4.5009446144104 33.07502746582031 4.500000476837158 C 37.00521469116211 4.498349189758301 39.70748901367188 8.640449523925781 38.14182281494141 12.39302062988281 C 37.7303352355957 13.37911605834961 37.18724060058594 14.35955047607422 36.51643753051758 15.33255195617676 L 53.6550407409668 15.33255195617676 C 56.34812545776367 15.33255195617676 58.800048828125 17.75597381591797 58.800048828125 20.50262832641602 Z M 11.02500915527344 20.54368209838867 L 11.02500915527344 43.19358444213867 C 11.02500915527344 44.75725173950195 9.791011810302734 46.02482223510742 8.268756866455078 46.02482223510742 L 2.756252288818359 46.02482223510742 C 1.233997106552124 46.02482223510742 0 44.75725173950195 0 43.19358444213867 L 0 20.54368209838867 C 0 18.98001289367676 1.233997106552124 17.71244430541992 2.756252288818359 17.71244430541992 L 8.268756866455078 17.71244430541992 C 9.791011810302734 17.71244430541992 11.02500915527344 18.98001289367676 11.02500915527344 20.54368209838867 Z M 7.809381008148193 40.36234664916992 C 7.809381008148193 39.05926895141602 6.781069278717041 38.00297927856445 5.512504577636719 38.00297927856445 C 4.243939399719238 38.00297927856445 3.215627670288086 39.05926895141602 3.215627670288086 40.36234664916992 C 3.215627670288086 41.66542434692383 4.243939399719238 42.72171020507813 5.512504577636719 42.72171020507813 C 6.781069278717041 42.72171020507813 7.809381008148193 41.66542434692383 7.809381008148193 40.36234664916992 Z">
			</path>
		</svg>
		<svg class="Path_1" viewBox="0 0 380.867 66">
			<a href="../KhaiGiang/TrangKG.php"><path id="Path_1" d="M 25.70265960693359 0 L 355.1640319824219 0 C 369.3592224121094 0 380.86669921875 14.77460289001465 380.86669921875 33 C 380.86669921875 51.22539520263672 369.3592224121094 66 355.1640319824219 66 L 25.70265960693359 66 C 11.50747299194336 66 0 51.22539520263672 0 33 C 0 14.77460289001465 11.50747299194336 0 25.70265960693359 0 Z">
			</path></a>
		</svg>
		<div id="LCH_KHAI_GING">
		<a href="../KhaiGiang/TrangKG.php" style="text-decoration: none; color:#FFFFFF"><span>LỊCH KHAI GIẢNG</span></a>
		</div>
		<svg class="Path_2" viewBox="0 0 380.867 66">
		<a href="../KhoaHoc/TrangKH.php"><path id="Path_2" d="M 25.70265960693359 0 L 355.1640319824219 0 C 369.3592224121094 0 380.86669921875 14.77460289001465 380.86669921875 33 C 380.86669921875 51.22539520263672 369.3592224121094 66 355.1640319824219 66 L 25.70265960693359 66 C 11.50747299194336 66 0 51.22539520263672 0 33 C 0 14.77460289001465 11.50747299194336 0 25.70265960693359 0 Z">
			</path></a>
		</svg>
		<div id="KHA_HC">
			<a href="../KhoaHoc/TrangKH.php" style="text-decoration: none; color:#FFFFFF"><span>KHÓA HỌC</span></a>
		</div>
		<svg class="Icon_awesome-hand-point-right_bw" viewBox="0 4.5 58.8 45.3">
			<path id="Icon_awesome-hand-point-right_bw" d="M 58.800048828125 20.50263023376465 C 58.800048828125 23.28962898254395 56.42852020263672 25.67270660400391 53.6550407409668 25.67270660400391 L 42.18776702880859 25.67270660400391 C 44.0643196105957 27.6838264465332 44.29469299316406 31.54351234436035 41.4643669128418 34.04183959960938 C 43.10525894165039 36.73493576049805 41.7109375 40.29616546630859 39.57518768310547 41.39303207397461 C 40.60579681396484 47.19011306762695 37.05482482910156 49.7998046875 31.23752403259277 49.7998046875 C 30.92216300964355 49.7998046875 29.71286010742188 49.77585983276367 29.4000244140625 49.77680206298828 C 22.28303527832031 49.79662322998047 20.56922149658203 46.11212158203125 15.19027996063232 45.25685119628906 C 13.84970855712891 45.04367828369141 12.86251068115234 43.85408782958984 12.86251068115234 42.46052932739258 L 12.86251068115234 22.22602844238281 L 12.86273956298828 22.22590827941895 C 12.86400318145752 20.05930328369141 14.08088779449463 17.99214744567871 16.13165473937988 17.05359077453613 C 19.44903373718262 15.52071189880371 27.08924865722656 11.26866340637207 28.48127365112305 7.931932926177979 C 29.37671089172363 5.785619258880615 30.93709373474121 4.5009446144104 33.07502746582031 4.500000476837158 C 37.00521469116211 4.498349189758301 39.70748901367188 8.640449523925781 38.14182281494141 12.39302062988281 C 37.7303352355957 13.37911605834961 37.18724060058594 14.35955047607422 36.51643753051758 15.33255195617676 L 53.6550407409668 15.33255195617676 C 56.34812545776367 15.33255195617676 58.800048828125 17.75597381591797 58.800048828125 20.50262832641602 Z M 11.02500915527344 20.54368209838867 L 11.02500915527344 43.19358444213867 C 11.02500915527344 44.75725173950195 9.791011810302734 46.02482223510742 8.268756866455078 46.02482223510742 L 2.756252288818359 46.02482223510742 C 1.233997106552124 46.02482223510742 0 44.75725173950195 0 43.19358444213867 L 0 20.54368209838867 C 0 18.98001289367676 1.233997106552124 17.71244430541992 2.756252288818359 17.71244430541992 L 8.268756866455078 17.71244430541992 C 9.791011810302734 17.71244430541992 11.02500915527344 18.98001289367676 11.02500915527344 20.54368209838867 Z M 7.809381008148193 40.36234664916992 C 7.809381008148193 39.05926895141602 6.781069278717041 38.00297927856445 5.512504577636719 38.00297927856445 C 4.243939399719238 38.00297927856445 3.215627670288086 39.05926895141602 3.215627670288086 40.36234664916992 C 3.215627670288086 41.66542434692383 4.243939399719238 42.72171020507813 5.512504577636719 42.72171020507813 C 6.781069278717041 42.72171020507813 7.809381008148193 41.66542434692383 7.809381008148193 40.36234664916992 Z">
			</path>
		</svg>
		<svg class="Rectangle_50">
			<rect id="Rectangle_50" rx="0" ry="0" x="0" y="0" width="1291" height="330">
			</rect>
		</svg>
		<div id="Cc_lp_thng_ht_ch_rt_nhanh_C_mt">
			<span>Các lớp thường hết chỗ rất nhanh. Có một số học viên chờ cận ngày khai giảng mới bắt đầu đăng ký <br/>thì khi đó lớp đã hết chỗ, buộc phải chờ sang lớp sau.<br/><br/>Vì vậy, để chắc chắn có chỗ trong lớp, các bạn học viên cần đăng ký và hoàn thành học phí sớm  <br/>trước ngày khai giảng. Trung tâm sẽ ưu tiên nhận học viên theo nguyên tắc “first come, first served”<br/>(ai đăng ký trước thì được nhận trước). Một khi lớp đã hết chỗ, các bạn phải đăng ký các lớp<br/>có ngày khai giảng sau đó.<br/><br/>Hãy xem lịch khai giảng và hướng dẫn đăng ký học dưới đây để điền vào Form đăng ký học ở cuối<br/>trang nhé.</span>
		</div>
		<svg class="Icon_awesome-hand-point-right_bz" viewBox="0 4.5 50.567 32.366">
			<path id="Icon_awesome-hand-point-right_bz" d="M 50.566650390625 15.93370151519775 C 50.566650390625 17.92498207092285 48.52719497680664 19.62766265869141 46.14206695556641 19.62766265869141 L 36.28048706054688 19.62766265869141 C 37.89427185058594 21.0645866394043 38.09239196777344 23.82229042053223 35.65837860107422 25.60731887817383 C 37.06950378417969 27.53150749206543 35.87042236328125 30.07596397399902 34.03372573852539 30.85966491699219 C 34.92002487182617 35.00161743164063 31.86627388000488 36.86621475219727 26.86353492736816 36.86621475219727 C 26.59232902526855 36.86621475219727 25.55235862731934 36.84910583496094 25.2833251953125 36.84977722167969 C 19.16288375854492 36.86393737792969 17.68904495239258 34.23140335083008 13.06328296661377 33.62032318115234 C 11.91042232513428 33.46801376342773 11.06145477294922 32.61806488037109 11.06145477294922 31.62237739562988 L 11.06145477294922 17.1650505065918 L 11.06165313720703 17.16496467590332 C 11.06273937225342 15.61695003509521 12.10923099517822 14.13998985290527 13.87284183502197 13.46940231323242 C 16.72570991516113 12.37417697906494 23.29611396789551 9.336135864257813 24.49322128295898 6.952077865600586 C 25.26327896118164 5.418560028076172 26.60517120361328 4.500674724578857 28.4437427520752 4.5 C 31.82361030578613 4.498820304870605 34.14750289916992 7.458304882049561 32.80106735229492 10.13947582244873 C 32.44719696044922 10.84403038024902 31.98014831542969 11.54454040527344 31.40327453613281 12.23973941802979 L 46.14206695556641 12.23973941802979 C 48.45805740356445 12.23973941802979 50.566650390625 13.97124671936035 50.566650390625 15.93370151519775 Z M 9.481246948242188 15.96303462982178 L 9.481246948242188 32.14614105224609 C 9.481246948242188 33.26336288452148 8.420039176940918 34.16902923583984 7.110935688018799 34.16902923583984 L 2.370311737060547 34.16902923583984 C 1.061208367347717 34.16902923583984 0 33.26336288452148 0 32.14614105224609 L 0 15.96303462982178 C 0 14.84580898284912 1.061208367347717 13.94014549255371 2.370311737060547 13.94014549255371 L 7.110935688018799 13.94014549255371 C 8.420039176940918 13.94014549255371 9.481246948242188 14.84580898284912 9.481246948242188 15.96303462982178 Z M 6.715883731842041 30.12325096130371 C 6.715883731842041 29.19221496582031 5.831559658050537 28.43750953674316 4.740623474121094 28.43750953674316 C 3.649687528610229 28.43750953674316 2.765363693237305 29.19221496582031 2.765363693237305 30.12325096130371 C 2.765363693237305 31.05428504943848 3.649687528610229 31.80899238586426 4.740623474121094 31.80899238586426 C 5.831559658050537 31.80899238586426 6.715883731842041 31.05428504943848 6.715883731842041 30.12325096130371 Z">
			</path>
		</svg>
	</div>
	<div id="ng_k_t_vn_min_ph">
		<span>Đăng kí tư vấn miễn phí</span>
	</div>
	<svg class="Rectangle_18">
		<rect id="Rectangle_18" rx="0" ry="0" x="0" y="0" width="395" height="420">
		</rect>
	</svg>
	<svg class="Rectangle_33">
		<rect id="Rectangle_33" rx="0" ry="0" x="0" y="0" width="1238" height="59">
		</rect>
	</svg>
	<svg class="Rectangle_34">
		<rect id="Rectangle_34" rx="0" ry="0" x="0" y="0" width="1238" height="271">
		</rect>
	</svg>
	<div id="BC_1">
		<span>BƯỚC 1:</span>
	</div>
	<div id="Xem_lch_khai_ging__trn_v_chn_l">
		<span>Xem lịch khai giảng ở trên và chọn lớp </span><span style="color:rgba(254,68,68,1);">còn chỗ</span><span> và thời gian học phù hợp với bạn. Đặc biệt chú ý nếu bạn thuộc các trường <br/>hợp sau:<br/><br/>- Nếu bạn chọn đóng học phí trọn khoá cho các khóa học, ở phần chọn lớp, bạn chỉ cần chọn lớp thấp nhấ còn chỗ và có <br/>thời gian học phù hợp với bạn. Trung tâm sẽ hướng dẫn bạn cách đăng ký các lớp cao hơn bằng cách hướng dẫn trực tiếp <br/>ở Phòng Ghi danh hoặc qua </span><span style="color:rgba(254,68,68,1);">điện thoại/Facebook/Email/Zalo</span><span>. <br/><br/>Nếu bạn không chắc về việc chọn lớp, bạn hãy liên hệ Trung tâm qua </span><span style="color:rgba(254,68,68,1);">điện thoại, email, Facebook, ...</span><span> để được tư vấn <br/>đầy đủ nhé.</span>
	</div>
	<svg class="Rectangle_35">
		<rect id="Rectangle_35" rx="0" ry="0" x="0" y="0" width="1238" height="59">
		</rect>
	</svg>
	<div id="BC_2">
		<span>BƯỚC 2:</span>
	</div>
	<svg class="Rectangle_36">
		<rect id="Rectangle_36" rx="0" ry="0" x="0" y="0" width="1238" height="117">
		</rect>
	</svg>
	<div id="in_vo_Form_ng_k_hc_bn_di_Hy_in">
		<span>Điền vào Form đăng ký học bên dưới. Hãy điền đúng thông tin, đặc biệt </span><span style="color:rgba(254,68,68,1);">email và số điện thoại</span><span>, để việc xác nhận đăng ký <br/>diễn ra chính xác và nhanh chóng.</span>
	</div>
	<svg class="Rectangle_37">
		<rect id="Rectangle_37" rx="0" ry="0" x="0" y="0" width="1238" height="59">
		</rect>
	</svg>
	<svg class="Rectangle_38">
		<rect id="Rectangle_38" rx="0" ry="0" x="0" y="0" width="1238" height="253">
		</rect>
	</svg>
	<div id="Np_hc_ph_qua_ngn_hng__online_b">
		<span>Nộp học phí qua </span><span style="color:rgba(254,68,68,1);">ngân hàng</span><span>  (online banking hoặc nộp tiền tại quầy ở ngân hàng) với nội dung "</span><span style="color:rgba(254,68,68,1);">Số điện thoại T2</span><span>" đến tài <br/>khoản ngân hàng sau. Hãy chắc chắn rằng bạn đã ghi đúng nội dung nội chuyển khoản như được hướng dẫn để việc xác <br/>nhận học phí diễn ra nhanh chóng và chính xác.<br/><br/>- Ngân hàng TMCP Ngoại thương Việt Nam (</span><span style="color:rgba(254,68,68,1);">Vietcombank</span><span>) - Phòng Giao dịch Bình Thọ<br/>- Chủ tài khoản: Lê Thị Hồng Ngọc<br/>- Số tài khoản: 012345678910<br/>- Số tiền: 2.600.000 đồng (nếu đóng học phí </span><span style="color:rgba(254,68,68,1);">trọn khoá</span><span> ) hoặc 700.000 đồng (nếu đóng học phí </span><span style="color:rgba(254,68,68,1);">từng lớp</span><span> )<br/>- Nội dung chuyển khoản: Số điện thoại T2</span>
	</div>
	<div id="BC_3">
		<span>BƯỚC 3:</span>
	</div>
	<svg class="Rectangle_39">
		<rect id="Rectangle_39" rx="0" ry="0" x="0" y="0" width="1238" height="59">
		</rect>
	</svg>
	<div id="BC_4">
		<span>BƯỚC 4:</span>
	</div>
	<svg class="Rectangle_40">
		<rect id="Rectangle_40" rx="0" ry="0" x="0" y="0" width="1238" height="159">
		</rect>
	</svg>
	<div id="Kim_tra_email_phn_hi_ca_Trung_">
		<span>Kiểm tra email phản hồi của Trung tâm được gửi đến email mà bạn đã cung cấp ở bước 2.<br/></span><br><span style="color:rgba(254,68,68,1);">Bạn cần phản hồi email</span><span> này bằng cách đính kèm hình ảnh của hình chụp màn hình xác nhận chuyển khoản online thành công <br/>hoặc hình chụp biên lai nộp tiền tại ngân hàng.</span>
	</div>
	<svg class="Rectangle_41">
		<rect id="Rectangle_41" rx="0" ry="0" x="0" y="0" width="1238" height="59">
		</rect>
	</svg>
	<div id="BC_5">
		<span>BƯỚC 5:</span>
	</div>
	<svg class="Rectangle_42">
		<rect id="Rectangle_42" rx="0" ry="0" x="0" y="0" width="1238" height="98">
		</rect>
	</svg>
	<div id="Sau_khi_kim_tra_email_phn_hi_c">
		<span>Sau khi kiểm tra email phản hồi của bạn, Trung tâm sẽ gửi email xác nhận bạn đã hoàn tất việc đăng ký và đóng học phí. <br/>Đồng thời, nội dung email sẽ bao gồm các hướng dẫn cụ thể về việc học tại Trung tâm.</span>
	</div>
	<svg class="Rectangle_43">
		<rect id="Rectangle_43" rx="0" ry="0" x="0" y="0" width="1291" height="825">
		</rect>
	</svg>
	<svg class="Rectangle_45">
		<rect id="Rectangle_45" rx="0" ry="0" x="0" y="0" width="424" height="749">
		</rect>
	</svg>
	<svg class="Polygon_1" viewBox="0 0 61 32">
		<path id="Polygon_1" d="M 30.5 0 L 61.00000381469727 32 L 0 32 Z">
		</path>
	</svg>
	<svg class="Rectangle_46">
		<rect id="Rectangle_46" rx="0" ry="0" x="0" y="0" width="424" height="749">
		</rect>
	</svg>
	<svg class="Rectangle_47">
		<rect id="Rectangle_47" rx="0" ry="0" x="0" y="0" width="136" height="36">
		</rect>
	</svg>
	<div id="Nn_chn">
		<span>Nên chọn</span>
	</div>
	<div id="NG_TRN_KHA">
		<span>ĐÓNG TRỌN KHÓA</span>
	</div>
	<svg class="Line_18" viewBox="0 0 213 1">
		<path id="Line_18" d="M 0 0 L 213 0">
		</path>
	</svg>
	<div id="__________Tit_kim_200000_VN_so">
		<span>          Tiết kiệm </span><span style="color:rgba(250,99,99,1);">200.000 VNĐ</span><span> so với đóng <br/>học phí theo từng tháng.<br/><br/> Thuận tiện, chỉ cần đăng ký một lần <br/>để học tất cả 4 lớp.<br/><br/> Được cấp thẻ học viên lập tức cho <br/>4 lớp. Động lực học mạnh mẽ hơn, khả <br/>năng điểm thi Toeic cao hơn vì lộ trình <br/>học cụ thể.<br/><br/> Luôn được ưu tiên nhận vào lớp vì <br/>đã đăng ký trước.<br/><br/> </span><span style="color:rgba(250,99,99,1);">Nên nộp học phí online</span><span> để giữ chỗ <br/>nhanh hơn<br/></span><br><span style="font-size:35px;">2.600.000đ</span>
	</div>
	<img id="Image_5" src="../img/Image_5@2x.png">
	<img id="Image_6" src="../img/Image_5@2x.png">
	<img id="Image_7" src="../img/Image_5@2x.png">
	<img id="Image_8" src="../img/Image_5@2x.png">
	<img id="Image_8_c" src="../img/Image_5@2x.png">
	<div id="NG_TNG_LP">
		<span>ĐÓNG TỪNG LỚP</span>
	</div>
	<svg class="Line_19" viewBox="0 0 213 1">
		<path id="Line_19" d="M 0 0 L 213 0">
		</path>
	</svg>
	<div id="Ph_hp_cho_cc_bn_sinh_vin_sp__x">
		<span>Phù hợp cho các bạn sinh viên sắp <br/>xếp tình hình tài chính của mình.<br/><br/> Phải đăng ký từng lớp. Khi lớp cũ kết <br/>thúc, học viên đăng ký tiếp lớp mới.<br/><br/> Được cấp thẻ học viên cho mỗi lớp <br/>khi đăng ký.<br/><br/> Phải học liên tục 4 lớp để việc học <br/>không bị gián đoạn nhằm đạt kết quả<br/> thi Toeic mong muốn.<br/><br/> Lớp thường hết chỗ sớm. Nên nộp <br/>học phí online để giữ chỗnhanh hơn<br/></span><br><span style="font-size:35px;">700.000đ </span><span>/lớp</span>
	</div>
	<img id="Image_5_c" src="../img/Image_5@2x.png">
	<img id="Image_5_da" src="../img/Image_5@2x.png">
	<img id="Image_5_db" src="../img/Image_5@2x.png">
	<img id="Image_5_dc" src="../img/Image_5@2x.png">
	<img id="Image_5_dd" src="../img/Image_5@2x.png">
	<svg class="Rectangle_48">
		<a href="#HY_IN_VO_FORM_DI_Y__NG_K_TRC_T"><rect id="Rectangle_48" rx="29" ry="29" x="0" y="0" width="181" height="58"></rect></a>
	</svg>
	<svg class="Rectangle_49">
	<a href="#HY_IN_VO_FORM_DI_Y__NG_K_TRC_T"><rect id="Rectangle_49" rx="29" ry="29" x="0" y="0" width="181" height="58">
		</rect></a>
	</svg>
	<div id="ng_k_ngay">
	<a href="#HY_IN_VO_FORM_DI_Y__NG_K_TRC_T" style="text-decoration: none; color:white"><span>Đăng kí ngay</span></a>
	</div>
	<div id="ng_k_ngay_dh">
	<a href="#HY_IN_VO_FORM_DI_Y__NG_K_TRC_T" style="text-decoration: none; color:white"><span>Đăng kí ngay</span></a>
	</div>
	<div id="HY_IN_VO_FORM_DI_Y__NG_K_TRC_T">
		<span>HÃY ĐIỀN VÀO FORM DƯỚI ĐÂY ĐỂ ĐĂNG KÍ TRỰC TUYẾN</span>
	</div>
	<div id="_H_v_Tn">
		<span>* Họ và Tên</span>
	</div>
	<div id="_S_in_thoi">
		<span>* Số điện thoại</span>
	</div>
	<div id="_Email">
		<span>* Email</span>
	</div>
	<div id="_S_CMND">
		<span>* Số CMND</span>
	</div>
	<div id="_Phng_thc_ng_k">
		<span>* Phương thức đóng học phí</span>
	</div>
	<div id="_Lp">
		<span>* Khóa Học</span>
	</div>
	<div id="_Hc_online_Trc_tip">
		<span>* Ngày Khai giảng</span>
	</div>
	<div id="_Ca_hc">
		<span>* Thứ</span>
	</div>
	<div id="_Th">
		<span>* Ca Học</span>
	</div>
	<div id="_Ngy_khai_ging">
		<span>* Học online/ Trực tiếp</span>
	</div>
	<svg class="Rectangle_61">
		<rect id="Rectangle_61" rx="0" ry="0" x="0" y="0" width="1100" height="63">
		</rect>
	</svg>
	<div id="Nu_cn_t_vn_thm_v_cc_kha_hc_luy">
		<span>Nếu cần tư vấn thêm về các khóa học luyện thi, các bạn đừng ngần ngại liên hệ với <br/>Trung tâm để được tư vấn cụ thể và đầy đủ nhé.</span>
	</div>
	<svg class="Rectangle_62">
	<a href="#ng_k_t_vn_min_ph"><rect id="Rectangle_62" rx="28.5" ry="28.5" x="0" y="0" width="259" height="57"></rect></a>
		
	</svg>
	<div id="Lin_H_T_Vn">
		<span><a href="../LienHe/contact.php" style="text-decoration: none; color: #FFFFFF">Liên Hệ Tư Vấn</a></span>
	</div>
	
	
	<label  id="empty1" class="empty"></label>
	<label  id="empty2" class="empty"></label>
	<label  id="empty3" class="empty"></label>
	<label  id="empty4" class="empty"></label>
	<label  id="empty5" class="empty"></label>
	<label  id="empty6" class="empty"></label>
	<label  id="empty7" class="empty"></label>
	<label  id="empty8" class="empty"></label>
	<label  id="empty9" class="empty"></label>
	<label  id="empty10" class="empty"></label>
	<label  id="return" class="empty"></label>
	
	<div id="form">
			<form action="" method = "POST">
				</br><input class ="Rectangle_51" type="text" name="Username" id="username">
				<input class="Rectangle_52" name="Numberphone" id="phone" type="text" oninput="limitLengStart()" maxlength="11" onkeydown="validateNumber(event);">
				<input class="Rectangle_53" type="text" name="Email" id="email" oninput="limitLengStart2()" maxlength="60">
                <input class="Rectangle_54" type="text" name="CMND" id="cmnd" oninput="limitLengStart1()" maxlength="11" onkeydown="validateNumber(event);">				
				<select class="Rectangle_55" name="HocPhi" id="hocphi">
					<option value="Từng Khóa">Từng Khóa</option>
					<option value="Trọn Khóa">Trọn Khóa</option>
				</select></br>
				<select class="Rectangle_56" name="Lop" onchange="changeLop()" id="Lop">
					<option value="------- Chọn Khóa Học -------">------- Chọn Khóa Học -------</option>
					<option value="Luyện Thi TOEIC 2 Kĩ Năng">Luyện Thi TOEIC 2 Kĩ Năng</option>
					<option value="Luyện Thi TOEIC 4 Kĩ Năng">Luyện Thi TOEIC 4 Kĩ Năng</option>
                    <option value="Luyện Thi VNU-EPT">Luyện Thi VNU-EPT</option>
                    <option value="Luyện Thi IELTS">Luyện Thi IELTS</option>
					<option value="Tiếng Anh Giao Tiếp">Tiếng Anh Giao Tiếp</option>
				</select></br>

				<select class="Rectangle_58" name="Ngay" id="Ngay" onchange="changeNgay()">
				</select></br>

				<select class="Rectangle_57" name="Thu" id="Thu">
				</select></br>

				<select class="Rectangle_59" name="CaHoc" id="CaHoc" onchange="changeCa()">
				</select></br>

				<select class="Rectangle_60" name="onlineORoffline" id="onORoff">
				</select></br>

				<input type="submit" value="Đăng Kí" name="submit" class="Rectangle_61" id="submit" onclick="onClickRegister()">
			</form>
	</div>

	<div>
		<form action="" method = "POST">
			</br><input class ="Rectangle_19" type="text" name="HoTen" id="HoTen" placeholder="(*) Họ và Tên">
			<input class="Rectangle_29" name="SDT" id="SDT" type="text" oninput="limitLengStart()" maxlength="11" onkeydown="validateNumber(event);" placeholder="(*) Số Điện Thoại">
			<input class="Rectangle_30" type="text" name="Mail" id="Mail" oninput="limitLengStart3()" maxlength="60" placeholder="(*) Email">
			<select class="Rectangle_31" name="KhoaHoc" id="KhoaHoc">
				<option value="------- Chọn Khóa Học -------">------- Chọn Khóa Học -------</option>
				<option value="Luyện Thi TOEIC 2 Kĩ Năng">Luyện Thi TOEIC 2 Kĩ Năng</option>
				<option value="Luyện Thi TOEIC 4 Kĩ Năng">Luyện Thi TOEIC 4 Kĩ Năng</option>
				<option value="Luyện Thi VNU-EPT">Luyện Thi VNU-EPT</option>
				<option value="Luyện Thi IELTS">Luyện Thi IELTS</option>
				<option value="Tiếng Anh Giao Tiếp">Tiếng Anh Giao Tiếp</option>
			</select></br>
			<input class="Rectangle_32" type="text" name="VanDe" id="VanDe" placeholder="(*) Vấn Đề">
			<input type="submit" value="Gửi ngay" name="Gui" class="Rectangle_24" id="Gui" onclick="sendProblem()">
			<label id="result_Problem"></label>
		</form>
	</div>

<script>
	function changeLop(){
		var lop = document.getElementById("Lop");
		var text = lop.options[lop.selectedIndex].text;
		var setNgay = new Array();

		var khaigiang = <?php echo json_encode($KhaiGiang); ?>;

		var i;
		for (i = 0; i < khaigiang.length; i++) {
			if (khaigiang[i].TenKhoaHoc == text){
				if (setNgay.length == 0){
					setNgay.push(khaigiang[i].Ngay);
				}
				else {
					for (var j=0; j<=setNgay.length; j++){
					if (setNgay[j] == khaigiang[i].Ngay){
						
						continue;
					}
					if (j == setNgay.length -1){
						setNgay.push(khaigiang[i].Ngay);
					}
					}
				}
			}
		}
		
		var ngay = document.getElementById("Ngay");
		while (ngay.length > 0) {
    		ngay.remove(0);
		}
		var option = document.createElement("option");
		option.text = "------- Chọn Ngày Khai Giảng -------";
		ngay.add(option);
		for(i=0; i<setNgay.length; i++){
			var option = document.createElement("option");
			option.text = setNgay[i];
			ngay.add(option);
		}
	}



	function changeNgay(){

		var thu = document.getElementById("Thu");
		var ca = document.getElementById("CaHoc");
		while (thu.length > 0) {
    		thu.remove(0);
		}
		while (ca.length > 0) {
    		ca.remove(0);
		}

		var lop = document.getElementById("Lop");
		var textLop = lop.options[lop.selectedIndex].text;
		var ngay = document.getElementById("Ngay");
		var textNgay = ngay.options[ngay.selectedIndex].text;

		var khaigiang = <?php echo json_encode($KhaiGiang); ?>;

		var indexI = 0;

		for (var i = 0; i < khaigiang.length; i++) {
			if (khaigiang[i].TenKhoaHoc == textLop && khaigiang[i].Ngay == textNgay){

				var option = document.createElement("option");
				option.text = khaigiang[i].Thu;
				thu.add(option);
				indexI = i;
				break;
			}
		}
		var option = document.createElement("option");
		option.text = "------- Chọn Ca Học -------";
		ca.add(option);
		for (var i = indexI; i < khaigiang.length; i++) {
			if (khaigiang[i].TenKhoaHoc == textLop && khaigiang[i].Ngay == textNgay){

				var option = document.createElement("option");
				option.text = khaigiang[i].Ca + " (" + khaigiang[i].Loai + ")";
				ca.add(option);
			}
		}
	}


	function changeCa(){

		var onORoff = document.getElementById("onORoff");
		while (onORoff.length > 0) {
			onORoff.remove(0);
		}

		var ca = document.getElementById("CaHoc");
		var textCa = ca.options[ca.selectedIndex].text;

		var res = textCa.split(" ");
		var option = document.createElement("option");
		if (res[3] == "(Trực"){
			temp = "Trực Tiếp";
			option.text = temp;
			onORoff.add(option);
		}
		else if(res[3] == "(Online)"){
			temp = "Online";
			option.text = temp;
			onORoff.add(option);
		}
		

	}
</script>

<?php
	if(isset($_POST["submit"])){
		$username = $_POST['Username'];
		$numberphone = $_POST['Numberphone'];
		$email = $_POST['Email'];
		$cmnd = $_POST['CMND'];
		$hocphi = $_POST['HocPhi'];
		$lop = $_POST['Lop'];


		if (($username == "") || ($email == "" || $email == "Email không hợp lệ") 
			|| ($hocphi == "") 
			|| (isset($_POST['Ngay']) == false || $_POST['Ngay'] == "------- Chọn Ngày Khai Giảng -------") 
			|| (isset($_POST['CaHoc']) == false || $_POST['CaHoc'] == "------- Chọn Ca Học -------") 
			|| ($numberphone== "" || $numberphone == "Số điện thoại không hợp lệ") || ($cmnd== "") || (isset($_POST['Lop']) == false || $_POST['Lop'] == "------- Chọn Khóa Học -------") 
			|| (isset($_POST['Thu']) == false)
			|| (isset($_POST['onlineORoffline']) == false)) {
			
				// Ho va ten
			if($username == ""){ ?>
				<script>
					document.getElementById("empty1").innerHTML="Họ và Tên không được để trống!";
				</script>
			<?php }
			else { ?>
				<script>
					document.getElementById("empty1").innerHTML="";
					document.getElementById("username").value = <?php echo json_encode($username); ?>;
				</script>
			<?php }

			// Email
			if($email == ""){ ?>
				<script>
					document.getElementById("empty2").innerHTML="Email không được để trống!";
				</script>
			<?php }
			else if($email== "Email không hợp lệ"){ ?>
				<script>
					document.getElementById("empty2").innerHTML="Email không hợp lệ";
				</script>
			<?php }
			else { ?>
				<script>
					document.getElementById("empty2").innerHTML="";
					document.getElementById("email").value = <?php echo json_encode($email); ?>;
				</script>
			<?php }

			// Hoc phi
			if($hocphi == ""){ ?>
				<script>
					document.getElementById("empty3").innerHTML="Phương Thức Đóng Học Phí không được để trống!";
				</script>
			<?php }
			else { ?>
				<script>
					document.getElementById("empty3").innerHTML="";
					document.getElementById("hocphi").value = <?php echo json_encode($hocphi); ?>;
				</script>
			<?php }


			// So dien thoai
			if($numberphone== ""){ ?>
				<script>
					document.getElementById("empty6").innerHTML="Số Điện Thoại không được để trống!";
				</script>
			<?php }
			else if($numberphone== "Số điện thoại không hợp lệ"){ ?>
				<script>
					document.getElementById("empty6").innerHTML="Số điện thoại không hợp lệ";
				</script>
			<?php }
			else { ?>
				<script>
					document.getElementById("empty6").innerHTML="";
					document.getElementById("phone").value = <?php echo json_encode($numberphone); ?>;
				</script>
			<?php }


			// CMND
			if($cmnd== ""){ ?>
				<script>
					document.getElementById("empty7").innerHTML="CMND không được để trống!";
				</script>
			<?php }
			else { ?>
				<script>
					document.getElementById("empty7").innerHTML="";
					document.getElementById("cmnd").value = <?php echo json_encode($cmnd); ?>;
				</script>
			<?php }

			// Khóa học
			if(isset($_POST['Lop']) == false || $_POST['Lop'] == "------- Chọn Khóa Học -------"){ ?>
				<script>
					document.getElementById("empty8").innerHTML="Khóa Học không được để trống!";
				</script>
			<?php }
			else { ?>
				<script>
					document.getElementById("empty8").innerHTML="";
					var temp = <?php echo json_encode($_POST['Lop']); ?>;
					document.getElementById("Lop").value = temp;


					var setNgay = new Array();

					var khaigiang = <?php echo json_encode($KhaiGiang); ?>;

					for (var i = 0; i < khaigiang.length; i++) {
						if (khaigiang[i].TenKhoaHoc == temp){
							if (setNgay.length == 0){
								setNgay.push(khaigiang[i].Ngay);
							}
							else {
								for (var j=0; j<=setNgay.length; j++){
								if (setNgay[j] == khaigiang[i].Ngay){
									
									continue;
								}
								if (j == setNgay.length -1){
									setNgay.push(khaigiang[i].Ngay);
								}
								}
							}
						}
					}
					
					var set_ngay = document.getElementById("Ngay");
					var option = document.createElement("option");
					option.text = "------- Chọn Ngày Khai Giảng -------";
					set_ngay.add(option);
					for(i=0; i<setNgay.length; i++){
						var option = document.createElement("option");
						option.text = setNgay[i];
						set_ngay.add(option);
					}


				</script>
			<?php }

			// Ngay
			if (isset($_POST['Ngay']) == false || $_POST['Ngay'] == "------- Chọn Ngày Khai Giảng -------"){ ?>
				<script>
					document.getElementById("empty4").innerHTML="Ngày không được để trống!";
				</script>
			<?php }
			else { ?>
				<script>
					document.getElementById("empty4").innerHTML="";
					var tempLop = <?php echo json_encode($_POST['Lop']); ?>;
					var tempNgay = <?php echo json_encode($_POST['Ngay']); ?>;
					document.getElementById("Ngay").value = tempNgay;

					

					var thu = document.getElementById("Thu");
					var ca = document.getElementById("CaHoc");
				

					var khaigiang = <?php echo json_encode($KhaiGiang); ?>;

					var indexI = 0;

					for (var i = 0; i < khaigiang.length; i++) {
						if (khaigiang[i].TenKhoaHoc == tempLop && khaigiang[i].Ngay == tempNgay){

							var option = document.createElement("option");
							option.text = khaigiang[i].Thu;
							thu.add(option);
							indexI = i;
							break;
						}
					}
					var option = document.createElement("option");
					option.text = "------- Chọn Ca Học -------";
					ca.add(option);
					for (var i = indexI; i < khaigiang.length; i++) {
						if (khaigiang[i].TenKhoaHoc == tempLop && khaigiang[i].Ngay ==tempNgay){

							var option = document.createElement("option");
							option.text = khaigiang[i].Ca + " (" + khaigiang[i].Loai + ")";
							ca.add(option);
						}
					}



				</script>
			<?php }

			// Thứ
			if(isset($_POST['Thu']) == false){ ?>
				<script>
					document.getElementById("empty9").innerHTML="Thứ không được để trống!";
				</script>
			<?php }
			else { ?>
				<script>
					document.getElementById("empty9").innerHTML="";
					var temp = <?php echo json_encode($_POST['Thu']); ?>;
					document.getElementById("Thu").value = temp;
				</script>
			<?php }

			// Ca
			if (isset($_POST['CaHoc']) == false  || $_POST['CaHoc'] == "------- Chọn Ca Học -------"){ ?>
				<script>
					document.getElementById("empty5").innerHTML="Ca Học không được để trống!";
				</script>
			<?php }
			else { ?>
				<script>
					document.getElementById("empty5").innerHTML="";
					var temp = <?php echo json_encode($_POST['CaHoc']); ?>;
					document.getElementById("CaHoc").value = temp;


					var onORoff = document.getElementById("onORoff");

					var option = document.createElement("option");
					var res = temp.split(" ");
					if (res[3] == "(Trực"){
						temp = "Trực Tiếp";
						option.text = temp;
						onORoff.add(option);
					}
					else if(res[3] == "(Online)"){
						temp = "Online";
						option.text = temp;
						onORoff.add(option);
					}
				</script>
			<?php }

			// on or off
			if(isset($_POST['onlineORoffline']) == false){ ?>
				<script>
					document.getElementById("empty10").innerHTML="Hình Thức Học không được để trống!";
				</script>
			<?php }
			else { ?>
				<script>
					document.getElementById("empty10").innerHTML="";
					var temp = <?php echo json_encode($_POST['onlineORoffline']); ?>;
					document.getElementById("onORoff").value = temp;
				</script>
			<?php }

		}
		else { 

			$result = insertDangKi($username, $numberphone, $email, $cmnd, $_POST['HocPhi'], $_POST['Lop'], $_POST['Ngay'], $_POST['Thu'], $_POST['CaHoc'], $_POST['onlineORoffline'] );
			if($result == 1){ ?>
				<script>
					document.getElementById("return").innerHTML="Bạn đã đăng kí thành công, nhớ theo dõi Email để nhận được thông báo sớm nhất nhé!";
				</script>
			<?php }
			else { ?>
				<script>
					document.getElementById("return").innerHTML="Bạn đã đăng kí thất bại, thử lại thêm một lần nữa nhé!";
				</script>
			<?php }
			
		}
	}

	if(isset($_POST['Gui'])){

		$username = $_POST['HoTen'];
		$numberphone = $_POST['SDT'];
		$mail = $_POST['Mail'];
		$vande = $_POST['VanDe'];
		$cource = $_POST['KhoaHoc'];

		if (($username == "") || ($vande == "") || ($mail == "" || $mail == "Email không hợp lệ")
			|| ($numberphone== "" || $numberphone == "Số điện thoại không hợp lệ") 
			|| (isset($_POST['KhoaHoc']) == false || $_POST['KhoaHoc'] == "------- Chọn Khóa Học -------") ) { ?>
				<script>
					document.getElementById("result_Problem").innerHTML="Bạn chưa điền đầy đủ thông tin hoặc thông tin bị sai!";
				</script>
		<?php }
		else { ?>
			<script>
				document.getElementById("result_Problem").innerHTML="";
			</script>
		<?php 
			// Khai báo biến
			$subject = "[DANG KY TU VAN]";
			$from = $mail;
			
			
			// Để gửi thư HTML, Content-type header phải được thiết lập
			$head  = 'MIME-Version: 1.0' . "\r\n";
			$head .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			
			// Tạo Email headers
			
			$head .= 'From: '.$from."\r\n".
				'Reply-To: '.$from."\r\n" .
				'X-Mailer: PHP/' . phpversion();
			
			// Soạn tin nhắn email HTML đơn giản
			$message = '<html><body>';
			$message .= '<p><b>Họ và Tên: </b>'.$username.'</p>';
			$message .= '<p><b>Số điện thoại: </b>'.$numberphone.'</p>';
			$message .= '<p><b>Email: </b>'.$mail.'</p>';
			$message .= '<p><b>Khóa học quan tâm: </b>'.$cource.'</p>';
			$message .= '<p><b>Vấn đề phản hồi: </b>'.$vande.'</p>';
			$message .= '</body></html>';
			if(mail('18521155@gm.uit.edu.vn', $subject, $message, $head)){ ?>
				<script>
					document.getElementById("result_Problem").innerHTML="Trung tâm sẽ liên hệ tư vấn với bạn sớm nhất nhé!";
				</script>
			<?php }
			else{ ?>
				<script>
					document.getElementById("result_Problem").innerHTML="Ui... Đăng kí tư vấn của bạn gửi không thành công!";
				</script>
			<?php }
			
		}

	}
?>

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
			<li><a href="../KhoaHoc/TrangKH.php">&#160;&#160;&#160;<b>Khóa học</b>&#160;&#160;</a>
				<ul class="sub-menu" class="sub2">
					<li class="li1"><a href="../KhoaHoc/TrangToeic2.php">TOEIC 2 Kỹ Năng</a></li><br>
					<li class="li2"><a href="../KhoaHoc/TrangToeic4.php">TOEIC 4 Kỹ Năng</a></li><br>
					<li class="li3"><a href="../KhoaHoc/TrangVNU-EPT.php">Luyện Thi VNU-EPT</a></li><br>
					<li class="li4"><a href="../KhoaHoc/TrangIelts.php">Luyện Thi IELTS</a></li><br>
					<li class="li5"><a href="../KhoaHoc/TrangGiaoTiep.php">Tiếng Anh Giao Tiếp</a></li><br>
				</ul>
			</li>
			<li><a href="../KhaiGiang/TrangKG.php">&#160;&#160;&#160;<b>Lịch Khai Giảng</b>&#160;&#160;</a>
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
	<!--scroll to top-->
	<span id='top' onclick='topFunction()'>
            <img src='../img/button-top.png' alt='' class='top-img' />
        </span>
    <!--chat-->	
        <a href='http://m.me/QuocThanh21/' target='_blank' class='chat'>
            <img src='../img/chat.png' alt='' class='chat-img' />
        </a>
    <!---->
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
</div>
</body>
</html>