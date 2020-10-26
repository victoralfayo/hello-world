<?php
require_once('connect.php');
include_once 'user.php';
       
if(isset($_POST['register'])){
$name=$_POST['name'];
$city=$_POST['city'];
$email=$_POST['email'];
$cpassword=$_POST['cpassword'];
$user=new User();
$user->register($pdo);
try{
$stmnt=$pdo->prepare("INSERT INTO userdetails(fullname,city,email,cpassword)VALUES(:name,:city,:email,:cpassword)");
$stmnt->bindParam(':name',$name);
$stmnt->bindParam(':city',$city);
$stmnt->bindParam(':email',$email);
$hash=password_hash($cpassword, PASSWORD_DEFAULT);
$stmnt->bindParam(':cpassword',$hash);
$stmnt->execute([$name,$city,$email,$hash]);
$stmnt=null; 
header('location:login.php');
return "Registered successfully";
}
catch(PDOException $e){
	return $e->getMessage();
}
}
else if(isset($_POST["Login"])){
	$email=$_POST['email'];
	$cpassword=$_POST['cpassword'];
	$user=new User();
	$user->login($pdo);
	$hash=password_hash($cpassword, PASSWORD_DEFAULT);
	try{

	$stmnt=$pdo->prepare("SELECT email,cpassword FROM userdetails WHERE email=? AND cpassword=?");
	password_verify($cpassword,$hash);
	$stmnt->execute([$email,$cpassword]);
	$row=$stmnt->rowCount();
	$stmnt->fetch();
	if($row>0){
		$_SESSION['user']=$stmnt->fetch(1);
	global $session1;
	$session1= $_SESSION['user'];
	}
	return "Login successful";
	header('location:proj1.php');
}catch(PDOException $e){
	return $e->getMessage();
}
  	return "Login successful";
}
else if(isset($_POST["Change"])){
$cpassword=$_POST['cpassword'];
$npassword=$_POST['npassword'];
password_verify($cpassword,$hash);
$user=new User();
 $user->changePassword($pdo);


}
else{
$user=new User();
 $user->logout($pdo);
}

?>
<html>
<head>
	<style>
		*{	font-style:italic;
			font-size:120%;
			
		}
		.profile{
			border-style:inset;

		}
		div{
			margin:10px 400px 0px 800px;
			width:450;
		}
		p{
			font-style:normal;
			font-size:40%;
		}
	</style>
	</head>
<body>
<div class="profile">
<img src="http://www.accountingweb.co.uk/sites/all/modules/custom/sm_pp_user_profile/img/default-user.png"  height="80" width="80">
<?php
if(isset($_POST['login'])){
		header("location:proj1.php");
		$_SESSION['name']=$name;
		$_SESSION['city']=$city;
		$_SESSION['message']="You have been successfully signed in";
		echo "<p>"." ".$_SESSION['user']." "."<br>"."Welcome"." ".$_SESSION['name']." ".$_SESSION['message'].""."</p>";
		
}
else{
	echo "*Name required and Password required";
}
?>
</div>
</body>
</html>


