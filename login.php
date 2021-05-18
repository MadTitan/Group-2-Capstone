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
<style type="text/css">
  #main{
    background-color: #333;
    width: 600px;
    height: 300px;
    border-radius: 30px;

  }
  h1{
    color:white ;
    background-color: blue;
    border-top-right-radius: 30px;
    border-top-left-radius: 30px;
    size: 300px; 
    background-image: url('design/download.png');

  }
</style>
 <title>SPCC Inventory and Reservation</title>
 <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
<body style="background-image: url('assets/BG.png');background-repeat:no-repeat;background-position:center;background-size:;">
<center>
<form method="post" action="createsession.php" style="margin-top:10vh;">
  <input type="email"  name="u_email" placeholder="Email" maxlength="42" style="text-align:center;"  required=""><br>
  <input type="password" name="u_pass" placeholder="Password" maxlength="18" style="text-align:center;" required=""><br>
  
  <button name="login_btn">Login</button><br>
  
  <a href="register.php" style="color:black;">Register an Account</a> | <a href="index.php" style="color:black;">Home</a>
</form>
</center>
</body>