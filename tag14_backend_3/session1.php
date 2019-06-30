<?php

	session_start();

?><!DOCTYPE html>
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
	
		<h2>Session 1</h2>
		
		<a href="session1.php">SESSION 1</a>
		<a href="session2.php">SESSION 2</a>
		
		
		<?php
		
			setcookie('foo', 'Hallo Cookie', time() + (3600 * 2) );

			$foo = 4711;
		
			$_SESSION['otto'] = 'Heute ist Freitag';
		
		
		
		?>
		
	
	</body>

</html>