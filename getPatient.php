<!-- 
Week 5 Assignment
Katelyn Blalock 
11/25/2020
-->

<!--This is the HTML to display the data from the database-->
<!DOCTYPE html>
<html>
<head>
	<title>DoctorWho Database</title>
	 <style>
      table {
        border-collapse: collapse;
		margin:auto;
      }
      td,th {
        padding: 10px;
        border-bottom: 2px solid;
        text-align: center;
      }
    </style>
</head>
<body style="text-align:center;">
<h1>DoctorWho Database Records</h1>
<table border="1">
	<tr>
		<th>Patient ID</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Address</th>
		<th>Marital Status</th>
	</tr>
	
<?php

//this code connects to the DoctorWho database, and then uses SQL and PHP to pull data from the database and place it into the HTML
$conn = mysqli_connect("localhost","root","","doctorWho");

//if connection fails, let the user know why 
if ($conn-> connect_error) {
	die("Connection failed:". $conn-> connect-error);
}

$sql = "SELECT patient_id, last_name, first_name, gender, age, address, marital_status from patients";
$result = $conn-> query($sql);

//use a PHP loop to place each field from the SQL result into an HTML table field
if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>". $row["patient_id"] ."</td><td>". $row["last_name"] ."</td><td>". $row["first_name"] ."</td><td>". $row["gender"] ."</td><td>". $row["age"] ."</td><td>". $row["address"] ."</td><td>". $row["marital_status"] ."</td></tr>";
	}
	echo "</table>";
}
else {
	echo "0 results";
}

//end the connection once complete
$conn-> close();
?>
</table>
<p><button onclick="document.location='addPatient.php'">Add New User</button></p>	