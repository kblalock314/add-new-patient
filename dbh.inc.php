<?php

//this code enables us to connect to the DoctorWho database everytime we call the $conn variable
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "doctorWho";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);;

//if the connection fails, tell the user whhy
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}