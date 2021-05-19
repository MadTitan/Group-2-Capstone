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
   <link rel="stylesheet" href="design/css/bootstrap.min.css">
<body style="background-image: url('design/images/spcc1.jpg');background-repeat:no-repeat;background-position:center;background-size:;">
<style>

footer {
  text-align: center;
  padding: 3px;
  background-color: #333333;
  color: white;
 }
</style>
</head>

<div class="container col-8 offset-2 col-md-4 offset-md-4 mt-5">
  <div class="card ">
    <div class="card-header text-center text-info h4">Welcome!</div>
    <div class="card-body">
      <form method="post" action="createsession.php" >
  <input type="email"  name="u_email" placeholder="Email" maxlength="42"   required="" class="form-control mb-2">
  <input type="password" name="u_pass" placeholder="Password" maxlength="18"  required="" class="form-control mb-2">
  
  <button name="login_btn" class="btn btn-primary btn-block">Login</button>
  
  
</form>

    </div>
    <div class="card-footer text-center">
      <a href="register.php">Register</a> | <a href="index.php" >Home</a>
    </div>
  </div> 
</div>

</body>

</html>