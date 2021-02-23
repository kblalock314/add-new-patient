<?php

//this code connects to the DoctorWho database by calling dbh.inc.php, stores the data from the addPatient.php form into variables, and then inserts the new data into the database
	
include_once 'dbh.inc.php';

$patientId = $_POST['patient_id'];
$last = $_POST['last_name'];
$first = $_POST['first_name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = $_POST['address'];
$marital = $_POST['marital_status'];

$sql = "INSERT INTO patients (patient_id, last_name, first_name, gender, age, address, marital_status) VALUES ('$patientId', '$last', '$first', '$gender', '$age', '$address', '$marital');";
mysqli_query($conn, $sql);

//after form is submitted, display the database with new entry 
header("Location: ../week5_kblalock/getPatient.php?newclient=success");

//if new user was successfully added, alert the user
