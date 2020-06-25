<?php 

$conn=mysqli_connect('8.209.73.211','root','123456','mydb');
	session_start();

	$email=$password='';
    $errors=array('email'=>'','password'=>'');

   if($_SERVER["REQUEST_METHOD"] == "POST") {

       if(empty($_POST['email'])){
   		$errors['eamil']='An email is required <br />';
   	}else{
   		$email=$_POST['email'];
   		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
   			$errors['email']='email must be a valid email address';
   		}
   	}
 
    if(empty($_POST['password'])){
   		$errors['password']='An password is required <br />';
   	}else{
   		$email=$_POST['password'];
   	}

      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
   
      $result=mysqli_query($conn,"select * from user where userEmail='$email' and userPassword ='$password'");
      if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
     
      $row = mysqli_fetch_array($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($row){
      	 $user=$row['userName'];
      	 $_SESSION['logined']=1;   //判断是否已经登录的依据。
         $_SESSION['user']=$user;
	     header("Location: homepage.php");  
	    }
	    else{
		echo "Failed to login!";
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
	<link href="css/login.css" rel='stylesheet' type='text/css' />
	<link rel="icon" type="image/x-icon" href="images/icon.jpg">

</head>



<body>
	<div class="register">
		<!-- start-main -->
		<h2>Sign in to Drops</h2>
		<form action="loginto.php" method="post">
			<div class="clear"> </div>
			<div class="lable-2">
				<h3 style="padding-bottom: 0px;">Account:</h3>
				<input type="text" name="email" class="text" id="email">
				<div class="red-text"><?php echo $errors['email']; ?></div>
				<h3 style="padding-bottom: 0px;">Password:</h3>
				<input type="password" name="password" class="text" id="password">
				<div class="red-text"><?php echo $errors['password']; ?></div>
				<div class="clear"> </div>
			</div>
			<br />
			<div class="clear"> </div>
			<div class="submit" style="margin-left:0.3%; margin-right: -10px;">
				<input type="submit" name="submit" value="submit">
			</div>
			<div class="clear"> </div>
			<h3 style="margin-top: 10px; ">New to Drops?
				<span><a href="register.php" style="color:#F2CA68; margin-left: 2%;"> Create account </a> </span>
				<span><a href="forgetpw.php" style="margin-left: 25%;"> Forget password? </a> </span>
			</h3>
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