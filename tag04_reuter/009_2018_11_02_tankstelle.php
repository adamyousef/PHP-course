<!DOCTYPE HTML>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>switch/case</title>
    </head>

    <body>
    	<?php
			switch($kraftstoff)
				{
					case "A":	$rechnung = 100 * 0.6;
					break;
					
					case "E":	$rechnung = 100 * 0.38;
					break;
					
					case "D":	$rechnung = 100 * 1.4;
					break;
					
					case "S":	$rechnung = 100 * 1.53;
					break;
					
					default:	echo "Falsche Sorte angegeben!";
				}
    	?>
    </body>
</html>
