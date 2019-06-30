<!DOCTYPE HTML>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>switch/case</title>
    </head>

    <body>
	
    	<?php
				
		$kraftstoffart = "A";
		$kraftstoffmenge = "50";
		$währung = "€";
	
		
		
		$super = "S";
		$diesel = "D";
		$autogas = "A";
		$energie = "E";
		
		
		$preisS = 1.50;
		$preisD = 1;
		$preisA = 0.50;
		$preisE = 0.25;	
		$rabatt = 0.9;


		$rabattart = "diesel";
			switch($rabattart)
				{
					
						case "alle":
							$preisS = $preisS*$rabatt;
							$preisD = $preisD*$rabatt;
							$preisA = $preisA*$rabatt;
							$preisE = $preisE*$rabatt;					
							break;
					
						case "diesel":
							$preisD = $preisD*$rabatt;
							break;
					
						default:
						echo "Falsche Sorte angegeben!";
				}


switch ($kraftstoffart) {
					case "S":	
					$rechnung = $kraftstoffmenge * $preisS;
					$preis_pro_liter = round($kraftstoffmenge/$preisS, 2);
					echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung pro Liter.";
					break;
					
					case "D":	
					$rechnung = $kraftstoffmenge * $preisD;
					$preis_pro_liter = round($kraftstoffmenge/$preisD, 2);
					echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung pro Liter.";
					break;

					case "A":	
					$rechnung = $kraftstoffmenge * $preisA;
					$preis_pro_liter = round($kraftstoffmenge/$preisA, 2);
					echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung pro Liter.";
					break;
					
					case "E":	
					$rechnung = $kraftstoffmenge * $preisE;
					$preis_pro_liter = round($kraftstoffmenge/$preisE, 2);
					echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung pro Liter.";
					break;
					
					default:
					echo "Falsche Sorte!";
}
?>



		
    </body>
</html>
