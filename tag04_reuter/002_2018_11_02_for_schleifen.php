<!DOCTYPE HTML>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Übungen for-Schleifen</title>
    </head>

    <body>

    	
    	<?php
        echo"<!-- Schleife 1 -->";
			
			for($i=13; $i<=29; $i=$i+4)
				{
				  echo "$i ";
				}
		        
        echo"<hr>";
        
        echo"<!-- Schleife 2 -->";
    	
			for($i=2; $i>=-1.25; $i=$i-0.5)
				{
				  echo "$i ";
				}
		
        
        echo"<hr>";
        
        echo"<!-- Schleife 3 -->";
    		
			for($i=2000; $i<=6000; $i=$i+1000)
				{
				  echo "$i ";
				}
		
		        
        echo"<hr>";
        
        echo"<!-- Schleife 4 -->";
		
			for($i=5; $i<=13; $i=$i+2)
				{
				  echo "Z$i ";
				}
    	
        
        echo"<hr>";
        
        echo"<!-- Schleife 5 -->";
		
			for($i=1; $i<=3; $i=$i+1)
				{
				  echo "a b$i ";
				}    	
		
		
        
        echo"<hr>";
        
        echo"<!-- Schleife 6 -->";
		
			for($i=2; $i<=22; $i=$i+10)
				{
				  $j = $i +1;
				  echo "c$i c$j ";
				}
    	
				
        
        echo"<hr>";
        
        echo"<!-- Schleife 7 -->";
    	
			for($i=13; $i<=45; $i=$i+4)
				{
				  if($i<=21 || $i>=33)
				  	{
						echo "$i ";
					}
				}
        
        echo"<hr>";
    	?>
    </body>
</html>
