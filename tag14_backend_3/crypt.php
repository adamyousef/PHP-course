<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Die Beschreibung im Suchergebnis einer Suchmaschine ca.140 Zeichen" />
		<meta name="keywords" content="HTML, Grundgerüst, Einstieg in HTML max ca. 10" />
		
		<title>Tolle Webseite</title>
	
		<style></style>
	
	</head>

	<body>
	
		<h2>Kryptieren von Passwörtern</h2>
		
		<?php
				
			$a = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$b = '0123456789......';
			
			$passwort1 = '4711';
			$passwort2 = 'Lorem ipsum dolor sit amet, 
			consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
			Aenean massa. Cum sociis natoque penatibus et magnis dis parturient 
			montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, 
			pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
			Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.';
			
			
			$pw1 = md5($passwort1);
			$pw2 = sha1($passwort2);
		
			echo $pw1.'<br/>';
			echo $pw2.'<br/>';
		
		
		?>
		
	
	</body>

</html>