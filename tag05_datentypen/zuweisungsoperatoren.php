<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Die Bescheibung im Suchergebnis einer Suchmaschine ca.140 Zeichen" />
		<meta name="keywords" content="HTML, Grundgerüst, Einstieg in HTML max ca. 10" />
		
		<title>Tolle Webseite</title>
	
		<style></style>
	
	</head>

	<body>
	
		<h2>Zuordnungsoperatoren</h2>
		
		<?php
			
			// Langschreibweise
			$a = 5;			// 5
			$a = $a + 2;    // 7
			$a = $a + 3;    // 10
			$a = $a + 5;    // 15
			echo $a.'<br/>';
			
			// Kurzschreibweise
			$a = 5;			// 5
			$a += 2;		// 7
			$a += 3;		// 10
			$a += 5;        // 15
			$a++;			// 16
			$a--;			// 15
			echo $a.'<br/>';

			
			$a = 'Hallo';   // Hallo
			$a .= 'Welt';   // HalloWelt
			$a .= '!';      // HalloWelt!
			echo $a;

			
			$li  = '<ul>';
			$li .= '<li>4711</li>';
			$li .= '<li>4711</li>';
			$li .= '<li>4711</li>';
			$li .= '<li>4711</li>';
			$li .= '</ul>';
			
			echo $li;

			$li  = '<ul>';
			for($n=0; $n<5; $n++){
				$li .= '<li>4711</li>';
			}
			$li .= '</ul>';
			
			echo $li;
				
			$edeka = ['Brot', 'Wurst', 'Käse', 'Butter', 'Kaffee'];
				
			$anzahl = count($edeka);
				
			$li  = '<ul>';
			for($n=0; $n<$anzahl; $n++){
				$li .= '<li>'.$edeka[$n].'</li>';
			}
			$li .= '</ul>';
			
			echo $li;
		
		?>
	
	
	</body>

</html>