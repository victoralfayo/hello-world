
<?php
session_start();

include_once 'connect.php';
include_once 'account.php';
class User implements Account{
private $name,$city,$email,$cpassword,$npassword;
public function construct(){

$this->npassword=$npassword;
}
public function register($pdo){

function setName($name){
	$this->name=$name;
}
 function getName(){
	return $this->name;
}
function setCity($city){
	$this->city=$city;
}
function getCity(){
	return $this->city;
}
function setEmail($email){
	$this->email=$email;
}
function getEmail(){
	return $this->email;
}
 function setPassword($cpasssword){
	$this->cpassword=$cpassword;
}
function getPassword(){
	return $this->cpassword;
}

}
public function login($pdo){
	function setEmail($email){
	$this->email=$email;
}
function getEmail(){
	return $this->email;
}
 function setPassword($cpasssword){
	$this->cpassword=$cpassword;
}
function getPassword(){
	return $this->cpassword;
}


}
 function changePassword($pdo){
	if(isset($_POST["Change"])){
	try{

if(password_verify($cpassword,hash))
	$stmnt=$pdo->prepare("INSERT INTO userdetails(npassword)VALUES(?)");
	$stmnt->execute([$this->npassword]);
	return "Password changed successfully";
}catch(PDOException $e){
		return $e->getMessage();
	}
	}
return "Password change successful";
}
public function logout($pdo){
	if( $GLOBALS['$session1']=0){
	session_unset();

	session_destroy();

	return "You were logged out of this session";
		
}
}
}
?>