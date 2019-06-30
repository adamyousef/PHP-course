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
	
		<h2>Cookies</h2>
		
		<?php
		
			// setcookie (string $name, string $value, int $ablauf)
		
			$jetzt = time();
			echo 'Timestamp : '.$jetzt.' Sekunden seit 01.01.1970.<br/>';
		
			
			// COOKIES SETZEN
		
			// 3600sek -> Eine Stunde
		
			setcookie('foo', 'Hallo Cookie', time() + (3600 * 2) );
			setcookie('bar', 'Noch eins', time() + (3600 * 2) );
			
			//  Null heißt, dass der Cookie bis zum Ende der Sitzung hält, 
			//  also solange wie der Benutzer den Browser geöffnet hat.
			setcookie('doo', 'Ein Wert', 0);
			
			
			// COOKIE LESEN
			
			$wert1 = $_COOKIE['foo'];
			$wert2 = $_COOKIE['bar'];
			
			echo $wert1.'<br/>';
			echo $wert2.'<br/>';
			
			
			// COOKIES gezielt LÖSCHEN
			
			setcookie('foo', '', time()-3600);
			
			
		
		?>
		
	
	</body>

</html>