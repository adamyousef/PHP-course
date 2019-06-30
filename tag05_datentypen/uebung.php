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
<?php	

/*
		<ul>
			<li>4711</li>
			<li>4711</li>
			<li>4711</li>
			<li>4711</li>
		</ul>
*/	
	
		
	echo "<hr>";	
	echo "Hardcoded <br>";
		
			$liste  = '<ul>';
			$liste .= '<li>0815</li>';
			$liste .= '<li>0815</li>';
			$liste .= '<li>0815</li>';
			$liste .= '<li>0815</li>';
			$liste .= '</ul>';

			echo $liste;
	echo "Array-Beispiel <br>";			
			$edeka = ['Brot','Wurst','Käse','Butter']; 
			
			$anzahl = count($edeka);
			//zählt array elemente
			//vergleicht mit arrayelement anzahl
		$liste  = '<ul>';
			for($n=0; $n<$anzahl; $n++){
				$liste .= '<li>'.$edeka[$n].'</li>';
			}
			$liste .= '</ul>';
			echo $liste;
			
			
	echo "For-Loop <br>";	
			$liste  = '<ul>';
			for($n=0; $n<5; $n++){
				$liste .= '<li>0815</li>';
			}
			$liste .= '</ul>';

			echo $liste;
			echo "<hr>";
		
		?>
<?php 
	echo "Hardcoded <br>";
?>		
	
		<select>
			<option>4711</option>
			<option>4711</option>
			<option>4711</option>
			<option>4711</option>
		</select>
		<br/><br/>
	
		<?php
	
	//		$sel = '<select>';
	//		$sel .= '<option>4711</option>';
			
	echo "For-Loop <br>";	
			
			$sel  = '<select>';
			for($n=0; $n<=4; $n++){
				$sel .= '<option>4711</option>';
			}
			$sel .= '</select>';

				echo $sel;
		echo "<hr>";
	echo "Hardcoded <br>";
		?>

		
	
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
	echo "For-Loop <br>";
			$tab = '<table border="1">';
				for($i=0; $i<=2; $i++){
				$tab .= '<tr>';	
					for($n=0; $n<=2; $n++){
					$tab .= '<td>4711</td>';
					}
				$tab .= '</tr>';	
				}
			$tab .= '</table>';
				
		echo $tab;
		echo "<hr>";
		echo "Hardcoded <br>";
		?>
	
		
	
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
		</div>
	
		<?php
	echo "For-Loop <br>";	
			$brett = '<div class="wrapper">';
			$brett .= '<div class="item"></div>';
			$brett .= '<div class="item"></div>';
			
			$brett = '<div class="wrapper">';
			for($i=0; $i<=3; $i++){
					
					for($n=0; $n<=2; $n++){
					$brett .= '<div class="item"></div>';
					}
					$brett .= '<div class="clear"></div>';	
				}
			$brett .= '</div>';
		echo "<br>";		
		echo $brett;
		
		?>
	
	</body>

</html>