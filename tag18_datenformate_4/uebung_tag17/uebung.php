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
	
		<h2>Übung Json</h2>
		
		<table border="1">
			<tr>
				<td>3m Co</td>
				<td>71.72</td>
				<td>0.02</td>
				<td>0.03</td>
				<td>10.10.2011 12:00 Uhr</td>
			</tr>
			<tr>
				<td>...</td>
				<td>...</td>
				<td>...</td>
				<td>...</td>
				<td>...</td>
			</tr>
		</table>
	
		<?php
		
			$daten = file_get_contents('array.json');
			$json = json_decode($daten);
			
			$html = '<table border="1">';
			foreach($json as $value){
				$html .= '<tr>';
				foreach($value as $val){
					$html .= '<td>'.$val.'</td>';
				}
				$html .= '</tr>';
			}
			$html .= '</table>';
			echo $html;
		
		?>
	
		<hr/>
	
		<h2>VW</h2>
		<ul>
			<li>Polo</li>
			<li>Golf</li>
			<li>Astra</li>
		</ul>
		
		<h2>BMW</h2>
		<ul>
			<li>...</li>
			<li>...</li>
			<li>...</li>
		</ul>
		
		<?php
			$daten = file_get_contents('auto.json');
			$json = json_decode($daten);
		
			$html = '';
			foreach($json as $value){
				$html .= '<h2>'.$value->marke.'</h2>';
				$html .= '<ul>';
				foreach($value->modell as $val){
					$html .= '<li>'.$val.'</li>';
				}
				$html .= '</ul>';
			}
			echo $html;
	
		
			$anzahl = count($json);
			$html = '';
			for($n=0; $n<$anzahl; $n++){
				$html .= '<h2>'.$json[$n]->marke.'</h2>';
				$anz = count($json[$n]->modell);
				$html .= '<ul>';
				for($j=0; $j<$anz; $j++){
					$html .= '<li>'.$json[$n]->modell[$j].'</li>';
				}
				$html .= '</ul>';
			}
			echo $html;	
		
		?>
		
		
		<hr/>
		
		<h2>Menu 1</h2>
		<ul>
			<li><a href="#">Item 1</a></li>
			<li><a href="#">Item 2</a></li>
			<li><a href="#">Item 3</a></li>
			<li><a href="#">Item 4</a></li>
		</ul>
		
		<h2>...</h2>
		<ul>
			<li><a href="#">...</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">...</a></li>
		</ul>

		<?php
		
			$daten = file_get_contents('navi.json');
			$json = json_decode($daten);

		
			$html = '';
			foreach($json as $value){
				$html .= '<h2>'.$value->head.'</h2>';
				$html .= '<ul>';
				foreach($value->href as $key => $val){
					$html .= '<li><a href="'.$val.'">'.$value->text[$key].'</a></li>';
				}
				$html .= '</ul>';
			}
			echo $html;

			$anzahl = count($json);
			$html = '';
			for($n=0; $n<$anzahl; $n++){
				$html .= '<h2>'.$json[$n]->head.'</h2>';
				$anz = count($json[$n]->href);
				$html .= '<ul>';
				for($j=0; $j<$anz; $j++){
					$html .= '<li><a href="'.$json[$n]->href[$j].'">'.$json[$n]->text[$j].'</a></li>';
				}
				$html .= '</ul>';
			}
			echo $html;	

			
		?>
		
		
	</body>

</html>













