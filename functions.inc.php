<?php

//function to check if username is in users database
function uidExists($conn, $username) {
	$sql = "SELECT * FROM users WHERE usersUid = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../week5_kblalock/login.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $username);
	mysqli_stmt_execute($stmt);
		
	$resultData = mysqli_stmt_get_result($stmt);
		
	if($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	
	mysqli_stmt_close($stmt);
}	

//function to check if the username and password fields are blank 
function emptyInputLogin($username, $pwd) {
	$result;
	if (empty($username) || empty($pwd)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;	
}

//function to check if the username is in the users database AND the correct password was provided
function loginUser($conn, $username, $pwd) {
	
	//if the username isn't in the database, keep user on login page
	$uidExists = uidExists($conn, $username);
	
	if ($uidExists === false) {
		header("location: ../week5_kblalock/login.php?error=wrongusername");
		exit();
}	
	
	//if the password from the database and the password the user gave us do not match, keep user on login page
	$pwdDatabase = $uidExists['usersPwd'];
	$hashedpwd = password_hash($pwdDatabase, PASSWORD_DEFAULT);
	$pwdCheck = password_verify($pwd, $hashedpwd);
	
	if ($pwdCheck === false){
	header("location: ../week5_kblalock/login.php?error=wrongpassword");
		exit();
	}
	
	//if the passwords do match, send user to the main form page
	else if ($pwdCheck === true) {
		session_start();
		header("location: ../week5_kblalock/addPatient.php");
		exit();
	}	
	
	//just in case the above statements fail, keep user on login page
	else {
		header("location: ../week5_kblalock/login.php");
	}	
}