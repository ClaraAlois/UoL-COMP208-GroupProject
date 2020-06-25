<?php 

$conn=mysqli_connect('8.209.73.211','root','123456','mydb');
	session_start();

	$email='';
    $errors=array('email'=>'');

   if($_SERVER["REQUEST_METHOD"] == "POST") {

       if(empty($_POST['email'])){
   		$errors['eamil']='An email is required <br />';
   	}else{
   		$email=$_POST['email'];
   		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
   			$errors['email']='email must be a valid email address';
   		}
   	}

      $email = mysqli_real_escape_string($conn,$_POST['email']);
      //$password = mysqli_real_escape_string($conn,$_POST['password']); 
      
   
      $result=mysqli_query($conn,"select * from user where userEmail='$email' ");
      if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}
     
      $row = mysqli_fetch_array($result);
      echo $row['userName'];
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($row){
      	 $user=$row['userName'];
      	 //$_SESSION['logined']=1;   //�ж��Ƿ��Ѿ���¼�����ݡ�
         $_SESSION['user']=$user;
	     header("Location: resetpw.php");  
	    }
	    else{
			echo "Failed to give the email address!";
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

		<!-- post the register info to database by AJAX -->
		<form id="checkRegister" action="forgetpw.php" method="post">
			<div class="clear"> </div>
			<div class="lable-2">
				<h3 style="padding-bottom: 5px; font-size: 30px;">Password assistance</h3>
				<h3 style="padding-bottom: 5px; font-size: 18px;">Enter your email address associated with your Drops
					account.</h3>
				<input type="text" class="text" name="email" value="@student.liverpool.ac.uk" onfocus="this.value = '';"
					onblur="if (this.value == '') {this.value = '@student.liverpool.ac.uk';}">
			</div>
			<div class="clear"> </div>
			<div class="submit" style=" margin-left: 0.3%; margin-right:-10px;">
				<input type="submit" id="submit" value="Continue" onclick='location.href=("resetpw.php")'>
			</div>
			<div class="clear"> </div>
			<h3>Already have an account? <span><a href="loginto.php" style="color:#F2CA68;">Sign in </a> <span></h3>
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