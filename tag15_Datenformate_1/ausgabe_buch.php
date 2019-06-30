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
			
			$xml = simplexml_load_file('daten/buch.xml');
			
			// Zugriff auf Inhalte
			echo $xml->buch[2]->titel[0].'<br/>';
			
			// Zugriff auf Attribute
			echo $xml->buch[2]['kategorie'].'<br/>';
			
			echo '<hr/>';
			
			$anzahl = count($xml->buch);
			
			for($n=0; $n<$anzahl; $n++){
				echo $xml->buch[$n]->titel.' - ';
				echo $xml->buch[$n]->autor.'<br/>';
			}
			
			echo '<hr/>';
			
			foreach($xml->buch as $key=>$value){
				echo $value['kategorie'].' - ';
				echo $value->titel.' - ';
				echo $value->titel['sprache'].' - ';
				echo $value->autor.'<br/>';
			}
			
			
		?>
		
	
	</body>

</html>