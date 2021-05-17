<?php
session_start(); 
require_once "connection.php";

if(isset($_POST['register_btn'])){
	$pass =  $_POST['u_pass'];
	$cpass =  $_POST['cu_pass'];
	if($pass === $cpass){
		//continue on saving data
		//mag save sa tbl_user_profile
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];

		$profile_sql ="INSERT INTO tbl_user_profile (uprof_fname,uprof_mname,uprof_lname,uprof_gender,uprof_deleted,uprof_active) VALUES ('$fname','$mname','$lname','$gender','0','0')";
		if($con->query($profile_sql)){
			//mag save sa tbl_user_account
			$prof_id = $con->insert_id;
			$email =  $_POST['u_email'];
			$account_sql = "INSERT INTO tbl_user_account (uprof_id,uaccnt_email,uaccnt_pass,uacc_id,uacc_deleted,uacc_active) VALUES ('$prof_id','$email','$pass','2','0','1')";
			if($con->query($account_sql)){
				echo "<script>alert('Record has been saved! You can now login your account')</script>";
				header('refresh:3;login.php');
			}
			
		}else{
			echo "<script>alert('Error has been encountered while registration!Please try again later')</script>";
		}
		

		
		
	}else{
		//send error mesage
		echo "<script>alert('Password did not match!')</script>";
		header('refresh:3;register.php');
	}
}else{
	header('Location:register.php');
}


?>