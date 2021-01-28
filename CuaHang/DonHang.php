<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn Hàng</title>
    <script language="javascript" src="MuaSach.js"></script>
    <link rel="stylesheet" href="./CuaHangCss/MuaSach.css">
	
    <link rel="stylesheet" href="../css/header_footer.css">
	
	<script src='../js/header_footer.js'></script>
	<script src='../js/NutTop.js'></script>

</head>
<body>
<?php
    include("../Header_Footer/header_footer.php"); 
    $donhang = getDatHang();
    if(!isset($_SESSION['UserID']) || $user_login != "QTV"){
        header("Location: ../home.php");
    }

    if(isset($_POST['xacnhan'])){
        $stt = $_POST['stt'];
        $MaSach = $_POST['MaSach'];
        $TenSach = $_POST['TenSach'];
        $DonGia = $_POST['DonGia'];
        $SoLuong = $_POST['SoLuong'];
        $HoTen = $_POST['HoTen'];
        $SoDienThoai = $_POST['SoDienThoai'];
        $Email = $_POST['Email'];
        $DiaChi = $_POST['DiaChi'];
        $HinhThucThanhToan = $_POST['HinhThucThanhToan'];
        $TongTienHang = $_POST['TongTienHang'];
        $PhiVanChuyen = $_POST['PhiVanChuyen'];
        $ThanhTien = $_POST['ThanhTien'];

        // Khai báo biến
        $subject = "[XAC NHAN DAT HANG]";
        $from ="18521155@gm.uit.edu.vn";
        
        
        // Để gửi thư HTML, Content-type header phải được thiết lập
        $head  = 'MIME-Version: 1.0' . "\r\n";
        $head .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        
        // Tạo Email headers
        
        $head .= 'From: '.$from."\r\n".
            'Reply-To: '.$Email."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        // Soạn tin nhắn email HTML đơn giản
        $message = '<html><body>';
        $message .= '<p><h3><u>Thông Tin Khách Hàng</u></h3></p>';
        $message .= '<b>Họ và Tên: </b>'.$HoTen.'</p>';
        $message .= '<p><b>Số điện thoại: </b>'.$SoDienThoai.'</p>';
        $message .= '<p><b>Email: </b>'.$Email.'</p>';
        $message .= '<p><b>Địa Chỉ: </b>'.$DiaChi.'</p>';
        $message .= '<p><h3><u>Thông Tin Đơn Hàng</u></h3></p>';
        $message .= '<p><b>Mã Vận Chuyển: </b>'.$stt.'</p>';
        $message .= '<p><b>Mã Sản Phẩm: </b>'.$MaSach.'</p>';
        $message .= '<p><b>Tên Sách: </b>'.$TenSach.'</p>';
        $message .= '<p><b>Đơn Giá: </b>'.$DonGia.'</p>';
        $message .= '<p><b>Số Lượng: </b>'.$SoLuong.'</p>';
        $message .= '<p><b>Hình Thức Thanh Toán: </b>'.$HinhThucThanhToan.'</p>';
        $message .= '<p><b>Tổng Tiền Hàng: </b>'.$TongTienHang.'</p>';
        $message .= '<p><b>Phí Vận chuyển: </b>'.$PhiVanChuyen.'</p>';
        $message .= '<p><b>Thành Tiền: </b>'.$ThanhTien.'</p>';
        $message .= '</br></br>';
        $message .= '<p><br><b><u>* Lưu Ý:</u></b> Bạn xác nhận lại các thông tin ở bên trên và thực hiện tiếp việc thanh toán.</p>';
        $message .= '<p><br><b>- Nếu bạn chọn hình thức thanh toán là: THANH TOÁN TRỰC TIẾP. Vui lòng đến trung tâm Để mua và nhận sách trực tiếp tại Trung Tâm:</b></p>';
        $message .= '<p><b>Địa chỉ:</b> Khu phố 6, P.Linh Trung, Q.Thủ Đức, TP.Hồ Chí Minh </p>';
        $message .= '<p><br><b>- Nếu bạn chọn hình thức thanh toán là: CHUYỂN KHOẢN NGÂN HÀNG. Bạn vui lòng làm theo các bước sau đây:</b></p>';
        $message .= '<p><b>Bước 1:</b> Nộp học phí qua ngân hàng (online banking hoặc nộp tiền tại quầy ở ngân hàng) đến tài khoản ngân hàng sau. Hãy chắc chắn rằng bạn đã ghi đúng nội dung nội chuyển khoản như được hướng dẫn để việc xác nhận học phí diễn ra nhanh chóng và chính xác.</p>';
        $message .= '<p><b>+ Số Tài Khoản:</b> 2182167</p>';
        $message .= '<p><b>+ Chủ Tài Khoản:</b> Lê Thị Hồng Ngọc </p>';
        $message .= '<p><b>+ Ngân Hàng:</b ACB Chi nhánh Phan Đình Phùng, TP.HCM </p>';
        $message .= '<p><b>+ Nội Dung Chuyển Khoản:</b [Họ Tên] + [Số Điện Thoại] + [Mã Vận Chuyển] </p>';
        $message .= '<p><b>Bước 2:</b> Ngay khi làm xong bước 1, bạn cần trả lời email này bằng cách đính kèm hình ảnh của hình chụp màn hình xác nhận chuyển khoản online thành công hoặc hình chụp biên lai nộp tiền tại ngân hàng.</p>';
        $message .= '<p><br><b>- Nếu bạn chọn hình thức thanh toán là: THANH TOÁN TRỰC TIẾP </b></p>';
        $message .= '<p>Bạn cần trả lời email này với cú pháp [Họ Tên] + Xác Nhận Đơn Đặt Hàng</p>';
        $message .= '<p><br><b>Sau khi nhận được email phản hồi của bạn, Trung tâm sẽ gửi email xác nhận Ngọc đã hoàn tất việc đặt hàng thành công. Đồng thời, đơn hàng cũng sẽ được gửi đi trong 1-2 ngày sắp tới.</p>';
        $message .= '</body></html>';
        if(mail($Email, $subject, $message, $head)){
            set_TinhTrang_DatHang($stt);
            ?>
            <script>
                document.getElementById("check").value="1";
            </script>
        <?php
        header("Location: DonHang.php"); }
        else{ ?>
            <script>
                document.getElementById("check").value="2";
            </script>
        <?php }
        
    }

    if(isset($_POST['huy'])){
        $stt = $_POST['stt'];
        delete_itemDatHang($stt);
        header("Location: DonHang.php");
    }
