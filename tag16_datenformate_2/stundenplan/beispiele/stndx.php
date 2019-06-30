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
	
		<h2>Stunden_Plan 2 Klasse</h2>
		
		<?php
			
			$xml = simplexml_load_file('stndx.xml');
			
			echo $xml->MO->fach1;

			echo '<hr/>';
			
			$anzahl = count($xml->stnd);
			echo $anzahl;
			
			$htm='<table border ="1">';
			
			for($n=0; $n<$anzahl; $n++)
			{
				$htm.='<tr>';
				$htm.='<td>'.$xml->stnd[$n]->fach1.'</td>';
				$htm.='<td>'.$xml->stnd[$n]->fach2.'</td>';
				$htm.='<td>'.$xml->stnd[$n]->fach3.'</td>';
				$htm.='<td>'.$xml->stnd[$n]->fach4.'</td>';
				$htm.='<td>'.$xml->stnd[$n]->fach5.'</td>';
				$htm.='</tr>';
			}
			$htm.='</table>';
			echo $htm;
			echo '<hr/>';
			
/*			
			echo $htm='';
			$htm='<table border ="1">';			
			foreach($xml->cd as $value)
			{
				$htm.='<tr>';
				$htm.='<td>'.$value->titel.'</td>';
				$htm.='<td>'.$value->artist.'</td>';
				$htm.='<td>'.$value->country.'</td>';
				$htm.='<td>'.$value->company.'</td>';
				$htm.='<td>'.$value->price.'</td>';
				$htm.='<td>'.$value->year.'</td>';
				$htm.='</tr>';
			}
			$htm.='</table>';
			echo $htm;
			echo '<hr/>'; */
			
		?>
		
	
	</body>

</html>