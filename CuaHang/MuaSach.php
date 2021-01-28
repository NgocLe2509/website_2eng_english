<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mua Sách</title>
    <script language="javascript" src="MuaSach.js"></script>
    <link rel="stylesheet" href="./CuaHangCss/MuaSach.css">

    <link rel="stylesheet" href="../css/header_footer.css">
	
	<script src='../js/header_footer.js'></script>
	<script src='../js/NutTop.js'></script>

</head>
<body>
    <?php include("../Header_Footer/header_footer.php"); ?>
    
    <form method="post">
        <input type="hidden" name="hidden" id="hidden" value="0">
        <input type="hidden" name="MaSach" id="MaSach" value="0">
        <input type="hidden" name="TenSach" id="TenSach" value="0">
        <input type="hidden" name="DonGia" id="DonGia" value="0">
        <input type="hidden" name="TongTienHang" id="TongTienHang" value="0">
        <input type="hidden" name="PhiVanChuyen" id="PhiVanChuyen" value="0">
        <input type="hidden" name="ThanhTien" id="ThanhTien" value="0">
        <table id="table">
        </table>
    </form>

<script>
    var sach= <?php echo json_encode($sach); ?>;

    var table = document.getElementById("table");

    var row4 = table.insertRow();
    var cell6 = row4.insertCell(0);
    cell6.innerHTML = "<lable type='text' id='feedback'></lable>";
    cell6.style.textAlign = "center";
    cell6.style.color = "rgb(255, 0, 0)";
    cell6.style.fontStyle = "italic";
    cell6.style.marginBottom = "20px";
    cell6.style.fontSize = "18px";
    cell6.style.padding = "5px";
    cell6.style.backgroundColor = "rgb(179, 255, 242)";
    cell6.colSpan = 2;

    var row4 = table.insertRow();
    var cell6 = row4.insertCell(0);
    cell6.innerHTML = "Giỏ Hàng";
    cell6.style.textAlign = "center";
    cell6.style.color = "rgba(57,24,159,1)";
    cell6.style.fontWeight = "bold";
    cell6.style.paddingTop = "30px";
    cell6.style.paddingBottom = "60px";
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
    var cell1 = row1.insertCell(1);
    cell0.innerHTML = "Mã Sách";
    cell0.style.border = "1px solid black";
    cell0.style.paddingLeft = "10px";
    cell1.innerHTML = sach.MaSach,
    cell1.style.border = "1px solid black";
    cell1.style.paddingLeft = "10px";
    document.getElementById('MaSach').value = sach.MaSach;

    var row2 = table.insertRow();
    var cell2 = row2.insertCell(0);
    var cell3 = row2.insertCell(1);
    cell2.innerHTML = "Tên Sách";
    cell2.style.border = "1px solid black";
    cell2.style.paddingLeft = "10px";
    cell3.innerHTML = sach.TenSach;
    cell3.style.width =  "450px";
    cell3.style.wordWrap = "break-word";
    cell3.style.border = "1px solid black";
    cell3.style.paddingLeft = "10px";
    cell3.style.paddingRight = "10px";
    document.getElementById('TenSach').value = sach.TenSach;

    var row3 = table.insertRow();
    var cell4 = row3.insertCell(0);
    var cell5 = row3.insertCell(1);
    cell4.innerHTML = "Đơn Giá";
    cell4.style.paddingLeft = "10px";
    cell4.style.border = "1px solid black";
    var giaToString = sach.Gia.toString();
    var str = new Array();
    var j = 0;
    for(var i = giaToString.length -1; i>-1; i--){
        str[j] = giaToString[i];
        j++;
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
        }
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
            if(i != 0){
                str[j] = ",";
                j++;
            }
        }
    }
    giaToString = "";
    for(var i = str.length -1; i>-1; i--) {
        giaToString += str[i];
    }
    cell5.innerHTML = giaToString + "đ",
    cell5.style.border = "1px solid black";
    cell5.style.paddingLeft = "10px";
    document.getElementById('DonGia').value = giaToString + "đ";

    var row3 = table.insertRow();
    var cell4 = row3.insertCell(0);
    var cell5 = row3.insertCell(1);
    cell4.innerHTML = "Số Lượng";
    cell4.style.border = "1px solid black";
    cell4.style.paddingLeft = "10px";
    cell5.innerHTML = "<input type=\"number\" name=\"SoLuong\" class='input' value='1' id='SoLuong' min='0' max='20' onchange='getSoLuong()' oninput='limitLengStart()' maxlength='3' onkeydown='validateNumber(event);'>",
    cell5.style.border = "1px solid black";

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
    var cell5 = row3.insertCell(1);
    cell4.innerHTML = "Họ và Tên";
    cell4.style.border = "1px solid black";
    cell4.style.paddingLeft = "10px";
    cell5.innerHTML = "<input type=\"text\" name=\"HoTen\" id='username' class='input' oninput='limitLengStartUsername()' maxlength='50'>",
    cell5.style.border = "1px solid black";

    var row3 = table.insertRow();
    var cell4 = row3.insertCell(0);
    var cell5 = row3.insertCell(1);
    cell4.innerHTML = "Số Điện Thoại";
    cell4.style.paddingLeft = "10px";
    cell4.style.border = "1px solid black";
    cell5.innerHTML = "<input type=\"text\" name=\"SoDienThoai\" id='sdt' class='input' oninput='limitLengStartSDT()' maxlength='11' onkeydown='validateNumber(event);'>",
    cell5.style.border = "1px solid black";

    var row3 = table.insertRow();
    var cell4 = row3.insertCell(0);
    var cell5 = row3.insertCell(1);
    cell4.innerHTML = "Email";
    cell4.style.paddingLeft = "10px";
    cell4.style.border = "1px solid black";
    cell5.innerHTML = "<input type=\"text\" name=\"Email\" id='email' class='input' oninput='limitLengStartEmail()' maxlength='50'>",
    cell5.style.border = "1px solid black";

    var row3 = table.insertRow();
    var cell4 = row3.insertCell(0);
    var cell5 = row3.insertCell(1);
    cell4.innerHTML = "Địa Chỉ Nhận Hàng";
    cell4.style.border = "1px solid black";
    cell4.style.paddingLeft = "10px";
    cell4.style.paddingRight = "10px";
    cell5.innerHTML = "<input type=\"text\" name=\"DiaChi\" id='diachi' class='input' oninput='limitLengStartDiaChi()' maxlength='150'>",
    cell5.style.border = "1px solid black";

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
    var cell5 = row3.insertCell(1);
    cell4.innerHTML = "Thanh Toán";
    cell4.style.paddingLeft = "10px";
    cell4.style.border = "1px solid black";
    cell5.innerHTML = "<select class='input' onchange='getPhiShip()' name=\"HinhThucThanhToan\" id=\"ThanhToan\"> </select>";
    cell5.style.border = "1px solid black";
    var ThanhToan = document.getElementById("ThanhToan");
    var option = document.createElement("option");
    option.text = "Thanh Toán Trực Tiếp (Không Tính Phí Ship)";
    ThanhToan.add(option);
    var option = document.createElement("option");
    option.text = "Thanh Toán Khi Nhận Hàng";
    ThanhToan.add(option);
    var option = document.createElement("option");
    option.text = "Chuyển Khoản Ngân Hàng";
    ThanhToan.add(option);

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
    var cell5 = row3.insertCell(1);
    cell4.innerHTML = "Tổng Tiền Hàng";
    cell4.style.paddingLeft = "10px";
    cell4.style.border = "1px solid black";
    var SoLuong = document.getElementById("SoLuong").value;
    var Gia = SoLuong * sach.Gia;
    var giaToString = Gia.toString();
    var str = new Array();
    var j = 0;
    for(var i = giaToString.length -1; i>-1; i--){
        str[j] = giaToString[i];
        j++;
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
        }
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
            if(i != 0){
                str[j] = ",";
                j++;
            }
        }
    }
    giaToString = "";
    for(var i = str.length -1; i>-1; i--) {
        giaToString += str[i];
    }
    cell5.innerHTML = giaToString + "đ";
    cell5.style.border = "1px solid black";
    cell5.style.paddingLeft = "10px";
    document.getElementById('TongTienHang').value = giaToString + "đ";

    var row10 = table.insertRow();
    var cell10 = row10.insertCell(0);
    var cell11 = row10.insertCell(1);
    cell10.innerHTML = "Phí Vận Chuyển";
    cell10.style.paddingLeft = "10px";
    cell10.style.border = "1px solid black";
    cell11.innerHTML = "0đ",
    cell11.style.border = "1px solid black";
    cell11.style.paddingLeft = "10px";
    document.getElementById('PhiVanChuyen').value = "0đ";
    

    var row20 = table.insertRow();
    var cell20 = row20.insertCell(0);
    var cell21 = row20.insertCell(1);
    cell20.innerHTML = "Thành Tiền";
    cell20.style.paddingLeft = "10px";
    cell20.style.border = "1px solid black";
    var giaToString = sach.Gia.toString();
    var str = new Array();
    var j = 0;
    for(var i = giaToString.length -1; i>-1; i--){
        str[j] = giaToString[i];
        j++;
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
        }
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
            if(i != 0){
                str[j] = ",";
                j++;
            }
        }
    }
    giaToString = "";
    for(var i = str.length -1; i>-1; i--) {
        giaToString += str[i];
    }
    cell21.innerHTML = giaToString + "đ";
    cell21.style.border = "1px solid black";
    cell21.style.paddingLeft = "10px";
    document.getElementById('ThanhTien').value = giaToString + "đ";

    var row4 = table.insertRow();
    var cell6 = row4.insertCell(0);
    cell6.innerHTML = "<input type='submit' id='DatHang' name='submit' value='Đặt Hàng' onclick='checkThanhToan()'>";
    cell6.style.textAlign = "center";
    cell6.colSpan = 2;


