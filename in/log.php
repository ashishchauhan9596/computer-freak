<?php
session_start();
include"classes.php";
$user = new user();
$user->setemail($_POST['email']);
$user->setpass($_POST['pass']);
if($user->login() == true){
	$_SESSION['id'] = $user->getid();
	$_SESSION['username'] = $user->getusername();
	$_SESSION['email'] = $user->getemail();
}
?>