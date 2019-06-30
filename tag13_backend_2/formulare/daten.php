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
	
		<h2>Daten</h2>
		
		<?php
		
			$user = $_POST['us'];
			$pw   = $_POST['pw'];
			
			$von = $_POST['from'];
			
			echo $user.' '.$pw.' '.$von;
		
		
		?>
		
	
	</body>

</html>