<?php

	include 'config.inc.php';

	$benutzer = $_POST['us'];
	$passwort = $_POST['pw'];

	header('location:artikel.php');
	
	/*if($benutzer=='susi' && $passwort=='4711'){
		header('location:artikel.php');
	} else {
		header('location:index.php');
	}*/
	

?>