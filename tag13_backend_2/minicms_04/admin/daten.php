<?php

	require 'config.inc.php';

	$from = $_POST['from'];
	$todo = $_POST['todo'];

	/*************************************************************************
		C O N F I G
	*************************************************************************/
	if($from == 'user'){
		
		if($todo == 'insert'){
			echo 'USER INSERT';
		}
		
		if($todo == 'update'){
			echo 'USER UPDATE';
		}
		
		if($todo == 'delete'){
			echo 'USER DELETE';
		}
	}
	/*************************************************************************
		C O N F I G
	*************************************************************************/
	if($from == 'config'){

		if($todo == 'insert'){
			echo 'CONFIG INSERT';
		}
		
		if($todo == 'update'){
			echo 'CONFIG UPDATE';
		}
		
		if($todo == 'delete'){
			echo 'CONFIG DELETE';
		}
	
	}

	/*************************************************************************
		N A V I G A T I O N
	*************************************************************************/
	if($from == 'navi'){
		
		if($todo == 'insert'){
			echo 'NAVI INSERT';
		}
		
		if($todo == 'update'){
			echo 'NAVI UPDATE';
		}
		
		if($todo == 'delete'){
			echo 'NAVI DELETE';
		}
		
	}
	
	
	/********************************************************************************************************
	
		HINZUFÜGEN	- (C)REATE		INSERT INTO tabelle (feldname,feldname,feldname) VALUES ('STRING', ZAHL, 'STRING')
		LESEN		- (R)EAD		SELECT * FROM tabelle  bzw. SELECT feldname,feldname,feldname FROM tabelle WHERE feldname = 'Inhalt'
		ÄNDERN		- (U)PDATE		UPDATE tabelle SET feldname=Inhalt, feldname=Inhalt, feldname=Inhalt WHERE feldname='Inhalt'
		LÖSCHEN	    - (D)ELETE 		DELETE FROM tabelle WHERE feldname = 'Inhalt'
	
	*********************************************************************************************************/
	
	
	
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