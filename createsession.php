<?php
session_start(); 
require_once "connection.php";

if(isset($_POST['login_btn'])){

	$email = $_POST['u_email'];
	$pass  = $_POST['u_pass'];

	$email_sql = "select * from tbl_user_account where uaccnt_email = '$email'";
	$email_result = $con->query($email_sql);

	if($email_result->num_rows > 0){

		$email_rec = $email_result->fetch_assoc();
		if($email_rec['uaccnt_pass'] === $pass){

			$update_sql = "update tbl_user_account set uacc_active='1' where uaccnt_id= '".$email_rec['uaccnt_id']."'";
			$con->query($update_sql);
		
			//start session
			$_SESSION['user_id'] = $email_rec['uaccnt_id'];
			$_SESSION['user_access'] = $email_rec['uacc_id'];



			if($email_rec['uacc_id'] == 1){
				header('Location:admin/index.php');
			}elseif($email_rec['uacc_id'] == 2){
				header('Location:design/index.php');
			}
			
		}else{
			echo "<script>alert('Username and Password did not match')</script>";
			header('refresh:0;login.php');
		}


	}else{
		echo "<script>alert('User does not exist')</script>";
		//header('refresh:0;login.php');
	}

}else{
	header('Location:login.php');
}

?>