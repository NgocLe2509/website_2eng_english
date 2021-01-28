<?php
// global connection variable
$connect = 0;
$conn;

// connect database
function connect_db()
{
	global $connect;
	global $conn;
	if($connect == 0){
		$conn=mysqli_connect("localhost","root","","TwoEng") or die("Cannot connect");
		$conn -> set_charset("utf8");
		$connect = 1;
	}
}

// disconnect database
function disconnect_db()
{
	global $connect;
	global $conn;
	if ($connect == 1){
		mysqli_close($conn);	
		$connect = 0;
    }
}

// create session
function session(){
	global $conn;
	connect_db();

	if(!isset($_SESSION['UserID'])){
		return "none_user";
	}
	$user_check = $_SESSION['UserID'];
	$ses_sql = mysqli_query($conn,"select UserID from NguoiDung where UserID = '$user_check' ") or die("Failed to query database");
	$row = mysqli_fetch_array($ses_sql);
	$login_session = $row['UserID'];
	disconnect_db();
	return $login_session;
}

// logout
function logout(){
	session_start();
	session_destroy();
	header("Location:../TrangChu/home.php");
}

function logout_class(){
	session_start();
	$_SESSION['MaLop'] = "";
	header("Location:../BaiTapLop/login_class.php");
}

// select table information
function get_NguoiDung($UserID, $Password)
{
	global $conn;
	connect_db();

	$UserID = $conn -> real_escape_string($UserID);
	$Password = $conn -> real_escape_string($Password);

	$query = mysqli_query($conn, "select * from NguoiDung where UserID = '$UserID'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);
	disconnect_db();
	if($row == null)
	{
		return 0;
	}
	else if(password_verify($Password, $row['Password'])){
		return $row;
	}
	else {
		return 0;
	}
	
}

// select table information
function get_NguoiDungWithUserID($UserID)
{
	global $conn;
	connect_db();

	$UserID = $conn -> real_escape_string($UserID);

	$query = mysqli_query($conn, "select * from NguoiDung where UserID = '$UserID'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);
	disconnect_db();

	return $row;
}

// check NguoiDung
function check_NguoiDung($UserID)
{
	global $conn;
	connect_db();

	$UserID = $conn -> real_escape_string($UserID);

	$query = mysqli_query($conn, "select * from NguoiDung where UserID = '$UserID'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);
	disconnect_db();

	return $row;
}

//-------------------------------------------------------------------------------------------------------------------------------
// --------------------------------------------------Reset Password--------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------

// get OTP
function get_OTP($UserID)
{
	global $conn;
	connect_db();

	$UserID = $conn -> real_escape_string($UserID);

	$value_random = mt_rand(1000, 9999);

	$query = mysqli_query($conn, "update NguoiDung set Code = '$value_random' where UserID = '$UserID'") or die("Failed to query database");
	disconnect_db();

	return $value_random;
}

// check code is null or FFFF for enter OTP
function chkCodeNullorFFFF($UserID){
	global $conn;
	connect_db();

	$UserID = $conn -> real_escape_string($UserID);

	$query = mysqli_query($conn, "select * from NguoiDung where UserID = '$UserID'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);
	if($row['code'] == "FFFF" || $row['code']==null){
		disconnect_db();
		return true;
	}
	else{
		disconnect_db();
		return false;
	}
}

// check code is FFFF for reset pass
function chkFFFF($UserID){
	global $conn;
	connect_db();

	$UserID = $conn -> real_escape_string($UserID);

	$query = mysqli_query($conn, "select * from NguoiDung where UserID = '$UserID'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);
	if($row['code'] == "FFFF"){
		disconnect_db();
		return true;
	}
	else{
		disconnect_db();
		return false;
	}
}

// check OTP is true, if true set OTP is FFFF
function chkCode($UserID, $Code){
	global $conn;
	connect_db();

	$UserID = $conn -> real_escape_string($UserID);
	$Code = $conn -> real_escape_string($Code);

	$query = mysqli_query($conn, "select * from NguoiDung where UserID = '$UserID' and Code = '$Code'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);
	if($row != null){
		mysqli_query($conn, "update NguoiDung set Code = 'FFFF' where UserID = '$UserID'") or die("Failed to query database");
		disconnect_db();
		return true;
	}
	else{
		disconnect_db();
		return false;
	}
}

// change Password
function changePassword($UserID, $newPassword){
	global $conn;
	connect_db();

	$UserID = $conn -> real_escape_string($UserID);
	$newPassword = $conn -> real_escape_string($newPassword);

	mysqli_query($conn, "update NguoiDung SET Password = '$newPassword' where UserID = '$UserID'");
	mysqli_query($conn, "update NguoiDung SET code = null where UserID = '$UserID'");
	disconnect_db();
}

//
// change info user
//


function changeInfo($user_login, $username, $phone, $birthday, $sex, $add){
	global $conn;
	connect_db();

	$user_login = $conn -> real_escape_string($user_login);
	$username = $conn -> real_escape_string($username);
	$phone = $conn -> real_escape_string($phone);
	$birthday = $conn -> real_escape_string($birthday);
	$sex = $conn -> real_escape_string($sex);
	$add = $conn -> real_escape_string($add);

	$arrUser = explode(" ", $username);
	$firtname = "";
	for($i = 0; $i< count($arrUser)-1; $i++){
		if($i==count($arrUser)-2){
			$firtname = $firtname.$arrUser[$i];
		}
		else {
			$firtname = $firtname.$arrUser[$i]." ";
		}
	}
	$lastname = $arrUser[count($arrUser)-1];

	mysqli_query($conn, "update NguoiDung SET Firstname = '$firtname', Lastname = '$lastname', GioiTinh = '$sex',
		NgaySinh = '$birthday', DiaChi = '$add', SDT = '$phone' where UserID = '$user_login'");
	disconnect_db();
}

//
// select KhaiGiang 
//
// 
function get_KhaiGiang()
{
	global $conn;
	connect_db();

	$query = mysqli_query($conn, "select * from KhaiGiang where TinhTrang = 0") or die("Failed to query database");
	$list = array();
	while($row = mysqli_fetch_assoc($query))
	{
		$list[] = $row;
	}

	disconnect_db();
	return $list;
}


//
// insert DangKi
//
// 
function insertDangKi($HoTen, $SoDienThoai, $Email, $CMND, $PhuongThucDongHocPhi, $Lop, $NgayKhaiGiang, $Thu, $Ca, $onlineORoffline )
{


	global $conn;
	connect_db();

	$HoTen = $conn -> real_escape_string($HoTen);
	$SoDienThoai = $conn -> real_escape_string($SoDienThoai);
	$Email = $conn -> real_escape_string($Email);
	$CMND = $conn -> real_escape_string($CMND);
	$PhuongThucDongHocPhi = $conn -> real_escape_string($PhuongThucDongHocPhi);
	$Lop = $conn -> real_escape_string($Lop);
	$NgayKhaiGiang = $conn -> real_escape_string($NgayKhaiGiang);
	$Thu = $conn -> real_escape_string($Thu);
	$Ca = $conn -> real_escape_string($Ca);
	$onlineORoffline = $conn -> real_escape_string($onlineORoffline);
	
	$sql = "insert into DangKi(HoTen, SoDienThoai, Email, CMND, PhuongThucDongHocPhi, Lop, onlineORoffline, Ca, Thu, NgayKhaiGiang, TinhTrang) values('$HoTen', '$SoDienThoai', '$Email', '$CMND', '$PhuongThucDongHocPhi', '$Lop', '$onlineORoffline', '$Ca', '$Thu', '$NgayKhaiGiang', 0)";

	$result = 0;
	if(mysqli_query($conn, $sql) === TRUE){
		$result = 1;
	}
	else {
		$result = 0;
	}

	disconnect_db();
	return $result;
}

function check_malop($malop, $matkhau)
{
	global $conn;
	connect_db();

	$malop = $conn -> real_escape_string($malop);
	$matkhau = $conn -> real_escape_string($matkhau);

	$query = mysqli_query($conn, "select * from Lop where MaLop = '$malop'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);

	$userid = $_SESSION['UserID'];
	$query1 = mysqli_query($conn, "select * from XepLop where MaLop = '$malop' and MaHV = '$userid'") or die("Failed to query database");
	$row1 = mysqli_fetch_assoc($query1);

	$query2 = mysqli_query($conn, "select * from GiangDay where MaLop = '$malop' and MaGV = '$userid'") or die("Failed to query database");
	$row2 = mysqli_fetch_assoc($query2);

	disconnect_db();

	if($row == null){
		return 0;
	}
	else if(password_verify($matkhau, $row['MatKhau'])){
		return 1;
	}
	else if ($userid == "QTV"){
		return 1;
	}
	else if (!$row1 && !$row2){
		return 0;
	}
	else {
		return 1;
	}
}

function get_BaiTapLop($malop){
	global $conn;
	connect_db();

	$malop = $conn -> real_escape_string($malop);

	$query = mysqli_query($conn, "select * from BaiTapLop where MaLop = '$malop'") or die("Failed to query database");
	$list = array();
	while($row = mysqli_fetch_assoc($query))
	{
		$list[] = $row;
	}

	disconnect_db();
	return $list;
}


function insertBaiNop($STTBai, $MaLop, $MaHV, $Filename)
{

	global $conn;
	connect_db();

	$STTBai = $conn -> real_escape_string($STTBai);
	$MaLop = $conn -> real_escape_string($MaLop);
	$MaHV = $conn -> real_escape_string($MaHV);
	$Filename = $conn -> real_escape_string($Filename);
	
	$sql = "insert into BaiNop(STTBai, MaLop, MaHV, Filename) values('$STTBai', '$MaLop', '$MaHV', '$Filename')";

	$result = 0;
	if(mysqli_query($conn, $sql) === TRUE){
		$result = 1;
	}
	else {
		$result = 0;
	}

	disconnect_db();
	return $result;
}

function get_XepLop($malop){
	global $conn;
	connect_db();

	$malop = $conn -> real_escape_string($malop);

	$query = mysqli_query($conn, "select * from XepLop where MaLop = '$malop'") or die("Failed to query database");
	$list = array();
	while($row = mysqli_fetch_assoc($query))
	{
		$list[] = $row;
	}

	disconnect_db();
	return $list;
}

function get_GiangDay($malop){
	global $conn;
	connect_db();

	$malop = $conn -> real_escape_string($malop);

	$query = mysqli_query($conn, "select * from GiangDay where MaLop = '$malop'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);

	disconnect_db();
	return $row;
}

function get_KhaiGiangwithMaLop($malop){
	global $conn;
	connect_db();

	$malop = $conn -> real_escape_string($malop);

	$query = mysqli_query($conn, "select * from KhaiGiang where MaLop = '$malop'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);

	disconnect_db();
	return $row;
}

function get_LopwithMaLop($malop){
	global $conn;
	connect_db();

	$malop = $conn -> real_escape_string($malop);

	$query = mysqli_query($conn, "select * from Lop where MaLop = '$malop'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);

	disconnect_db();
	return $row;
}

function check_BaiTapLop($STTBai, $MaLop){
	global $conn;
	connect_db();

	$MaLop = $conn -> real_escape_string($MaLop);
	$STTBai = $conn -> real_escape_string($STTBai);

	$query = mysqli_query($conn, "select * from BaiTapLop where MaLop = '$MaLop' and STT = '$STTBai'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);
	disconnect_db();
	if ($row['STT'] == null){
		return 0;
	}
	else {
		return $row;
	}
}

function delete_BaiTap($STTBai){
	global $conn;
	connect_db();

	$STTBai = $conn -> real_escape_string($STTBai);

	mysqli_query($conn, "DELETE FROM BaiTapLop WHERE STT = '$STTBai'") or die("Failed to query database");
	disconnect_db();
}

function editBaiNop($STTBai, $MoTa, $YeuCau , $filemane){
	global $conn;
	connect_db();

	$STTBai = $conn -> real_escape_string($STTBai);
	$MoTa = $conn -> real_escape_string($MoTa);
	$YeuCau = $conn -> real_escape_string($YeuCau);
	$filemane = $conn -> real_escape_string($filemane);

	mysqli_query($conn, "UPDATE BaiTapLop SET YeuCau = '$YeuCau', MoTa = '$MoTa', Filename = '$filemane' WHERE STT = '$STTBai'") or die("Failed to query database");
	disconnect_db();
}

function addBaiTapLop($MaLop, $MoTa, $YeuCau , $filemane){
	global $conn;
	connect_db();

	$MaLop = $conn -> real_escape_string($MaLop);
	$MoTa = $conn -> real_escape_string($MoTa);
	$YeuCau = $conn -> real_escape_string($YeuCau);
	$filemane = $conn -> real_escape_string($filemane);


	mysqli_query($conn, "insert into BaiTapLop(MaLop, YeuCau, MoTa, Filename) values('$MaLop', '$MoTa', '$YeuCau', '$filemane')") or die("Failed to query database");
	disconnect_db();
}

function get_BaiNop($STTBai){
	global $conn;
	connect_db();

	$STTBai = $conn -> real_escape_string($STTBai);

	$query = mysqli_query($conn, "select * from BaiNop where STTBai = '$STTBai'") or die("Failed to query database");
	$list = array();
	while($row = mysqli_fetch_assoc($query))
	{
		$list[] = $row;
	}
	disconnect_db();
	return $list;
}

function get_BaiNop_mahv($MaHV){
	global $conn;
	connect_db();

	$MaHV = $conn -> real_escape_string($MaHV);

	$query = mysqli_query($conn, "select * from BaiNop where MaHV = '$MaHV'") or die("Failed to query database");
	$list = array();
	while($row = mysqli_fetch_assoc($query))
	{
		$list[] = $row;
	}
	disconnect_db();
	return $list;
}

function deleteFile($MaHV, $STTBai){
	global $conn;
	connect_db();

	$MaHV = $conn -> real_escape_string($MaHV);
	$STTBai = $conn -> real_escape_string($STTBai);

	mysqli_query($conn, "delete from BaiNop where STTBai = '$STTBai' and MaHV = '$MaHV'") or die("Failed to query database");
	disconnect_db();
}

function addBaiTest($user_login, $TenBaiTest, $TongSoCau, $SoCauDung, $ThoiGianTest)
{

	global $conn;
	connect_db();

	$user_login = $conn -> real_escape_string($user_login);
	$TenBaiTest = $conn -> real_escape_string($TenBaiTest);
	$TongSoCau = $conn -> real_escape_string($TongSoCau);
	$SoCauDung = $conn -> real_escape_string($SoCauDung);
	$ThoiGianTest = $conn -> real_escape_string($ThoiGianTest);
	
	$sql = "insert into LichSuTest(UserID, TenBaiTest, TongSoCau, SoCauDung, ThoiGianTest) values('$user_login', '$TenBaiTest', '$TongSoCau', '$SoCauDung', '$ThoiGianTest')";
	mysqli_query($conn, $sql) or die("Failed to query database");


	disconnect_db();
}

function get_Sach($MaSach){
	global $conn;
	connect_db();

	$MaSach = $conn -> real_escape_string($MaSach);

	$query = mysqli_query($conn, "select * from Sach where STT = '$MaSach'") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);
	disconnect_db();
	return $row;
}

function addDatHang($MaSach,$TenSach,$DonGia,$SoLuong,$HoTen,$SoDienThoai,$Email,$DiaChi,$HinhThucThanhToan,$TongTienHang,$PhiVanChuyen,$ThanhTien)
{

	global $conn;
	connect_db();

	$MaSach= $conn -> real_escape_string($MaSach);
	$TenSach = $conn -> real_escape_string($TenSach);
	$DonGia = $conn -> real_escape_string($DonGia);
	$SoLuong = $conn -> real_escape_string($SoLuong);
	$HoTen = $conn -> real_escape_string($HoTen);
	$SoDienThoai = $conn -> real_escape_string($SoDienThoai);
	$Email = $conn -> real_escape_string($Email);
	$DiaChi = $conn -> real_escape_string($DiaChi);
	$HinhThucThanhToan = $conn -> real_escape_string($HinhThucThanhToan);
	$TongTienHang = $conn -> real_escape_string($TongTienHang);
	$PhiVanChuyen = $conn -> real_escape_string($PhiVanChuyen);
	$ThanhTien = $conn -> real_escape_string($ThanhTien);
	
	$sql = "insert into DatHang(MaSach,TenSach,DonGia,SoLuong,HoTen,SoDienThoai,Email,DiaChi,HinhThucThanhToan,TongTienHang,PhiVanChuyen,ThanhTien, TinhTrang) values('$MaSach', '$TenSach', '$DonGia', '$SoLuong', '$HoTen', '$SoDienThoai', '$Email', '$DiaChi', '$HinhThucThanhToan', '$TongTienHang', '$PhiVanChuyen', '$ThanhTien', '0')";
	mysqli_query($conn, $sql)  or die("Failed to query database");
	disconnect_db();

}

function getDatHang(){
	global $conn;
	connect_db();


	$query = mysqli_query($conn, "select * from DatHang where TinhTrang = 0") or die("Failed to query database");
	$list = array();
	while($row = mysqli_fetch_assoc($query))
	{
		$list[] = $row;
	}
	disconnect_db();
	if(!$list) {
		return 0;
	}
	else {
		return $list;
	}
}

function delete_itemDatHang($stt){
	global $conn;
	connect_db();

	$stt = $conn -> real_escape_string($stt);

	mysqli_query($conn, "DELETE FROM DatHang WHERE STT = '$stt'") or die("Failed to query database");
	disconnect_db();
}

function set_TinhTrang_DatHang($STT)
{
	global $conn;
	connect_db();

	$STT = $conn -> real_escape_string($STT);

	mysqli_query($conn, "update DatHang set TinhTrang = '1' where STT = '$STT'") or die("Failed to query database");
	disconnect_db();
}

function getLichSuTest(){
	global $conn;
	connect_db();

	$user = $_SESSION['UserID'];
	$query = mysqli_query($conn, "select * from LichSuTest where UserID = '$user'") or die("Failed to query database");
	$list = array();
	while($row = mysqli_fetch_assoc($query))
	{
		$list[] = $row;
	}
	disconnect_db();
	if(!$list) {
		return 0;
	}
	else {
		return $list;
	}
}

function get_count_NguoiDung(){
	global $conn;
	connect_db();

	$query = mysqli_query($conn, "SELECT COUNT(*) FROM NguoiDung") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);
	disconnect_db();
	return $row['COUNT(*)'];
}

function addNguoiDung($LoaiTK,$MaND,$password,$Ho,$Ten,$SoDienThoai,$Email,$GioiTinh,$NgaySinh,$diachi)
{


	global $conn;
	connect_db();

	$LoaiTK = $conn -> real_escape_string($LoaiTK);
	$MaND = $conn -> real_escape_string($MaND);
	$Email = $conn -> real_escape_string($Email);
	$password = $conn -> real_escape_string($password);
	$Ho = $conn -> real_escape_string($Ho);
	$Ten = $conn -> real_escape_string($Ten);
	$GioiTinh = $conn -> real_escape_string($GioiTinh);
	$NgaySinh = $conn -> real_escape_string($NgaySinh);
	$diachi = $conn -> real_escape_string($diachi);
	$SoDienThoai = $conn -> real_escape_string($SoDienThoai);

	$Loai = "";
	if($LoaiTK == "Giáo Viên"){
		$Loai = "GV";
	}
	else {
		$Loai = "HV";
	}
	
	$sql = "insert into NguoiDung(UserID, Password, Firstname, Lastname, Email, GioiTinh, NgaySinh, DiaChi, SDT, LoaiTK, code) values('$MaND', '$password', '$Ho', '$Ten', '$Email', '$GioiTinh', '$NgaySinh', '$diachi', '$SoDienThoai', '$Loai', '')";

	$result = 0;
	if(mysqli_query($conn, $sql) === TRUE){
		$result = 1;
	}
	else {
		$result = 0;
	}

	disconnect_db();
	return $result;
}

function get_count_Lop(){
	global $conn;
	connect_db();

	$query = mysqli_query($conn, "SELECT COUNT(*) FROM Lop") or die("Failed to query database");
	$row = mysqli_fetch_assoc($query);
	disconnect_db();
	return $row['COUNT(*)'];
}

function TaoLop($TenLop,$MaLop,$password)
{
	global $conn;
	connect_db();

	$TenLop = $conn -> real_escape_string($TenLop);
	$MaLop = $conn -> real_escape_string($MaLop);
	$password = $conn -> real_escape_string($password);

	
	$sql = "insert into Lop(MaLop, TenLop, MatKhau, TinhTrang) values('$MaLop', '$TenLop', '$password', '0')";

	$result = 0;
	if(mysqli_query($conn, $sql) === TRUE){
		$result = 1;
	}
	else {
		$result = 0;
	}

	disconnect_db();
	return $result;
}

function getLop(){
	global $conn;
	connect_db();

	$user = $_SESSION['UserID'];
	$query = mysqli_query($conn, "select * from Lop") or die("Failed to query database");
	$list = array();
	while($row = mysqli_fetch_assoc($query))
	{
		$list[] = $row;
	}
	disconnect_db();
	if(!$list) {
		return 0;
	}
	else {
		return $list;
	}
}

function updateLop($MaLop)
{
	global $conn;
	connect_db();

	$MaLop = $conn -> real_escape_string($MaLop);

	mysqli_query($conn, "update Lop set TinhTrang = 1 where MaLop = '$MaLop'") or die("Failed to query database");
	disconnect_db();
}

function NguoiDung(){
	global $conn;
	connect_db();

	$query = mysqli_query($conn, "select * from NguoiDung") or die("Failed to query database");
	$list = array();
	while($row = mysqli_fetch_assoc($query))
	{
		$list[] = $row;
	}

	disconnect_db();
	return $list;
}

function addGV($MaLop, $MaND)
{


	global $conn;
	connect_db();

	$MaLop = $conn -> real_escape_string($MaLop);
	$MaND = $conn -> real_escape_string($MaND);
	
	$sql = "insert into GiangDay(MaGV, MaLop) values('$MaND', '$MaLop')";

	$result = 0;
	if(mysqli_query($conn, $sql) === TRUE){
		$result = 1;
	}
	else {
		$result = 0;
	}

	disconnect_db();
	return $result;
}

function addHV($MaLop, $MaND)
{


	global $conn;
	connect_db();

	$MaLop = $conn -> real_escape_string($MaLop);
	$MaND = $conn -> real_escape_string($MaND);
	
	$sql = "insert into XepLop(MaLop, MaHV) values('$MaLop', '$MaND')";

	$result = 0;
	if(mysqli_query($conn, $sql) === TRUE){
		$result = 1;
	}
	else {
		$result = 0;
	}

	disconnect_db();
	return $result;
}
?>