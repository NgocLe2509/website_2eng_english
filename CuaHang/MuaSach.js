function limitLengStart ()
{
    var a;
    a = document.getElementById("SoLuong");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function limitLengStartUsername ()
{
    var a;
    a = document.getElementById("username");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function limitLengStartSDT ()
{
    var a;
    a = document.getElementById("sdt");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function limitLengStartEmail ()
{
    var a;
    a = document.getElementById("email");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function limitLengStartDiaChi ()
{
    var a;
    a = document.getElementById("diachi");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function validateNumber(evt) {
    var e = evt || window.event;
    var key = e.keyCode || e.which;

    if (!e.shiftKey && !e.altKey && !e.ctrlKey &&
    // numbers   
    key >= 48 && key <= 57 ||
    // Numeric keypad
    key >= 96 && key <= 105 ||
    // Backspace and Tab and Enter
    key == 8 || key == 9 || key == 13 ||
    // Home and End
    key == 35 || key == 36 ||
    // left and right arrows
    key == 37 || key == 39 ||
    // Del and Ins
    key == 46 || key == 45) {
        // input is VALID
    }
    else {
        // input is INVALID
        e.returnValue = false;
        if (e.preventDefault) e.preventDefault();
    }
}

function checkThanhToan(){
    var index = 0;
    var username = document.getElementById('username').value;
    var email = document.getElementById('email');
    var diachi = document.getElementById('diachi').value;
    var vnf_regex = /^((09[1-4|6-9]|03[2-9]|07[0|6-9]|08[1-5|8|9]|05[6|8|9])+([0-9]{7}))$/; //sdt VN bắt đầu bằng các đầu số trên và có 10 chữ số
    var mobile = document.getElementById('sdt').value;


    if (username == "" || username == null){
        alert("Bạn Chưa Nhập Tên");
        index = 1;
    }
    else if (mobile == '' || mobile == null){
        alert("Bạn Chưa Nhập Số Điện Thoại");
        index = 1;
    }
    else if(mobile !=='' && vnf_regex.test(mobile) == false){
        alert("Số Điện Thoại Không Hợp Lệ");
        index = 1;
    }
    else if(email.value == "" || email.value == null){
        alert("Bạn Chưa Nhập Email");
        index = 1;
    }
    else if (!email.value || !/^[\w\.%\+\-]+@[a-z0-9.-]+\.(com|gov|in|jo|org|vn)$/i.test(email.value)){
        alert("Email Không Hợp Lệ");
        index = 1;
    }
    else if (diachi == "" || diachi == null){
        alert("Bạn Chưa Nhập Địa Chỉ");
        index = 1;
    }

    document.getElementById('hidden').value = index;
}
