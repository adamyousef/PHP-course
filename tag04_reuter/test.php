<!DOCTYPE html>
<html>
<body>

<?php
$kraftstoffart = "A";
		$preisS = 1.50;
		$preisD = 1;
		$preisA = 0.50;
		$preisE = 0.25;	
		
		
		$kraftstoffmenge = "10";
		$währung = "€";

switch ($kraftstoffart) {
					case "S":	
					$rechnung = $kraftstoffmenge * $preisS;
					$preis_pro_liter = round($kraftstoffmenge/$preisS, 2);
					echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung";
					echo "case S s";
					break;
					
					case "D":	
					$rechnung = $kraftstoffmenge * $preisD;
					$preis_pro_liter = round($kraftstoffmenge/$preisD, 2);
					echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung";
					echo "case D d";
					break;
					case "A":	
					$rechnung = $kraftstoffmenge * $preisA;
					$preis_pro_liter = round($kraftstoffmenge/$preisA, 2);
					echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung";
					echo "case A a";
					break;
					
					case "E":	
					$rechnung = $kraftstoffmenge * $preisE;
					$preis_pro_liter = round($kraftstoffmenge/$preisE, 2);
					echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung";
					echo "case E e";
					break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
</body>
</html>