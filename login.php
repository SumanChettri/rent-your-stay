<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["sub"])){
  $username = $_POST["ema"];
  $password = $_POST["pas"];
  $result = mysqli_query($conn, "SELECT * FROM user_login WHERE Email = '$username' OR Password = '$password'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.html");
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

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<style>
    body{
   background-image: linear-gradient(rgb(241, 59, 59),rgb(79, 227, 227), rgb(134, 205, 134));
    }
</style>
</head>
<body>
    
    <div class="wrapper">
        <header>Login Form</header>
        <form method="post">
            <div class="field email">
                <div class="input-area">
                    <input type="text" placeholder="Email Address" id="email" name="ema">
                    <i class="icon fas fa-envelope"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Email can't be blank</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Password" id="password" name="pas">
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password can't be blank</div>
            </div>
            <div class="pass-txt"><a href="#">Forgot password?</a></div>
            <input type="submit" value="Login" class="log" id="sub" name="sub">
        </form>
        <div class="sign-txt">Not yet member? <a href="regis.PHP">Signup now</a></div>
    </div>
</form>
    <script src="script.js"></script>
</body>
</html>
