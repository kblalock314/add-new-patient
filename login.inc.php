<?php

//once the user clicks submit on the login page, use the emptyInputLogin and loginUser functions in functions.inc.php to login the user in if the correct login information was submitted
if (isset($_POST['submit'])) {

	$username = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	//function to verify that no fields were left blank
	if (emptyInputLogin($username, $pwd) !== false) {
		header('location: ../week5_kblalock/login.php?error=emptyinput');
		exit();
	}
	
	//function to direct the user to addPatient.php if the correct username and password were entered
	loginUser($conn, $username, $pwd);
}	

//just in case the above code breaks for any reason, I included this else statement to alert the user and developer
else {
	header('location: ../week5_kblalock/login.php?error=brokenloginform');
	exit();
}	