function getPhiShip(){
    var thanhtoan = document.getElementById("ThanhToan");
    var text = ThanhToan.options[ThanhToan.selectedIndex].text;
    var index;
    if (text == "Thanh Toán Trực Tiếp (Không Tính Phí Ship)") {
        cell11.innerHTML = "0đ";
        document.getElementById('PhiVanChuyen').value = "0đ";
        index = 0;
    }
    else if (text == "Thanh Toán Khi Nhận Hàng"){
        cell11.innerHTML = "35,000đ";
        document.getElementById('PhiVanChuyen').value = "35,000đ";
        index = 35000;
    }
    else {
        cell11.innerHTML = "20,000đ";
        document.getElementById('PhiVanChuyen').value = "20,000đ";
        index = 20000;
    }
    var SoLuong = document.getElementById("SoLuong").value;
    var Gia = SoLuong * sach.Gia + index;
    var giaToString = Gia.toString();
    var str = new Array();
    var j = 0;
    for(var i = giaToString.length -1; i>-1; i--){
        str[j] = giaToString[i];
        j++;
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
        }
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
            if(i != 0){
                str[j] = ",";
                j++;
            }
        }
    }
    giaToString = "";
    for(var i = str.length -1; i>-1; i--) {
        giaToString += str[i];
    }
    cell21.innerHTML = giaToString + "đ";
    document.getElementById('ThanhTien').value = giaToString + "đ";
}


