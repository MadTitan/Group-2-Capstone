<?php
ini_set('max_execution_time',0);
define("host","localhost");
define("user","root");
define("pass","");
define("db","");
$conn= new mysqli(host,user,pass,db);

if($conn->connect_error){
	die("Connection error: ".$conn->connect_error);
}

?>