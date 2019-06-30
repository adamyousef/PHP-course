<!DOCTYPE HTML>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Einmaleins</title>
        
        <style>
			table, tr, td { border: 1px solid #000;}
		</style>
    </head>

    <body>

    	<table>
    	<?php
        	for($i=1; $i<=10; $i=$i+1)
				{
					echo "<tr>";
						for($j=1; $j<=10; $j=$j+1)
							{
								$ergebnis = $i * $j;
								echo "<td>$ergebnis</td>";						
							}	
					echo"</tr>";								
				}	
				
    	?>
        </table>
    </body>
</html>
