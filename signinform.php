<?php 
include 'connect.php';

?>

<DOCTYPE HTML>
<html>
<head>
	<title>SIGNUP</title>
	<link rel='stylesheet'  type='text/css' href='account.css'>
</head>
<body>
<form action='' method='post' enctype='multipart-form-data'>
<h1>Sign up</h1>
<section>
<img src='avatar2.png' height= 80 width=120>
</section>
<div class='file'>
<input type='file' name='Choose file'>
</div>
</section>
<div>
<label>Full name:</label>
<input type='text' name='name' placeholder='Enter name' required><br></br>
<label>City of residence:</label>
<input type='text' name='city' placeholder='Enter name' required><br></br>
<label>Email:</label>
<input type='text' name='email' placeholder='Enter email' required><br></br>
<label>Password:</label>
<input type='Password' name='cpassword' placeholder='Enter password' required>
<input type='Submit' name='register' value='register'><br></br>
</div>
</form>
</body>
</html>
