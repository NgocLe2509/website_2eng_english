<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lịch Sử Test</title>
	<link rel="stylesheet" href="../css/LichSuTest.css">
	<script language="javascript" src="../js/login_class.js"></script>

	<link rel="stylesheet" href="../css/header_footer.css">

	<script src='../js/header_footer.js'></script>
	<script src='../js/NutTop.js'></script>	

</head>
<body>

<?php include("../Header_Footer/header_footer.php");


    $lichsutest = getLichSuTest();

    if(isset($_POST['submit'])){
		$ten = $_POST['tenbaitest'];
		?>
			<script>alert(<?php echo json_encode($ten); ?>);</script>
		<?php
        if($ten == "Test kiểm tra kỹ năng Reading - TOEIC"){
            header("Location: ../TestOnline/kiemtratrinhdo_3.php");
        }
        else if($ten == "Test kiểm tra kỹ năng Listening - TOEIC"){
            header("Location: ../TestOnline/kiemtratrinhdo_2.php");
		}
		else if($ten == "Kiểm tra kĩ năng Listening - IELTS"){
            header("Location: ../TestOnline/kiemtralistening_ielts.php");
		}
		else if($ten == "Kiểm tra kĩ năng Reading - IELTS"){
            header("Location: ../TestOnline/kiemtrareading_ielts.php");
		}
		else if($ten == "Kiểm tra kĩ năng tiếng Anh tổng quát"){
            header("Location: ../TestOnline/kiemtratienganhtongqua.php");
        }
        else {
            header("Location: ../TestOnline/kiemtratrinhdo.php");
        }
    }
    
?>


    <div id="TOEIC210_-_TOEIC_2_K_Nng">
		<span>Lịch Sử làm Bài Test</span>
	</div>
    <table id="Bi">
		<tr>
			<th>STT</th>
			<th>Tên Bài Test</th>
            <th>Số Câu Đúng</th>
            <th>Thời Gian Test</th>
            <th>Làm Lại</th>
  		</tr>
	</table>

    <script>
        var lichsutest = <?php echo json_encode($lichsutest); ?>;
        if (lichsutest == 0){
            var table = document.getElementById("Bi");
            var row = table.insertRow();
            var cell0 = row.insertCell(0);
            cell0.innerHTML = "Bạn Chưa Có Lịch Sử Test";
            cell0.colSpan = 5;
            cell0.style.border = "1px solid black";
            cell0.style.color = "red";
            cell0.style.fontSize = "18px";
            cell0.style.fontStyle = "italic";
        }
        else {
            for(var i = 0; i < lichsutest.length; i++){
                var table = document.getElementById("Bi");
                var row = table.insertRow();
                var cell0 = row.insertCell(0);
                var cell1 = row.insertCell(1);
                var cell2 = row.insertCell(2);
                var cell3 = row.insertCell(3);
                var cell4 = row.insertCell(4);

                var j = i + 1;
                cell0.innerHTML = j;
                cell0.style.border = "1px solid black";
                //cell0.style.width = "55px";

                cell1.innerHTML = lichsutest[i].TenBaiTest,
                cell1.style.border = "1px solid black";
                cell1.style.textAlign = "left";
                cell1.style.paddingLeft = "10px";

                cell2.innerHTML = lichsutest[i].SoCauDung + "/" + lichsutest[i].TongSoCau;
                cell2.style.border = "1px solid black";
                //cell2.style.width = "160px";

                cell3.innerHTML = lichsutest[i].ThoiGianTest;
                cell3.style.border = "1px solid black";
               // cell3.style.width = "340px";

                var form = "<form method='post'><input type='submit' name='submit' class='btnLamlai' value='Làm Lại'><input type='hidden' name='tenbaitest' value='" + lichsutest[i].TenBaiTest + "'></form>";
                cell4.innerHTML = form;
                cell4.style.border = "1px solid black";
                //cell4.style.width = "110px";
                cell4.style.padding = "7px";
            }
        }
        
    </script>
    
</div>
</body>
</html>