<!DOCTYPE HTML>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Logische Operatoren</title>
    </head>

    <body>
    	<?php
			// Logische Operatoren
			// 	||	Logische Oder
			//	&&	Logische UND
			//	!	Logische Nicht
			
			$benutzer	= "Schmidt";
			$kennwort   = "Hase";
			
			if($benutzer == "Schmidt" &&  $kennwort == "Hase")
				{
					echo "Zugang gestattet!";	
				}
			else
				{
					echo "Kein Zutritt!";	
				}
				
			echo "<hr>";
				
			$zahl = 22;
			
			if($zahl != 22)
				{
					echo "Verloren!";	
				}
			else
				{	
					echo "Gewonnen!";
				}
				
    	?>
    </body>
</html>
