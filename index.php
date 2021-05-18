<?php 
session_start();
if(isset($_SESSION['user_access'])){
	header('Location:login.php');
}else{
	header('Location:design/index.php');
}

?>