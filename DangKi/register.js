function limitLengStart ()
{
    var a;
    a = document.getElementById("phone");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function limitLengStart1 ()
{
    var a;
    a = document.getElementById("cmnd");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function limitLengStart2 ()
{
    var a;
    a = document.getElementById("email");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function limitLengStart3 ()
{
    var a;
    a = document.getElementById("Mail");
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

function onClickRegister() {

    //Kiểm tra format sdt. báo nếu sai
    var vnf_regex = /^((09[1-4|6-9]|03[2-9]|07[0|6-9]|08[1-5|8|9]|05[6|8|9])+([0-9]{7}))$/; //sdt VN bắt đầu bằng các đầu số trên và có 10 chữ số
    var mobile = phone.value;
    if(mobile !==''){
        if (vnf_regex.test(mobile) == false){
            document.getElementById("phone").value = "Số điện thoại không hợp lệ";
        }
    }

    //Kiểm tra format email
    var email = document.getElementById('email');

    //validate
    if (!email.value || !/^[\w\.%\+\-]+@[a-z0-9.-]+\.(com|gov|in|jo|org|vn)$/i.test(email.value))
        document.getElementById("email").value = "Email không hợp lệ";

}

function sendProblem() {

    //Kiểm tra format sdt. báo nếu sai
    var vnf_regex = /^((09[1-4|6-9]|03[2-9]|07[0|6-9]|08[1-5|8|9]|05[6|8|9])+([0-9]{7}))$/; //sdt VN bắt đầu bằng các đầu số trên và có 10 chữ số
    var mobile = SDT.value;
    if(mobile !==''){
        if (vnf_regex.test(mobile) == false){
            document.getElementById("SDT").value = "Số điện thoại không hợp lệ";
        }
    }

    //Kiểm tra format email
    var email = document.getElementById('Mail');

    //validate
    if (!email.value || !/^[\w\.%\+\-]+@[a-z0-9.-]+\.(com|gov|in|jo|org|vn)$/i.test(email.value))
        document.getElementById("Mail").value = "Email không hợp lệ";

}