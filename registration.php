<?php
	require ("res/php/config/connection.php");
	include_once ("res/pages/header.php");

	//isa lang tong variable na nag hold ng sql statement
	$account_type_sql = "select * from tbl_user_access";

	//ipasa sql statement para ma execute ng phpmyadmin
	$sql_result = $conn->query($account_type_sql);

	
?>

	<h1>Registration</h1>
	<hr>
	<form action='submit'>

	<!--Drop down box -->
	<div>
		<label for='type'>Account Type</label>
		<select name='type'>
		<?php
			while($account_record = $sql_result->fetch_assoc()) {
		?>

			<option value='<?php echo $account_record['uacc_id'];?>'>
				<?php echo $account_record['uacc_name'];?>	
			</option>

		<?php
			}
		?>
			
		</select>
	</div>

	<!-- Text box -->
	<div>
		<label for='fname'>First Name</label>
		<input type='text' name='fname' required="" placeholder="Enter your First Name">
	</div>

	<!-- Text box -->
	<div>
		<label for='mname'>Middle Name</label>
		<input type='text' name='mname' placeholder="Enter your Middle Name">
	</div>

	<!-- Text box -->
	<div>
		<label for='lname'>Last Name</label>
		<input type='text' name='lname' required="" placeholder="Enter your Last Name">
	</div>

	<!--Drop down box -->
	<div>
		<label for='gender'>Gender</label>
		<select name='gender'>
			<option value='Male'>Male</option>
			<option value='Female'>Female</option>
		</select>
	</div>		

	<!-- Text box -->
	<div>
		<label for='idnum'>Student/Employee</label>
		<input type='text' name='idnum' required="" placeholder="Enter your ID Number">
	</div>

	<!-- Text box -->
	<div>
		<label for='iddept'>Department</label>
		<input type='text' name='iddept' required="" placeholder="Enter your deparment">
	</div>

	</form>

<?php
	include_once ("res/pages/footer.php");
?>