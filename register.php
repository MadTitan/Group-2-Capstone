<?php
session_start(); 
require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Page</title>
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
  background-color: #bb4e53;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="login.php">Home</a>
  <a class="active" href="#regis.">Register</a>

</div>
</div>

</body>
</html>

 <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
<center>
  <title>Admin Page</title>
   
<form method="post" action="registration.php">
  <input type="text" name="fname" placeholder="First Name"><br>
  <input type="text" name="mname" placeholder="Middle Name"><br>
  <input type="text" name="lname" placeholder="Last Name"><br>
  <body style="background-image: url('design/images/spcc1.jpg');background-repeat:no-repeat;background-position:center;background-size:;">
  <select name='gender'>
    <option value='Male'>Male</option>
    <option value='Female'>Female</option>
  </select><br>
  <input type="email" name="u_email" placeholder="Email"><br>
  <input type="text" name="u_pass" placeholder="Password"><br>
  <input type="text" name="cu_pass" placeholder="Confirm password"><br>
  <button name="register_btn">Submit</button><br><br>
  <a href="login.php" style="color:black;">Already have an Account?</a>
</form>
</center>
