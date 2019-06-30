<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Die Bescheibung im Suchergebnis einer Suchmaschine ca.140 Zeichen" />
		<meta name="keywords" content="HTML, Grundgerüst, Einstieg in HTML max ca. 10" />
		
		<title>Tolle Webseite</title>
	
		<style>
			.item {float:left; width:30px; height:30px; border:1px solid red; margin:2px;}
			.clear {clear:both;}
		</style>
	
	</head>

	<body>
	
		<ul>
			<li>4711</li>
			<li>4711</li>
			<li>4711</li>
			<li>4711</li>
		</ul>
	
		<?php
		
			$liste  = '<ul>';
			$liste .= '<li>0815</li>';
			$liste .= '<li>0815</li>';
			$liste .= '<li>0815</li>';
			$liste .= '<li>0815</li>';
			$liste .= '</ul>';

			echo $liste;
			
			$edeka = ['Brot', 'Käse', 'Wurst', 'Butter'];
			
			$anzahl = count($edeka);
			
			$liste  = '<ul>';
			for($n=0; $n<$anzahl; $n++){
				$liste .= '<li>'.$edeka[$n].'</li>';
			}
			$liste .= '</ul>';

			echo $liste;
		
		?>
	
		<hr/>
	
		<select>
			<option>4711</option>
			<option>4711</option>
			<option>4711</option>
			<option>4711</option>
		</select>
		<br/><br/>
	
		<?php
			
			$sel = '<select>';
			$sel .= '<option>0815</option>';
			$sel .= '<option>0815</option>';
			$sel .= '<option>0815</option>';
			$sel .= '<option>0815</option>';
			$sel .= '</select><br/><br/>';
			
			echo $sel;
		
			$tage = ['SO', 'MO', 'DI', 'MI', 'DO', 'FR', 'SA'];
		
			$anzahl = count($tage);
		
			$sel = '<select>';
			for($n=0; $n<$anzahl; $n++){
				$sel .= '<option>'.$tage[$n].'</option>';
			}
			$sel .= '</select>';
			
			echo $sel;
		
		?>
	
		<hr/>
	
		<table border="1">
			<tr>
				<td>4711</td>
				<td>4711</td>
				<td>4711</td>
			</tr>
			<tr>
				<td>4711</td>
				<td>4711</td>
				<td>4711</td>
			</tr>
			<tr>
				<td>4711</td>
				<td>4711</td>
				<td>4711</td>
			</tr>
		</table>
		<br/>
	
		<?php
	
			$tab = '<table border="1">';
			$tab .= '<tr>';
			$tab .= '<td>4711</td>';
			$tab .= '<td>4711</td>';
			$tab .= '<td>4711</td>';
			$tab .= '</tr>';
			$tab .= '<tr>';
			$tab .= '<td>4711</td>';
			$tab .= '<td>4711</td>';
			$tab .= '<td>4711</td>';
			$tab .= '</tr>';
			$tab .= '<tr>';
			$tab .= '<td>4711</td>';
			$tab .= '<td>4711</td>';
			$tab .= '<td>4711</td>';
			$tab .= '</tr>';
			$tab .= '</table><br/>';
			
			echo $tab;
	
			$item = [ 
				[11,12,13,14,15], 
				[21,22,23,24,25], 
				[31,32,33,34,35], 
				[41,42,43,44,45] 
			];
	
			$anzahlReihen = count($item);
			$anzahlSpalten = count($item[0]);

			$tab = '<table border="1">';
			
			for($r=0; $r<$anzahlReihen; $r++){
				$tab .= '<tr>';
				for($s=0; $s<$anzahlSpalten; $s++){
					$tab .= '<td>'.$item[$r][$s].'</td>';
				}
				$tab .= '</tr>';
			}
			
			$tab .= '</table><br/>';
			
			echo $tab;
	
	
	
		?>
	
		<hr/>
	
		<div class="wrapper">
			<div class="item"></div>
			<div class="item"></div>
			<div class="item"></div>
			<div class="clear"></div>
			<div class="item"></div>
			<div class="item"></div>
			<div class="item"></div>
			<div class="clear"></div>	
			<div class="item"></div>
			<div class="item"></div>
			<div class="item"></div>
			<div class="clear"></div>
			<div class="item"></div>
			<div class="item"></div>
			<div class="item"></div>
			<div class="clear"></div>
		</div><br/><br/>
	
		<?php
		
			$brett = '<div class="wrapper">';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="clear"></div>';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="clear"></div>';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="clear"></div>';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="clear"></div>';
			$brett .= '</div><br/><br/>';
		
			echo $brett;
			
			
			$item = [ 
				[11,12,13,14,15], 
				[21,22,23,24,25], 
				[31,32,33,34,35], 
				[41,42,43,44,45] 
			];
	
			$anzahlReihen = count($item);
			$anzahlSpalten = count($item[0]);
			

			$brett = '<div class="wrapper">';
			
			for($r=0; $r<$anzahlReihen; $r++){				
				for($s=0; $s<$anzahlSpalten; $s++){
					$brett .= '<div class="item">'.$item[$r][$s].'</div>';
				}
				$brett .= '<div class="clear"></div>';
			}
			
			$brett .= '</div><br/><br/>';
		
			echo $brett;
		
		?>	
	</body>

</html>