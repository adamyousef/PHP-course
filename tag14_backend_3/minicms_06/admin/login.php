<?php
	session_start();
	include 'config.inc.php';

	$benutzer = $_POST['us'];
	$passwort = md5($_POST['pw']);

	$ergebnis = mysqli_query($link, "SELECT * FROM user WHERE user='$benutzer' AND password = '$passwort'");
	$anzahl = mysqli_num_rows($ergebnis);
	
	if($anzahl == 1){
		
		$ds = mysqli_fetch_assoc($ergebnis);
		
		$_SESSION['login'] = 'OK';
		$_SESSION['user'] = ucfirst($ds['user']);
		$_SESSION['role'] = $ds['role'];
		
		header('location:artikel.php');
		
	} else {
		header('location:index.php');
	}
	

?>