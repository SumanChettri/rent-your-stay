<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

if(isset($_POST["sub"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM admin_login WHERE username= '$username' OR password = '$password'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: admin_index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		* {
	box-sizing: border-box;
}

body {
	background-color: #f2f2f2;
}

.container {
	background-color: #fff;
	max-width: 500px;
	margin: 0 auto;
	padding: 40px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	border-radius: 5px;
	margin-top: 100px;
}

h1 {
	text-align: center;
	margin-bottom: 20px;
	color: #555;
}

form {
	display: flex;
	flex-direction: column;
}

label {
	font-size: 1.2rem;
	margin-bottom: 10px;
	color: #555;
}

input[type="text"],
input[type="password"] {
	padding: 10px;
	border-radius: 5px;
	border: none;
	background-color: #f2f2f2;
	margin-bottom: 20px;
	font-size: 1.2rem;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	border: none;
	padding: 10px;
	border-radius: 5px;
	font-size: 1.2rem;
	cursor: pointer;
	transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
	background-color: #3e8e41;
}

		</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    
	<div class="container">
		<h1>Admin Login</h1>
		<form method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			<input type="submit" value="Login" name="sub">
		</form>
	</div>
</body>
</html>
