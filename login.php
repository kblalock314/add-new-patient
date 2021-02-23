<!-- 
Week 5 Assignment
Katelyn Blalock 
11/25/2020
-->

<!--login form to get into database -->
<head>
	<title>Login</title>
</head>
<body style="padding-left:300px;padding-right:300px;">
<form method="post" action="login.inc.php">
	<div id="content">
		<h1 style="text-align:center">Login</h1>
		<p>Username:
		<input type="text" name="uid" size="5" /></p>
		<p>Password:
		<input type="password" name="pwd" size="30" /></p>
		<p><input type="submit" name="submit" value="Submit" /></p>
	</div>
</form>
</body>

<?php 

//error handlers for incorrect username, password and emtpy fields
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "emptyinput") {
			echo '<p>Error: Please fill in both fields</p>';
		}	
		else if ($_GET["error"] == "wrongusername") {
			echo "<p>Error: Invalid username and/or password</p>";
		}
		else if ($_GET["error"] == "wrongpassword") {
			echo "<p>Error: Invalid password</p>";
		}
		else if ($_GET["error"] == "brokenloginform") {
			echo "<p>There was a problem with the above form. Please try again later.</p>";
		}
	}
?>	