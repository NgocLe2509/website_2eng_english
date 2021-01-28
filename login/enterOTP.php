<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nhập OTP</title>
<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php
    $usr = $_GET['userid'];
    include("../include/config.php");
    if($usr == null){
        header("Location:resetPassword.php");
    }
    $result = chkCodeNullorFFFF($usr);
    if($result == true){
        header("Location:resetPassword.php");
    }
	
	if(isset($_POST["Verify"])){
        // Get values username, OTP
        $Code = $_POST['enterOTP'];
        if($Code == "FFFF"){ ?>
                <script>
                    alert("Nhập OTP sai! Nhập lại.");
                </script>
        <?php }
        else{
            $chkCode = chkCode($usr, $Code);
                if($chkCode == true){
                    header("Location:enterNewPass.php?userid=".$usr);
                }
                else { ?>
                    <script>
                        alert("Bạn nhập OTP chưa đúng, nhập lại!");
                    </script>
                <?php }
            }
        }

?>
<div id="Web_1920__1">
	<svg class="Rectangle_1">
		<rect id="Rectangle_1" rx="113" ry="113" x="0" y="0" width="606" height="544">
		</rect>
	</svg>
	<img id="Image_1" src="img/imgResetPassword.PNG">
	<div id="enterOTP">
		<span>Enter OTP</span>
	</div>
	<div id="Thats_ok_Just_enter_the_User_I">
		<span>We have a emailed OTP<br/>to your registered email account (********@gm.uit.edu.vn)<br/>Please check and enter OTP below to reset your password</span>
	</div>
	<div id="Your_UserID_">
		<span>Enter OTP </span>
	</div>
	<div id="form">
			<form action="" method = "POST">
				</br><input type="text" class="Rectangle_2" name="enterOTP" value="">
				<br>
				<br><input type="submit" class="Path_1" name="Verify" value="Verify"> </br> 
	        </form>
    </div>
    <svg class="Icon_awesome-user-lock" viewBox="4.499 1.928 28.921 30.849">
		<path id="Icon_awesome-user-lock" d="M 14.13890171051025 17.3523006439209 L 4.498734474182129 17.3523006439209 L 4.498734474182129 13.49623394012451 L 14.13890171051025 13.49623394012451 L 14.13890171051025 9.640167236328125 L 19.92300224304199 15.42426776885986 L 14.13890171051025 21.2083683013916 L 14.13890171051025 17.3523006439209 Z M 33.41923522949219 1.928032875061035 L 33.41923522949219 26.99246978759766 L 21.85103416442871 32.77656936645508 L 21.85103416442871 26.99246788024902 L 10.28283309936523 26.99246788024902 L 10.28283309936523 19.28033447265625 L 12.21086692810059 19.28033447265625 L 12.21086692810059 25.06443405151367 L 21.85103416442871 25.06443405151367 L 21.85103416442871 7.712133884429932 L 29.56316757202148 3.856066942214966 L 12.21086692810059 3.856066942214966 L 12.21086692810059 11.56820106506348 L 10.28283309936523 11.56820106506348 L 10.28283309936523 1.928033471107483 L 33.41923522949219 1.928032875061035 Z">
		</path>
	</svg>
</div>
</body>
</html>