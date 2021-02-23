<!DOCTYPE html>
<html>
<!-- 
Week 5 Assignment
Katelyn Blalock 
11/20/2020
-->

<!--This is the HTML that allows users add new data to the DoctorWho database by filling out a form. It calls the newclient.inc.php file to connect to the database, store the form data into variables, and insert the new data into the database. -->
<head>
<title>Add New Patient</title>
</head>
<body>
<form method="post" action="newclient.inc.php">
	<div id="content" style="padding-left:300px;padding-right:300px;">
		<h1 style="text-align:center">Add New Patient Record</h1>
		<p>Patient ID:
		<input type="text" name="patient_id" size="5" value="" /></p>
		<p>Last name:
		<input type="text" name="last_name" size="30" value=""/></p>
		<p>First name:
		<input type="text" name="first_name" size="30" value=""/></p>
		<p>Gender:
		<input type="radio" id="male" name="gender" value="Male"/> <label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="Female"/> <label for="female">Female</label>
		</p>
		<p>Age:
		<input type="text" name="age" size="30" value=""/></p>
		<p>Address:
		<input type="text" name="address" size="30" value=""/></p>
		<p>Marital Status:
		<input type="radio" id="single" name="marital_status" value="Single"/><label for="single">Single</label>
		<input type="radio" id="Married" name="gender" value="Married"><label for="married">Married</label><br>
		</p>
		<p><input type="submit" value="Submit" /></p>
	</div>
</form>
</body>
</html>