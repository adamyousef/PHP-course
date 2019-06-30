<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Die Beschreibung im Suchergebnis einer Suchmaschine ca.140 Zeichen" />
		<meta name="keywords" content="HTML, Grundgerüst, Einstieg in HTML max ca. 10" />
		
		<title>Tolle Webseite</title>
	
		<style>
			.zahl {width:30px;}
		</style>
	
	</head>

	<body>
	
		<h2>Lotto</h2>
		
		<?php
			
			$xml = simplexml_load_file('lotto.xml');
			
			
			$html = '<table border="1">';
			
			$html .= '<tr>';
			$html .= '<td colspan="8">'.$xml->ziehung[0]['tag'].'</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			foreach($xml->ziehung[0]->zahl as $value){
				$html .= '<td class="zahl">'.$value.'</td>';
			}
			$html .= '<td>Superzahl</td>';
			$html .= '<td class="zahl">'.$xml->ziehung[0]->super.'</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<td colspan="4">Spiel 77 '.$xml->ziehung[0]->spiel77.'</td>';
			$html .= '<td colspan="4">Super 6 '.$xml->ziehung[0]->super6.'</td>';
			$html .= '</tr>';
			
			$html .= '</table><br/>';
			
			$html .= '<table border="1">';
			
			$html .= '<tr>';
			$html .= '<td colspan="8">'.$xml->ziehung[1]['tag'].'</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			foreach($xml->ziehung[1]->zahl as $value){
				$html .= '<td class="zahl">'.$value.'</td>';
			}
			$html .= '<td>Superzahl</td>';
			$html .= '<td class="zahl">'.$xml->ziehung[1]->super.'</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<td colspan="4">Spiel 77 '.$xml->ziehung[1]->spiel77.'</td>';
			$html .= '<td colspan="4">Super 6 '.$xml->ziehung[1]->super6.'</td>';
			$html .= '</tr>';
			
			$html .= '</table><br/>';
			
			echo $html;
			
		?>
		
	
	</body>

</html>