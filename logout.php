<?php 

session_start(); 
require_once "connection.php";

if(isset($_GET['id'])){
		$updt_sql = "update tbl_user_account set uacc_active='0' where uaccnt_id= '".$_GET['id']."'";
		$con->query($updt_sql);
		header('Location:admin/index.php');

}else{
	session_destroy();
}

header('Location:login.php');
?>