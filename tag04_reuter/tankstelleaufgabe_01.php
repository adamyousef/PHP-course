<!DOCTYPE HTML>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>switch/case</title>
    </head>

    <body>

<?php

		$kraftstoffart = "A";
		$kraftstoffmenge = 50;
		$währung = "€";



		$super = "S";
		$diesel = "D";
		$autogas = "A";
		$energie = "E";


		$preisS = 1.50;
		$preisD = 1;
		$preisA = 0.50; 
		$preisE = .25; //Geht auch ohne 0 am Anfang
		
		$rabatt = .9;




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
				}


    switch ($kraftstoffart) {
      case "S":
      case "s":
      	$rechnung = number_format($kraftstoffmenge * $preisS, 2, ",", ".");
        $preis_pro_liter = number_format($preisS, 2, ",", ".");
      	echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung pro Liter.";
      	break;

      case "D":
      case "d":
        $rechnung = number_format($kraftstoffmenge * $preisD, 2, ",", ".");
        $preis_pro_liter = number_format($preisD, 2, ",", ".");
      	echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung pro Liter.";
      	break;

      case "A":
      case "a":
        $rechnung = number_format($kraftstoffmenge * $preisA, 2, ",", ".");
        $preis_pro_liter = number_format($preisA, 2, ",", ".");
      	echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung pro Liter.";
      	break;

      case "E":
      case "e":
        $rechnung = number_format($kraftstoffmenge * $preisE, 2, ",", ".");
        $preis_pro_liter = number_format($preisE, 2, ",", ".");
      	echo "Sie bezahlen: $rechnung $währung für $kraftstoffmenge Liter. Das entspricht : $preis_pro_liter $währung pro Liter.";
      	break;

      default:
      	$err = 'Falscher Wert';
    }
if(!isset($err)) { ?>
<table>
  <th>
    <tr>
      <td>Liter</td>
      <td>Preis pro Liter</td>
      <td>Betrag</td>
    </tr>
  </th>
  <tr>
    <td><?php echo $kraftstoffmenge ?></td>
    <td><?php echo $preis_pro_liter ?></td>
    <td><?php echo $rechnung ?></td>
  </tr>
</table>
<?php } else echo $err ?>
