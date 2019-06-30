<?php

	session_start();
	if($_SESSION['login'] != 'OK'){header('location:index.php');}

	require 'config.inc.php';

	$from = $_POST['from'];
	$todo = $_POST['todo'];

	
	/********************************************************************************************************
	
		HINZUFÜGEN	- (C)REATE		INSERT INTO tabelle (feldname,feldname,feldname) VALUES ('STRING', ZAHL, 'STRING')
		LESEN		- (R)EAD		SELECT * FROM tabelle  bzw. SELECT feldname,feldname,feldname FROM tabelle WHERE feldname = 'Inhalt'
		ÄNDERN		- (U)PDATE		UPDATE tabelle SET feldname=Inhalt, feldname=Inhalt, feldname=Inhalt WHERE feldname='Inhalt'
		LÖSCHEN	    - (D)ELETE 		DELETE FROM tabelle WHERE feldname = 'Inhalt'
	
	*********************************************************************************************************/
		
	
	/*************************************************************************
		C O N F I G
	*************************************************************************/
	if($from == 'user'){
		
		$id = $_POST['id'];
		$user     = $_POST['user'];
		$password = md5($_POST['password']);
		$role     = $_POST['role'];
		
		if($todo == 'insert'){
			$anfrage = "INSERT INTO user (id,user,password,role) VALUES ($id,'$user','$password','$role')";
		}
		
		if($todo == 'update'){
			$anfrage = "UPDATE user SET user='$user', password='$password', role='$role' WHERE id=$id";
		}
		
		if($todo == 'delete'){
			$anfrage = "DELETE FROM user WHERE id = $id";
		}
	
		$ergebnis = mysqli_query($link, $anfrage);
		mysqli_close($link);
		header('location:user.php');
		
	}
	/*************************************************************************
		C O N F I G
	*************************************************************************/
	if($from == 'config'){

		$id = $_POST['id'];
		$artikel    = $_POST['artikel'];
		$navigation = $_POST['navigation'];
		
		if($todo == 'insert'){
			$anfrage = "INSERT INTO config (id,artikel,navigation) VALUES ($id,'$artikel','$navigation')";
		}
		
		if($todo == 'update'){
			$anfrage = "UPDATE config SET artikel='$artikel', navigation='$navigation' WHERE id=$id";
		}
		
		if($todo == 'delete'){
			$anfrage = "DELETE FROM config WHERE id = $id";
		}
	
		$ergebnis = mysqli_query($link, $anfrage);
		mysqli_close($link);
		header('location:config.php');

	}

	/*************************************************************************
		N A V I G A T I O N
	*************************************************************************/
	if($from == 'navi'){
		
		$id = $_POST['id'];
		$navigation = $_POST['navigation'];

		
		if($todo == 'insert'){
			$anfrage = "INSERT INTO navigation (id,navigation) VALUES ($id,'$navigation')";
		}
		
		if($todo == 'update'){
			$anfrage = "UPDATE navigation SET navigation='$navigation' WHERE id=$id";
		}
		
		if($todo == 'delete'){
			$anfrage = "DELETE FROM navigation WHERE id = $id";
		}
		
		$ergebnis = mysqli_query($link, $anfrage);
		mysqli_close($link);
		header('location:navi.php');		
	}
	

	/*************************************************************************
		A R T I K E L
	*************************************************************************/
	if($from == 'artikel'){
		
		$id    = $_POST['id'];
		$monat = $_POST['monat'];
		$tag   = $_POST['tag'];
		$headline = $_POST['headline'];
		$artikel  = $_POST['artikel'];
		
		if($todo == 'insert'){
			$anfrage = "INSERT INTO artikel (id,monat,tag,headline,artikel) VALUES ($id,'$monat','$tag','$headline','$artikel')";
		}
		
		if($todo == 'update'){
			$anfrage = "UPDATE artikel SET monat='$monat', tag='$tag', headline='$headline', artikel='$artikel' WHERE id=$id";
		}
		
		if($todo == 'delete'){
			$anfrage = "DELETE FROM artikel WHERE id = $id";
		}
		
		$ergebnis = mysqli_query($link, $anfrage);
		mysqli_close($link);
		header('location:artikel.php');
		
	}


?>