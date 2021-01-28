<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chi tiết Sách</title>

	<link rel="stylesheet" href="./CuaHangCss/cuahang.css">
	<link rel="stylesheet" href="./CuaHangCss/trangchitiet.css">
	
	<link rel="stylesheet" href="../css/header_footer.css">
	
	<script src='../js/header_footer.js'></script>
	<script src='../js/NutTop.js'></script>

</head>
<body>

<?php include("../Header_Footer/header_footer.php"); ?>

<!--PHẦN CODE THÊM-->
    <div id="Lin_Kt" style="text-align: justify;" >
        <div class="div_navi"><span><a href="#">Trang chủ</a> >> <a href="./TrangCuaHang.php">Cửa hàng</a> >> Chi tiết sách</span></div>
        <h1>CHI TIẾT SÁCH</h1>

        <?php 
            $masach=0;
            if(isset($_GET["masach"]))
            {
                $masach=$_GET["masach"];
			
                $options = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    );
                
                $dbh = new PDO('mysql:host=localhost;dbname=twoeng', 'root', '',$options);

                $bangsach=$dbh->query("select * from sach where stt = ".$masach);

                echo "<table class='table-ch'>";
                foreach($bangsach as $sach)
                {
                    echo "<tr>
                                <td>
                                    <h3>".$sach[2]."<h3>
                                    <h4>".number_format($sach[4])." VNĐ</h4>
                                    <img class='img-sach-ct' src='".$sach[3]."' />
                                    <input type='button' class='button-datmua' style='font-size: 40px; box-shadow: 3px 3px gray;' value='Đặt mua' onclick='MuaSach()'/>
                                </td>
                                <td>
                                    <p style='text-align: left; font-weight: bold;'>Mô tả sách</p>
                                    </br>
                                    <p class='mota'>".$sach[5]."</p>
                                </td>
                          </tr>";
                }
                echo "</table>";
            }
		?>
	</div>
<!--PHẦN CODE THÊM-->

</body>
</html>