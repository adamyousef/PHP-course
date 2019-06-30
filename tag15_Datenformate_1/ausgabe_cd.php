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
	
		<h2>CD</h2>
		
		<?php
			
			$xml = simplexml_load_file('daten/cd.xml');
			
			echo $xml->cd[3]->artist.'<br/>';
			
			$anzahl = count($xml->cd);
			echo $anzahl.'<br/>';
			
			$html = '<table border="1">';
			for($n=0; $n<$anzahl; $n++){
				$html .= '<tr>';
				$html .= '<td>'.$xml->cd[$n]->artist.'</td>';
				$html .= '<td>'.$xml->cd[$n]->title.'</td>';
				$html .= '<td>'.$xml->cd[$n]->company.'</td>';
				$html .= '</tr>';
			}
			$html .= '</table>';
			echo $html;
			
			echo '<hr/>';
			
			$html = '<table border="1">';
			foreach($xml->cd as $value){
				$html .= '<tr>';
				$html .= '<td>'.$value->artist.'</td>';
				$html .= '<td>'.$value->title.'</td>';
				$html .= '<td>'.$value->company.'</td>';
				$html .= '</tr>';
			}
			$html .= '</table>';
			echo $html;			
			
		?>
		
	
	</body>

</html>