?>

    <form method="post">
        <input type="hidden" name="check" id="check" value="0">
        <input type="hidden" name="stt" id="stt" value="0">
        <input type="hidden" name="MaSach" id="MaSach" value="0">
        <input type="hidden" name="TenSach" id="TenSach" value="0">
        <input type="hidden" name="DonGia" id="DonGia" value="0">
        <input type="hidden" name="SoLuong" id="SoLuong" value="0">
        <input type="hidden" name="SoDienThoai" id="SoDienThoai" value="0">
        <input type="hidden" name="DiaChi" id="DiaChi" value="0">
        <input type="hidden" name="Email" id="Email" value="0">
        <input type="hidden" name="HoTen" id="HoTen" value="0">
        <input type="hidden" name="HinhThucThanhToan" id="HinhThucThanhToan" value="0">
        <input type="hidden" name="TongTienHang" id="TongTienHang" value="0">
        <input type="hidden" name="PhiVanChuyen" id="PhiVanChuyen" value="0">
        <input type="hidden" name="ThanhTien" id="ThanhTien" value="0">
        <table id="table" style="left: 350px; top: 350px">
        </table>
    </form>

    <table id="table1">
    </table>


<script>

    // set table get Ma Don Hang
    var donhang = <?php echo json_encode($donhang); ?>;
    var table1 = document.getElementById("table1");

    var row0 = table1.insertRow();
    var cell1 = row0.insertCell(0);
    cell1.innerHTML = "Mã Đơn Hàng";
    cell1.style.textAlign = "center";
    cell1.style.fontWeight = "bold";
    cell1.colSpan = 3;

    if(donhang == 0){
        var row1 = table1.insertRow();
        var cell1 = row1.insertCell(0);
        cell1.innerHTML = "<i>Không Tìm Thấy Đơn Hàng</i>";
    }
    else {
        for(var i=0; i < donhang.length; i++){
            var row1 = table1.insertRow();
            var cell1 = row1.insertCell(0);
            cell1.innerHTML = "<button type='button' style='cursor:pointer;' class='button' onclick='funcGetDonHang(" + donhang[i].STT + ")'>" + donhang[i].STT + "</button>";


            if (i+1 < donhang.length){
                i++;
                var cell1 = row1.insertCell(1);
                cell1.innerHTML = "<button type='button' style='cursor:pointer;' class='button' onclick='funcGetDonHang(" + donhang[i].STT + ")'>" + donhang[i].STT + "</button>";
            }

            if (i+1 < donhang.length){
                i++;
                var cell1 = row1.insertCell(2);
                cell1.innerHTML = "<button type='button' class='button' style='cursor:pointer;' onclick='funcGetDonHang(" + donhang[i].STT + ")'>" + donhang[i].STT + "</button>";
            }
        
        }
        document.getElementById('stt').value = donhang[0].STT;

        var row4 = table.insertRow();
        var cell6 = row4.insertCell(0);
        cell6.innerHTML = "Đơn Hàng";
        cell6.style.textAlign = "center";
        cell6.style.color = "rgba(57,24,159,1)";
        cell6.style.fontWeight = "bold";
        cell6.style.paddingTop = "30px";
        cell6.style.paddingBottom = "40px";
        cell6.style.fontSize = "30px";
        cell6.colSpan = 2;

        var row4 = table.insertRow();
        var cell6 = row4.insertCell(0);
        cell6.innerHTML = "Thông tin Sách";
        cell6.style.border = "1px solid black";
        cell6.style.textAlign = "center";
        cell6.style.color = "rgba(57,24,159,1)";
        cell6.style.fontWeight = "bold";
        cell6.style.paddingTop = "10px";
        cell6.style.paddingBottom = "10px";
        cell6.style.fontSize = "25px";
        cell6.colSpan = 2;

        var row1 = table.insertRow();
        var cell0 = row1.insertCell(0);
        var cellMaSach = row1.insertCell(1);
        cell0.innerHTML = "Mã Sách";
        cell0.style.border = "1px solid black";
        cell0.style.paddingLeft = "10px";
        cellMaSach.innerHTML = donhang[0].MaSach,
        cellMaSach.style.border = "1px solid black";
        cellMaSach.style.paddingLeft = "10px";
        document.getElementById('MaSach').value = donhang[0].MaSach;

        var row2 = table.insertRow();
        var cell2 = row2.insertCell(0);
        var cellTenSach = row2.insertCell(1);
        cell2.innerHTML = "Tên Sách";
        cell2.style.border = "1px solid black";
        cell2.style.paddingLeft = "10px";
        cellTenSach.innerHTML = donhang[0].TenSach;
        cellTenSach.style.width =  "450px";
        cellTenSach.style.wordWrap = "break-word";
        cellTenSach.style.border = "1px solid black";
        cellTenSach.style.paddingLeft = "10px";
        cellTenSach.style.paddingRight = "10px";
        document.getElementById('TenSach').value = donhang[0].TenSach;

        var row3 = table.insertRow();
        var cell4 = row3.insertCell(0);
        var cellDonGia = row3.insertCell(1);
        cell4.innerHTML = "Đơn Giá";
        cell4.style.paddingLeft = "10px";
        cell4.style.border = "1px solid black";
        cellDonGia.innerHTML = donhang[0].DonGia,
        cellDonGia.style.border = "1px solid black";
        cellDonGia.style.paddingLeft = "10px";
        document.getElementById('DonGia').value = donhang[0].DonGia;

        var row3 = table.insertRow();
        var cell4 = row3.insertCell(0);
        var cellSoLuong = row3.insertCell(1);
        cell4.innerHTML = "Số Lượng";
        cell4.style.border = "1px solid black";
        cell4.style.paddingLeft = "10px";
        cellSoLuong.innerHTML = donhang[0].SoLuong,
        cellSoLuong.style.border = "1px solid black";
        cellSoLuong.style.paddingLeft = "10px";
        document.getElementById('SoLuong').value = donhang[0].SoLuong;

        var row4 = table.insertRow();
        var cell6 = row4.insertCell(0);
        cell6.innerHTML = "Thông Tin Khách Hàng";
        cell6.style.border = "1px solid black";
        cell6.style.textAlign = "center";
        cell6.style.color = "rgba(57,24,159,1)";
        cell6.style.fontWeight = "bold";
        cell6.style.paddingTop = "10px";
        cell6.style.paddingBottom = "10px";
        cell6.style.fontSize = "25px";
        cell6.colSpan = 2;

        var row3 = table.insertRow();
        var cell4 = row3.insertCell(0);
        var cellHoTen = row3.insertCell(1);
        cell4.innerHTML = "Họ và Tên";
        cell4.style.border = "1px solid black";
        cell4.style.paddingLeft = "10px";
        cellHoTen.innerHTML = donhang[0].HoTen,
        cellHoTen.style.border = "1px solid black";
        cellHoTen.style.paddingLeft = "10px";
        cellHoTen.style.wordWrap = "break-word";
        document.getElementById('HoTen').value = donhang[0].HoTen;

        var row3 = table.insertRow();
        var cell4 = row3.insertCell(0);
        var cellSoDienThoai = row3.insertCell(1);
        cell4.innerHTML = "Số Điện Thoại";
        cell4.style.paddingLeft = "10px";
        cell4.style.border = "1px solid black";
        cellSoDienThoai.innerHTML = donhang[0].SoDienThoai,
        cellSoDienThoai.style.border = "1px solid black";
        cellSoDienThoai.style.paddingLeft = "10px";
        

        var row3 = table.insertRow();
        var cell4 = row3.insertCell(0);
        var cellEmail = row3.insertCell(1);
        cell4.innerHTML = "Email";
        cell4.style.paddingLeft = "10px";
        cell4.style.border = "1px solid black";
        cellEmail.innerHTML = donhang[0].Email,
        cellEmail.style.border = "1px solid black";
        cellEmail.style.paddingLeft = "10px";
        cellEmail.style.wordWrap = "break-word";
        document.getElementById('Email').value = donhang[0].Email;

        var row3 = table.insertRow();
        var cell4 = row3.insertCell(0);
        var cellDiaChi = row3.insertCell(1);
        cell4.innerHTML = "Địa Chỉ Nhận Hàng";
        cell4.style.border = "1px solid black";
        cell4.style.paddingLeft = "10px";
        cell4.style.paddingRight = "10px";
        cellDiaChi.innerHTML = donhang[0].DiaChi,
        cellDiaChi.style.border = "1px solid black";
        cellDiaChi.style.paddingLeft = "10px";
        cellDiaChi.style.wordWrap = "break-word";
        document.getElementById('DiaChi').value = donhang[0].DiaChi;

        var row4 = table.insertRow();
        var cell6 = row4.insertCell(0);
        cell6.innerHTML = "Hình Thức Thanh Toán";
        cell6.style.border = "1px solid black";
        cell6.style.textAlign = "center";
        cell6.style.color = "rgba(57,24,159,1)";
        cell6.style.fontWeight = "bold";
        cell6.colSpan = 2;
        cell6.style.paddingTop = "10px";
        cell6.style.paddingBottom = "10px";
        cell6.style.fontSize = "25px";

        var row3 = table.insertRow();
        var cell4 = row3.insertCell(0);
        var cellHinhThucThanhToan = row3.insertCell(1);
        cell4.innerHTML = "Thanh Toán";
        cell4.style.paddingLeft = "10px";
        cell4.style.border = "1px solid black";
        cellHinhThucThanhToan.innerHTML = donhang[0].HinhThucThanhToan;
        cellHinhThucThanhToan.style.border = "1px solid black";
        cellHinhThucThanhToan.style.paddingLeft = "10px";
        document.getElementById('HinhThucThanhToan').value = donhang[0].HinhThucThanhToan;

        var row4 = table.insertRow();
        var cell6 = row4.insertCell(0);
        cell6.innerHTML = "Tổng Thanh Toán";
        cell6.style.border = "1px solid black";
        cell6.style.textAlign = "center";
        cell6.style.color = "rgba(57,24,159,1)";
        cell6.style.fontWeight = "bold";
        cell6.style.paddingTop = "10px";
        cell6.style.paddingBottom = "10px";
        cell6.style.fontSize = "25px";
        cell6.colSpan = 2;

        var row3 = table.insertRow();
        var cell4 = row3.insertCell(0);
        var cellTongTienHang = row3.insertCell(1);
        cell4.innerHTML = "Tổng Tiền Hàng";
        cell4.style.paddingLeft = "10px";
        cell4.style.border = "1px solid black";
        cellTongTienHang.innerHTML = donhang[0].TongTienHang;
        cellTongTienHang.style.border = "1px solid black";
        cellTongTienHang.style.paddingLeft = "10px";
        document.getElementById('TongTienHang').value = donhang[0].TongTienHang;

        var row10 = table.insertRow();
        var cell10 = row10.insertCell(0);
        var cellPhiVanCHuyen = row10.insertCell(1);
        cell10.innerHTML = "Phí Vận Chuyển";
        cell10.style.paddingLeft = "10px";
        cell10.style.border = "1px solid black";
        cellPhiVanCHuyen.innerHTML = donhang[0].PhiVanChuyen,
        cellPhiVanCHuyen.style.border = "1px solid black";
        cellPhiVanCHuyen.style.paddingLeft = "10px";
        document.getElementById('PhiVanChuyen').value = donhang[0].PhiVanChuyen;
        

        var row20 = table.insertRow();
        var cell20 = row20.insertCell(0);
        var cellThanhTien = row20.insertCell(1);
        cell20.innerHTML = "Thành Tiền";
        cell20.style.paddingLeft = "10px";
        cell20.style.border = "1px solid black";
        cellThanhTien.innerHTML = donhang[0].ThanhTien;
        cellThanhTien.style.border = "1px solid black";
        cellThanhTien.style.paddingLeft = "10px";
        document.getElementById('ThanhTien').value = donhang[0].ThanhTien;

        var row4 = table.insertRow();
        var cell6 = row4.insertCell(0);
        cell6.innerHTML = "<input type='submit' class='btn' name='huy' value='HỦY'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' class='btn' name='xacnhan' value='XÁC NHẬN'>";
        cell6.style.textAlign = "center";
        cell6.colSpan = 2;
    }



