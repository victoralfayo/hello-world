<?php
include_once 'connect.php';
?>

<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="account.css">
</head>
<body>
<form action="proj1.php" method="post">
	<h1>Login</h1>
<label>Email:</label>
<input type="text"  name="email" placeholder="Enter email" required><br></br>
<label>Password:</label>
<input type="password" name="cpassword" placeholder="Enter password" required><br></br>
<a href="pswd.php">Change password?</a>
<input type="Submit" name="Login" value="Login">
</form>
</body>
</html>