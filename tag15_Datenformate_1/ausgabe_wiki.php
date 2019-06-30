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
	
		<h2>XML</h2>
		
		<?php
			$xml = simplexml_load_file('daten/wiki.xml'); // Objekt
			
			echo '<h3>'.$xml->titel.'</h3>';
			echo '<h3>'.$xml->titel[0].'</h3>';
			
			echo $xml->eintrag[1]->stichwort.'<br/>';
			echo $xml->eintrag[1]->stichwort[0].'<br/>';
			echo $xml->eintrag[1]->eintragstext.'<br/>';
			
			echo $xml->eintrag[1]->stichwort[0]['land'].'<br/>';
			
			$kurz = $xml->eintrag;
			echo $kurz[1]->stichwort;
			
			
		?>
		
	
	</body>

</html>