function getSoLuong(){
    var SoLuong = document.getElementById("SoLuong").value;
    var Gia = SoLuong * sach.Gia;
    var giaToString = Gia.toString();
    var str = new Array();
    var j = 0;
    for(var i = giaToString.length -1; i>-1; i--){
        str[j] = giaToString[i];
        j++;
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
        }
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
            if(i != 0){
                str[j] = ",";
                j++;
            }
        }
    }
    giaToString = "";
    for(var i = str.length -1; i>-1; i--) {
        giaToString += str[i];
    }
    cell5.innerHTML = giaToString + "đ";
    document.getElementById('TongTienHang').value = giaToString + "đ";

    /************************************************* */
    var thanhtoan = document.getElementById("ThanhToan");
    var text = ThanhToan.options[ThanhToan.selectedIndex].text;
    var index;
    if (text == "Thanh Toán Trực Tiếp (Không Tính Phí Ship)") {
        index = 0;
    }
    else if (text == "Thanh Toán Khi Nhận Hàng"){
        index = 35000;
    }
    else {
        index = 20000;
    }
    Gia += index;
    var giaToString = Gia.toString();
    var str = new Array();
    var j = 0;
    for(var i = giaToString.length -1; i>-1; i--){
        str[j] = giaToString[i];
        j++;
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
        }
        if (i - 1 >= 0) {
            i--;
            str[j] = giaToString[i];
            j++;
            if(i != 0){
                str[j] = ",";
                j++;
            }
        }
    }
    giaToString = "";
    for(var i = str.length -1; i>-1; i--) {
        giaToString += str[i];
    }
    cell21.innerHTML = giaToString + "đ";
    document.getElementById('ThanhTien').value = giaToString + "đ";

}
</script>

<?php 
    if(isset($_POST['submit'])){
        $hidden = $_POST['hidden'];
        if ($hidden == 0){
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

            addDatHang($MaSach,$TenSach,$DonGia,$SoLuong,$HoTen,$SoDienThoai,$Email,$DiaChi,$HinhThucThanhToan,$TongTienHang,$PhiVanChuyen,$ThanhTien);
                ?>
                <script>
                    document.getElementById('feedback').innerHTML = "Đặt Hàng Thành Công</br>Quản Trị Viên Sẽ gửi Email xác nhận cho bạn sớm nhất nhé!";
                </script>
                <?php
        }
    }
?>
<a href="../CuaHang/TrangCuaHang.php"><button type="button" id="backCuaHang">Cửa Hàng</button></a>
</body>
</html>
