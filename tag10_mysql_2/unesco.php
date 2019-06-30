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
	
		<h2>Unesco</h2>
		
		<?php
		
			$link = mysqli_connect('localhost', 'root', '', 'unesco');
			mysqli_set_charset($link, 'utf8');
			
			$ergebnis = mysqli_query($link, "SELECT * FROM data WHERE states = 'Germany'");
		
			$html = '<table border="1">';
			while( $ds = mysqli_fetch_assoc($ergebnis) ){
				$html .= '<tr>';
				$html .= '<td>'.$ds['site'].'</td>';
				$html .= '<td>'.$ds['location'].'</td>';
				$html .= '<td>'.$ds['short_info'].'</td>';
				$html .= '<td><img src="'.$ds['image'].'" /></td>';
				$html .= '</tr>';
			}
			$html .= '</table>';
			echo $html;

		?>
		
	
	</body>

</html>