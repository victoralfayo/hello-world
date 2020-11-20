
<?php

require __DIR__. '/vendor/autoload.php';
use Twilio\Rest\Client;

$account_sid="AC1adc57d3536f026a8164cd4eaafddebd";
$auth_token="6abf88bb960fc64a3a88e347779e99ad";

$twilio_num="+12763859206";

$client=new Client($account_sid,$auth_token);
$client->messages->create(
		$_POST['number'],
		array(
			'from' => $twilio_number;
			'body' => $_POST['message'];
		
		)
);
if(isset($_POST['number']&& $_POST['message']&& $_POST['send'])){

	<script>window.alert("Message sent successfully");</script>
}
else{
	<script>window.alert("Message not suuccessfully sent");</script>
}
?>
<!DOCTYPE HTML>
</head>
<head>
<body>
<form method="post" action="">
<input type="text" name='number' placeholder="Enter phone number">
<label>Message</label>
<input type="textbox" name='message' placeholder="Enter message">
<input type="Submit" name="send">
</form>
</body>
</html>
