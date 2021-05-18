<?php
$con = new mysqli('localhost','root',"",'group2capstone');

if($con->connect_error){
	die("connection error: ".$con->connect_error);
}

?>
