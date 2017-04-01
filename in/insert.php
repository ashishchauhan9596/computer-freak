<?php
include "classes.php";
$user = new user();
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass'])){
	$user->setusername($_POST['username']);
	$user->setemail($_POST['email']);
	$user->setpass($_POST['pass']);
	$user->setconpass($_POST['conpass']);
	$user->setrollno($_POST['rollno']);
	$emailf =$_POST['email'] ;
	$user->insert($emailf);
	
	
	
	
}
?>