<?php
session_start(); 

if(isset($_SESSION['user_id']) || isset($_SESSION['user_access'])){
  if($_SESSION['user_access'] == 1){
    header('Location:admin/index.php');
  }else{
    header('Location:design/index.php');
  }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
 <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
<body style="background-image: url('design/images/spcc1.jpg');background-repeat:no-repeat;background-position:center;background-size:;">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #9eccdc;
  color: white;
}
footer {
  text-align: center;
  padding: 3px;
  background-color: #333333;
  color: white;
 }
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="register.php">Register</a>

</div>
</div>

</body>
<center>
<form method="post" action="createsession.php" style="margin-top:10vh;">
  <input type="email"  name="u_email" placeholder="Email" maxlength="42" style="text-align:center;"  required=""><br>
  <input type="password" name="u_pass" placeholder="Password" maxlength="18" style="text-align:center;" required=""><br>
  
  <button name="login_btn">Login</button><br>
  
  <a href="register.php" style="color:black;">Register an Account</a> | <a href="index.php" style="color:black;">Home</a>
</form>
</center>
</body>

</html>