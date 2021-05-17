<?php
$con = new mysqli('localhost','root',"",'group-2-capstone');

if($con->connect_error){
	die("connection error: ".$con->connect_error);
}

?>
