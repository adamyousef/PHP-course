<!DOCTYPE HTML>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>if/else</title>
    </head>

    <body>
    	<?php
			if($kraftstoff == "D")
				{
					$rechnung = 100 * 1.37;
					echo $rechnung;	
				}
			else
				{
					if($kraftstoff == "S")
						{
							$rechnung == 100 * 1.52;
							echo $rechnung;	
						}
					else
						{
							if($kraftstoff == "E")
								{
									$rechnung == 100 * 0.34;
									echo $rechnung;	
								}
							else
								{
									if($kraftstoff == "A")
										{
											$rechnung == 100 * 0.6;
											echo $rechnung;	
										}
								}
						}
				}
    	?>
    </body>
</html>
