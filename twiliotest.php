<?php


require __DIR__."/vendor/autoload.php";
use Composer\Rest\Client;


$account_sid=getenv(TWILIO_ACCOUNT_SID);
$auth_token=getenv(TWILIO_AUTH_TOKEN);

$twilio_num="+12763859206";
$client= new Client($account_sid,$auth_token); 
$client->messages->create(
		$_POST['number'],
		array(
			'from' => $twilio_number,
			'body' => $_POST['message']
		
		)
);
if(isset($_POST['number'])&& isset($_POST['message']) && isset($_POST['send'])){

	echo "<script>". "window.alert(Message sent successfully);"."</script>";
}
else{
	echo "<script>". "window.alert(Message not successfully sent);"."</script>";
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