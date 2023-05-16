<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){

  $username = $_POST["username"];
  $email = $_POST["email"];
 $password = md5( $_POST["pas"]);
 // $name = $_POST["name"];//
  $confirmpassword = md5($_POST["pass"]);
  $phone = $_POST["phone"];
  $gender = $_POST["gender"];
  $duplicate = mysqli_query($conn, "SELECT * FROM user_login WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO user_login VALUES('$username','$email','$password','$phone', '$gender')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
	
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="module" src=""></script>
</head>
<body>

<div class="wrapper">
	<div class="r_form_wrap">
		
		<div class="title">
			<p style="color:red";>Registration Form</p>
		</div>

		<div class="r_form">
			<form method="post" >
				<div class="input_wrap">
					<label for="yourname">UserName</label>
					<div class="input_item">
						<span class="icon">
							<ion-icon name="person-sharp"></ion-icon>
						</span>
						<input type="text" name="username" class="input" id="yourname">
					</div>
				</div>
				<div class="input_wrap">
					<label for="emailaddress">Email Address</label>
					<div class="input_item">
						<span class="icon">
							<ion-icon name="mail-sharp"></ion-icon>
						</span>
						<input type="text" name="email" class="input" id="emailaddress">
					</div>
				</div>
				<div class="input_wrap">
					<label for="password">Password</label>
					<div class="input_item">
						<span class="icon">
							<ion-icon name="key-sharp"></ion-icon>
						</span>
						<input type="password" name="pas" class="input" id="password">
					</div>
				</div>
				<div class="input_wrap">
					<label for="confirmpassword">Confirm Password</label>
					<div class="input_item">
						<span class="icon">
							<ion-icon name="key-sharp"></ion-icon>
						</span>
						<input type="password" name="pass" class="input" id="confirmpassword">
					</div>
				</div>
				<div class="input_wrap">
					<label for="phone">Phone</label>
					<div class="input_item">
						<span class="icon">
							<ion-icon name="call-sharp"></ion-icon>
						</span>
						<input type="number" name="phone" class="input" id="phone">
					</div>
				</div>
				<div class="input_wrap">
					<label>Gender</label>
					<div class="input_radio">
						<div class="input_radio_item">
							<input type="radio" id="male" name="gender" class="radio" value="male">
							<label for="male" class="radio_mark">
								<ion-icon class="i" name="male-sharp"></ion-icon>
							Male</label>
						</div>
						<div class="input_radio_item">
							<input type="radio" id="female" name="gender" class="radio" value="female">
							<label for="female" class="radio_mark">
								<ion-icon class="i" name="female-sharp"></ion-icon>
								Female</label>
						</div>
						<div class="input_radio_item">
							<input type="radio" id="others" name="gender" class="radio" value="others">
							<label for="others" class="radio_mark">
								<ion-icon class="i" name="male-female-sharp"></ion-icon>
								Others</label>
						</div>
					</div>
				</div>

				<button name="submit"><a href="index.html">Register Now</button></a>
			</form>

            <div class="href">Already have an account?<a href="login.php">LOGIN</a></div>
		</div>

	</div>
	
</div>

</body>
</html>


