function checkEmpty() {
    var malop = document.getElementById('malop').value;
    var matkhau = document.getElementById('matkhau').value;
    if(malop == "" || matkhau == ""){
        alert("Bạn chưa điền đầy đủ thông tin!");
    }
}

function myFunction() {
	var x = document.getElementById("dropdown");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}