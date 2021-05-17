<?php
session_start(); 
require_once "connection.php";
?>
<br><br>
<center>
<form method="post" action="registration.php">
	<input type="text" name="fname" placeholder="First Name"><br>
	<input type="text" name="mname" placeholder="Middle Name"><br>
	<input type="text" name="lname" placeholder="Last Name"><br>
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
