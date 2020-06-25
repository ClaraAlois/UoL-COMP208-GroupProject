<?php 

$conn=mysqli_connect('8.209.73.211','root','123456','mydb');
	session_start();
	$password='';
	$password2='';
    $errors=array('password'=>'','password2'=>'', 'passwordNotSame'=>'');

   if($_SERVER["REQUEST_METHOD"] == "POST") {

	if(empty($_POST['password'])){
   		$errors['password']='An password is required <br />';
   	}else{
   		$password=$_POST['password'];	
   	}
	if(empty($_POST['password2'])){
   		$errors['password2']='An password is required <br />';
   	}else{
   		$password2=$_POST['password2'];	
   	}
	if ($password2!=$password){
		$errors['passwordNotSame']='Passwords are not the same. <br />';
		echo "Passwords are not the same.";
	}else if ($password2!='' && $password!=''){
		$username = $_SESSION['user'];
		$result=mysqli_query($conn,"UPDATE user SET userPassword='$password2' WHERE userName='$username' ");
		
		if($result){
			header("Location: homepage.php");  
		}
		else{
			echo "Failed to change the password!";
		}
	}
	
   }

 ?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- JS: load the page without delay -->
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

</head>

<link href="css/login.css" rel='stylesheet' type='text/css' />
<link rel="icon" type="image/x-icon" href="images/icon.jpg">

<body>
	<div class="register">
		<!-- start-main -->

		<form id="checkRegister" action="resetpw.php" method="post">
			<div class="clear"> </div>
			<div class="lable-2">
				<h3 style="padding-bottom: 5px; font-size: 30px;">Reset password of your account</h3>
				<h3 style="padding-bottom: 5px; font-size: 18px;">Enter new password for your account(at most 8-digit password)</h3>
				<input type="password" class="text" name="password" value="Password " onfocus="this.value = '';"
					onblur="if (this.value == '') {this.value = 'Password ';}">
				<h3 style="padding-bottom: 5px; font-size: 18px;">Enter your password again</h3>
				<input type="password" class="text" name="password2" value="Password " onfocus="this.value = '';"
					onblur="if (this.value == '') {this.value = 'Password ';}">
				<div class="clear"> </div>
				<div class="submit" style=" margin-left: 0.3%; margin-right:-10px;padding-top: 20px;">
					<input type="submit" id="submit" value="Reset Password">
				</div>
				<div class="clear"> </div>
				<h3 style="margin-top:30px;">Already have an account? <span><a href="loginto.php"
							style="color:#F2CA68;">Sign in </a> <span></h3>
		</form>
		<!-- end-main -->
	</div>
	<!-- start-copyright -->
	<div class="copy-right" style="overflow: hidden; margin:3% 20%; font-size: 10px;">
		<p>Copyright @ 2020 Drops. All Rights Reserved.</p>
	</div>
	<!-- end-copyrigh -->

</body>

</html>