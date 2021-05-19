<?php
session_start(); 
require_once "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>
 <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
<link rel="stylesheet" href="design/css/bootstrap.min.css">

<style>
footer {
  text-align: center;
  padding: 3px;
  background-color: #333333;
  color: white;
 }
</style>
</head>
 <body style="background-image: url('design/images/spcc1.jpg');background-repeat:no-repeat;background-position:center;background-size:;">
<div class="container col-8 offset-2 col-md-4 offset-md-4 mt-5">
  <div class="card ">
    <div class="card-header text-center text-info h4">Account Registration</div>
    <div class="card-body">
      <form method="post" action="registration.php">
  <input type="text" name="fname" placeholder="First Name" class="form-control mb-2">
  <input type="text" name="mname" placeholder="Middle Name" class="form-control mb-2">
  <input type="text" name="lname" placeholder="Last Name" class="form-control mb-2">
  <select name='gender' class="form-control mb-2">
    <option value='Male'>Male</option>
    <option value='Female'>Female</option>
  </select>
  <input type="email" name="u_email" placeholder="Email" class="form-control mb-2">
  <input type="text" name="u_pass" placeholder="Password" class="form-control mb-2">
  <input type="text" name="cu_pass" placeholder="Confirm password" class="form-control mb-2">
  <button name="register_btn" class="btn btn-primary btn-block">Register</button>
</form>


    </div>
     <div class="card-footer text-center">
      <a href="login.php">Login</a> | <a href="index.php" >Home</a>
    </div>
  </div>
</div>

   

