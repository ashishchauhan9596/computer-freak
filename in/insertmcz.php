<?php
	session_start();
	 include"classes.php";
	 if(isset($_POST['ctxt'])){
		 $chat = new chat();
		 $chat->setchatuserid($_SESSION['id']);
		 $chat->setchattext($_POST['ctxt']);
		 $chat->insertchatmcz();
	 }
?>