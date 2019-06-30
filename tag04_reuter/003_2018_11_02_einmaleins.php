<!DOCTYPE HTML>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Einmaleins</title>
    </head>

    <body>

    	
    	<?php
        	for($i=1; $i<=10; $i=$i+1)
				{
					for($j=1; $j<=10; $j=$j+1)
						{
							$ergebnis = $i * $j;
							echo "$ergebnis ";						
						}	
					echo"<br>";								
				}	
				
    	?>
    </body>
</html>