function funcGetDonHang(donhang){
    var itemdonhang = <?php echo json_encode($donhang); ?>;
    var i;
    for(i=0; i<itemdonhang.length; i++){
        if(itemdonhang[i].STT == donhang){
            break;
        }
    }

    
    cellMaSach.innerHTML = itemdonhang[i].MaSach;
    cellTenSach.innerHTML = itemdonhang[i].TenSach;
    cellDonGia.innerHTML = itemdonhang[i].DonGia;
    cellSoLuong.innerHTML = itemdonhang[i].SoLuong;
    cellHoTen.innerHTML = itemdonhang[i].HoTen;
    cellSoDienThoai.innerHTML = itemdonhang[i].SoDienThoai;
    cellEmail.innerHTML = itemdonhang[i].Email;
    cellDiaChi.innerHTML = itemdonhang[i].DiaChi;
    cellHinhThucThanhToan.innerHTML = itemdonhang[i].HinhThucThanhToan;
    cellTongTienHang.innerHTML = itemdonhang[i].TongTienHang;
    cellPhiVanCHuyen.innerHTML = itemdonhang[i].PhiVanChuyen;
    cellThanhTien.innerHTML = itemdonhang[i].ThanhTien;

    document.getElementById('stt').value = itemdonhang[i].STT;
    document.getElementById('MaSach').value = itemdonhang[i].MaSach;
    document.getElementById('TenSach').value = itemdonhang[i].TenSach;
    document.getElementById('DonGia').value = itemdonhang[i].DonGia;
    document.getElementById('TongTienHang').value = itemdonhang[i].TongTienHang;
    document.getElementById('PhiVanChuyen').value = itemdonhang[i].PhiVanChuyen;
    document.getElementById('ThanhTien').value = itemdonhang[i].ThanhTien;
    document.getElementById('HinhThucThanhToan').value = itemdonhang[i].HinhThucThanhToan;
    document.getElementById('DiaChi').value = itemdonhang[i].DiaChi;
    document.getElementById('Email').value = itemdonhang[i].Email;
    document.getElementById('SoDienThoai').value = itemdonhang[i].SoDienThoai;
    document.getElementById('HoTen').value = itemdonhang[i].HoTen;
    document.getElementById('SoLuong').value = itemdonhang[i].SoLuong;


}
</script>


<a href="./TrangCuaHang.php"><button type="button" id="backCuaHang">Cửa Hàng</button></a>
</body>
</html>
