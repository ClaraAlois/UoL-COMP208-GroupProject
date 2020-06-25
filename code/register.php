<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mydb"); //准备SQL语句,查询用户名
	$username = isset($_POST['username']) ? $_POST['username'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";
	$email = isset($_POST['email']) ? $_POST['email'] : "";

	$errors=array('email'=>'','password'=>'','username'=>'');
	$sq=TRUE;

	if($_SERVER["REQUEST_METHOD"] == "POST") {

	if(empty($_POST['email'])){
   		$errors['email']='An email is required <br />';
   		$sq=FALSE;
   	}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
   			$errors['email']='email must be a valid email address';
   			$sq=FALSE;

   		}


   	 if(empty($_POST['username'])){
   		$errors['username']='A username is required <br />';
   		$sq=FALSE;
   	}if (preg_match("#[^0-9a-zA-Z]#i", $username)) {
   	 	    $errors['username']='user name can only be number or letter';
            $sq=FALSE;
       }else if (strlen($username)>20) {
   	 	    $errors['username']='user name should be no longer than 20 digits';
            $sq=FALSE;
       }


     if(empty($_POST['password'])){
   		$errors['password']='A password is required <br />';
   		$sq=FALSE;
   	 }if (strlen($password)>8) {
   	 	    $errors['password']='password should be no longer than 8 digits';
            $sq=FALSE;
       }if (strlen($password)<4) {
   	 	    $errors['password']='password should be no shorter than 4 digits';
            $sq=FALSE;
       }else if (preg_match("#[^0-9a-zA-Z]#i", $password)) {
   	 	    $errors['password']='password can only be number or letter';
            $sq=FALSE;
       }


   		if($sq){
   			$sql_select = "SELECT username FROM user WHERE userName = '$username'";
            $ret = mysqli_query($conn, $sql_select);
	        $sql_insert = "INSERT INTO user(userName, userPassword, userEmail, uAdmin_ID) VALUES ('$username', '$password', '$email', '000000')"; 

      if (mysqli_query($conn, $sql_insert)) {
		  $user=$username;
          $_SESSION['user']=$user;
	     header("Location: schoolpage.php");  
	} else {
   printf("Error: %s\n", mysqli_error($conn));
             exit();
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
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>
		
	</head>
 
	<link href="css/login.css" rel='stylesheet' type='text/css' />
	<link rel="icon" type="image/x-icon" href="images/icon.jpg">
	
	<body>
		<div class="register">	
				<!-- start-main -->
				<h2>Create Account</h2>
				<!-- post the register info to database by AJAX -->
				<form id="checkRegister" action="register.php" method="post">
						<div class="clear"> </div>
						<div class="lable-2">
						<h3 style="padding-bottom: 0px;">Username:</h3>
						<input type="text" class="text" name="username" value="Username " onfocus="this.value = '';" onblur="if (this.value == '') //{this.value = 'Username ';}">
						<div class="red-text"><?php echo $errors['username']; ?></div>

						<h3 style="padding-bottom: 0px;">Email:</h3>
						<input type="text" class="text" name="email" value="@student.liverpool.ac.uk " onfocus="this.value = '';" onblur="if (this.value == '') //{this.value = '@student.liverpool.ac.uk ';}">
						<div class="red-text"><?php echo $errors['email']; ?></div>
						<h3 style="padding-bottom: 0px;">Password:</h3>
						 <input type="password" class="text" name="password" value="Password " onfocus="this.value = '';" onblur="if (this.value == '') //{this.value = 'Password ';}">
						 <div class="red-text"><?php echo $errors['password']; ?></div>
						</div>
						<div class="clear"> </div>
						<div class="submit" style="margin-left: 0.3%; margin-right: -10px; padding-top: -20px;">
							<input type="submit" id="submit" value="Sign up">
						</div>
						<div class="clear"> </div>
						<h3>  <h3>
						<h3 style="margin-top: -10px; ">Already have an account? <span><a href="loginto.php" style="color:#3B5998;">Sign in </a> <span></h3>
				</form>
				<!-- end-main -->
		</div>
				<!-- start-copyright -->
   					<div class="copy-right" style="overflow: hidden; margin:3% 20%; font-size: 10px;">
						<p>Copyright @ 2020 Drops. All Rights Reserved.</p> 
					</div>
				<!-- end-copyright -->
	 
	</body>
</html>