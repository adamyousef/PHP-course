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
	
		<h2>Lotto</h2>
		
		<?php
			
			
			$html = '<table border="1">';
			
			$html .= '<tr>';
			$html .= '<td colspan="8">Tag</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<td>1</td>';
			$html .= '<td>2</td>';
			$html .= '<td>3</td>';
			$html .= '<td>4</td>';
			$html .= '<td>5</td>';
			$html .= '<td>6</td>';
			$html .= '<td>Superzahl</td>';
			$html .= '<td>1</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<td colspan="4">Spiel 77</td>';
			$html .= '<td colspan="4">Super 6</td>';
			$html .= '</tr>';
			
			$html .= '</table>';
			
			echo $html;
			
		?>
		
	
	</body>

</html>