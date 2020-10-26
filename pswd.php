<?php
include 'connect.php';

?>

<html>
<head>
<title>CHANGE PASSWORD</title>
<link rel="stylesheet" type="text/css" href="account.css">
</head>
<body>
<form action="proj1.php" method="post">
	<h1>Change password</h1>
<label>Current password:</label>
<input type="password"  name="cpassword" placeholder="Enter current password" required><br></br>
<label>New Password:</label>
<input type="password" name="npassword" placeholder="Enter new password" required><br></br>
<input type="Submit" name="Change" value="Change">
</form>
</body>
</html>