<!DOCTYPE html>
<html lang="de">

	<head>
	
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Tolle Webseite</title>

	</head>
	
	<body>
		
		<h1>echo Ausgabe</h1>
		
		<?php
			
			// Ausgaben mit doppelten oder einfachen Anführungsstrichen
			echo "<h2>Hallo PHP</h2>";
			echo '<h2>Hallo PHP</h2>';
			
			// Mischen ist nicht erlaubt
			// echo '<h2>Hallo PHP</h2>";
			// echo "<h2>Hallo PHP</h2>';
			
			// Schachteln von Anführungsstrichen
			echo 'Heute ist ein "schöner" Freitag<br/>';
			echo "Heute ist ein 'schöner' Freitag<br/>";
			
			// Fehler:
			//echo 'Heuter ist ein 'schöner' Freitag';
			//echo "Heuter ist ein "schöner" Freitag";
			
			// Praxisempfehlung:
			echo '<h2 id="head" style="color:#F00;">Hallo PHP</h2>';
			
			// Alternativen : Maskieren (escapen)
			echo "<h2 id=\"head\" style=\"color:#F00;\">Hallo PHP</h2>";
			echo 'Heute ist ein \'kalter\' Tag.';
			
			// echo - Befehl über mehrere Zeilen
			echo '<ul>
					<li>4711</li>
					<li>4711</li>
					<li>4711</li>
				  </ul>';
			
			echo "<ul>
					<li>4711</li>
					<li>4711</li>
					<li>4711</li>
				  </ul>";
			
		?>
		
		
	</body>
	 

</html>