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
	
		<h2>Newsticker</h2>
		
		<?php
			
			$xml = simplexml_load_file('http://www.tageschau.de/newsticker.rdf');
			
			echo $xml->channel->item[3]->title.'<br/>';
			echo $xml->channel->item[3]->description.'<br/>';
			echo $xml->channel->item[3]->category.'<br/>';
			
			foreach($xml->channel->item as $value){
				echo '<h3>'.$value->title.'</h3>';
			}
			
			$anzahl = count($xml->channel->item);
			for($n=0; $n<$anzahl; $n++){
				echo $xml->channel->item[$n]->title.'<br/>';
			}
			
			
		?>
		
	
	</body>

</html>