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
	
		<h2>Stundenplan</h2>
		
		<?php
			
			$plan = simplexml_load_file('stundenplan.xml');
			
			// echo $plan->tag[1]->stunde[2];
			
			$html = '<table border="1">';
			foreach($plan->tag as $key=>$value){
				$html.= '<tr>';
				$html.= '<td>'.$value['tag'].'</td>';
				foreach($value as $k=>$v){
					$html.= '<td>'.$v.'</td>';
				}
				$html.='</tr>';
			}
			$html.= '</table>';
			echo $html;
			
			echo '<hr/>';
			
			$html = '<table border="1">';
			$html.= '<tr>';
			$html.= '<td>'.$plan->tag[0]['tag'].'</td>';
			$html.= '<td>'.$plan->tag[1]['tag'].'</td>';
			$html.= '<td>'.$plan->tag[2]['tag'].'</td>';
			$html.= '<td>'.$plan->tag[3]['tag'].'</td>';
			$html.= '<td>'.$plan->tag[4]['tag'].'</td>';
			$html.= '<td>'.$plan->tag[5]['tag'].'</td>';
			$html.= '</tr>';
			$html.= '<tr>';
			$html.= '<td>'.$plan->tag[0]->stunde[0].'</td>';
			$html.= '<td>'.$plan->tag[1]->stunde[0].'</td>';
			$html.= '<td>'.$plan->tag[2]->stunde[0].'</td>';
			$html.= '<td>'.$plan->tag[3]->stunde[0].'</td>';
			$html.= '<td>'.$plan->tag[4]->stunde[0].'</td>';
			$html.= '<td>'.$plan->tag[5]->stunde[0].'</td>';
			$html.= '</tr>';
			$html.= '<tr>';
			$html.= '<td>'.$plan->tag[0]->stunde[1].'</td>';
			$html.= '<td>'.$plan->tag[1]->stunde[1].'</td>';
			$html.= '<td>'.$plan->tag[2]->stunde[1].'</td>';
			$html.= '<td>'.$plan->tag[3]->stunde[1].'</td>';
			$html.= '<td>'.$plan->tag[4]->stunde[1].'</td>';
			$html.= '<td>'.$plan->tag[5]->stunde[1].'</td>';
			$html.= '</tr>';
			$html.= '<tr>';
			$html.= '<td>'.$plan->tag[0]->stunde[2].'</td>';
			$html.= '<td>'.$plan->tag[1]->stunde[2].'</td>';
			$html.= '<td>'.$plan->tag[2]->stunde[2].'</td>';
			$html.= '<td>'.$plan->tag[3]->stunde[2].'</td>';
			$html.= '<td>'.$plan->tag[4]->stunde[2].'</td>';
			$html.= '<td>'.$plan->tag[5]->stunde[2].'</td>';
			$html.= '</tr>';
			$html.= '</table>';
			echo $html;
			
			echo '<hr/>';
			
			
			$html = '<table border="1">';
			$html.= '<tr>';
			for($n=0; $n<6; $n++){
				$html.= '<td>'.$plan->tag[$n]['tag'].'</td>';
			}
			$html.= '</tr>';
			for($r=0; $r<6; $r++){
				$html.= '<tr>';
				for($s=0; $s<6; $s++){
					$html.= '<td>'.$plan->tag[$s]->stunde[$r].'</td>';
				}
				$html.= '</tr>';
			}
			$html.= '</table>';
			
			echo $html;
			
		?>
		
	
	</body>

</html>