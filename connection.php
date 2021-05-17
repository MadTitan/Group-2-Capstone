<?php
$con = new mysqli('localhost','root','samaria12a','group2capstone');

if($con->connect_error){
	die("connection error: ".$con->connect_error);
}

?>
