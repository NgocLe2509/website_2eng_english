<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nhập Password Mới</title>
<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php
		$usr = $_GET['userid'];
		if($usr == null){
			header("Location:resetPassword.php");
		}
		include("../include/config.php");
		$result = chkFFFF($usr);
		if($result == false){
			header("Location:resetPassword.php"); 
		}
		if(isset($_POST["changePass"])){
			// Get values username, OTP
        
				// Get values username, OTP
				$newPass = $_POST['newPass'];
				$RenewPass = $_POST['reNewPass'];

				if($newPass == "" || $RenewPass == ""){ ?>
						<script>
							alert("Hãy nhập đầy đủ thông tin bên dưới để thực hiện thay đổi mật khẩu!");
						</script>
				<?php }
				else if($newPass != $RenewPass){ ?>
						<script>
							alert("Nhập lại mật khẩu không trùng khớp!");
						</script>
				<?php }
				else {
					$hash = password_hash($newPass, PASSWORD_BCRYPT, array("cost" => 10));
					changePassword($usr, $hash); ?>
						<script>
							alert("Thay đổi mật khẩu thành công");
						</script>
					<?php header("Location:../TrangChu/home.php"); 
				}
			}

	?>
<div id="Web_1920__1">
	<svg class="Rectangle_1">
		<rect id="Rectangle_1" rx="113" ry="113" x="0" y="0" width="606" height="544">
		</rect>
	</svg>
	<img id="Image_1" src="../img/imgResetPassword.PNG">
	<div id="Change_Pasword">
		<span>Change Pasword</span>
	</div>
	<div id="Enter_your_new_password_for_yo">
		<span>Enter your new password for your account...</span>
	</div>
	<div id="New_Password">
		<span>New Password</span>
	</div>
	<svg class="Icon_metro-enter" viewBox="4.499 1.928 28.921 30.849">
		<path id="Icon_metro-enter" d="M 14.13890171051025 17.3523006439209 L 4.498734474182129 17.3523006439209 L 4.498734474182129 13.49623394012451 L 14.13890171051025 13.49623394012451 L 14.13890171051025 9.640167236328125 L 19.92300224304199 15.42426776885986 L 14.13890171051025 21.2083683013916 L 14.13890171051025 17.3523006439209 Z M 33.41923522949219 1.928032875061035 L 33.41923522949219 26.99246978759766 L 21.85103416442871 32.77656936645508 L 21.85103416442871 26.99246788024902 L 10.28283309936523 26.99246788024902 L 10.28283309936523 19.28033447265625 L 12.21086692810059 19.28033447265625 L 12.21086692810059 25.06443405151367 L 21.85103416442871 25.06443405151367 L 21.85103416442871 7.712133884429932 L 29.56316757202148 3.856066942214966 L 12.21086692810059 3.856066942214966 L 12.21086692810059 11.56820106506348 L 10.28283309936523 11.56820106506348 L 10.28283309936523 1.928033471107483 L 33.41923522949219 1.928032875061035 Z">
		</path>
	</svg>
	<svg class="Icon_metro-enter_n" viewBox="4.499 1.928 28.921 30.849">
		<path id="Icon_metro-enter_n" d="M 14.13890171051025 17.3523006439209 L 4.498734474182129 17.3523006439209 L 4.498734474182129 13.49623394012451 L 14.13890171051025 13.49623394012451 L 14.13890171051025 9.640167236328125 L 19.92300224304199 15.42426776885986 L 14.13890171051025 21.2083683013916 L 14.13890171051025 17.3523006439209 Z M 33.41923522949219 1.928032875061035 L 33.41923522949219 26.99246978759766 L 21.85103416442871 32.77656936645508 L 21.85103416442871 26.99246788024902 L 10.28283309936523 26.99246788024902 L 10.28283309936523 19.28033447265625 L 12.21086692810059 19.28033447265625 L 12.21086692810059 25.06443405151367 L 21.85103416442871 25.06443405151367 L 21.85103416442871 7.712133884429932 L 29.56316757202148 3.856066942214966 L 12.21086692810059 3.856066942214966 L 12.21086692810059 11.56820106506348 L 10.28283309936523 11.56820106506348 L 10.28283309936523 1.928033471107483 L 33.41923522949219 1.928032875061035 Z">
		</path>
	</svg>
	<div id="Confirm_New_Password">
		<span>Confirm New Password</span>
	</div>
	<div id="form">
			<form action="" method = "POST">
				</br><input type="password" class="R2" name="newPass" value="">
				<br>
				</br><input type="password" class="Rectangle_3" name="reNewPass" value="">
				<br>
				<br><input type="submit" class="Rectangle_4" name="changePass" value="Change Password" </br> 
			</form>
</div>
</body>
</html>