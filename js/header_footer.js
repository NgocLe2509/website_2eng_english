//khai báo biến slideIndex đại diện cho slide hiện tại
var slideIndex;

// KHai bào hàm hiển thị slide
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex].style.display = "block";  
    dots[slideIndex].className += " active";
    //chuyển đến slide tiếp theo
    slideIndex++;
    //nếu đang ở slide cuối cùng thì chuyển về slide đầu
    if (slideIndex > slides.length - 1) {
       slideIndex = 0;
    }    
    //tự động chuyển đổi slide sau 5s
    setTimeout(showSlides, 5000);
}

function currentSlide(n) {
   showSlides(slideIndex = n);
}

//Cho Khóa học
//khai báo biến slideIndex đại diện cho slide hiện tại
var slideIndex2;

// KHai bào hàm hiển thị slide
function showSlides2() {
    var i;
    var slides2 = document.getElementsByClassName("mySlides2");
    var dots2 = document.getElementsByClassName("dot2");
    for (i = 0; i < slides2.length; i++) {
        slides2[i].style.display = "none";  
    }
    for (i = 0; i < dots2.length; i++) {
        dots2[i].className = dots2[i].className.replace(" active", "");
    }

    slides2[slideIndex2].style.display = "block";  
    dots2[slideIndex2].className += " active";
    //chuyển đến slide tiếp theo
    slideIndex2++;
    //nếu đang ở slide cuối cùng thì chuyển về slide đầu
    if (slideIndex2 > slides2.length - 1) {
       slideIndex2 = 0;
    }    
    //tự động chuyển đổi slide sau 5s
    setTimeout(showSlides2, 5000);
}

function currentSlide2(n) {
   showSlides2(slideIndex2 = n);
}

function limitLengStartUsername ()
{
    var a;
    a = document.getElementById("HoTen");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function limitLengStartSDT ()
{
    var a;
    a = document.getElementById("SDT");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function limitLengStartEmail ()
{
    var a;
    a = document.getElementById("Email");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function sendTuVan ()
{
    var index = 0;
    var HoTen = document.getElementById('HoTen').value;
    var email = document.getElementById('Email');
    var mobile = document.getElementById('SDT').value;

    var vnf_regex = /^((09[1-4|6-9]|03[2-9]|07[0|6-9]|08[1-5|8|9]|05[6|8|9])+([0-9]{7}))$/; //sdt VN bắt đầu bằng các đầu số trên và có 10 chữ số

    if (HoTen == "" || HoTen == null){
        alert("Bạn Chưa Nhập Họ Tên");
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
    
    
    document.getElementById('hidden').value = index;
}


