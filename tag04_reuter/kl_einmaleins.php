<?php 
echo '<hr>';
echo '<br>';


for($i=1; $i <= 10; $i++)
{ 
//wenn die äußere schleife 1 mal läuft, läuft die innere 10 mal
	for($j=1; $j <= 10; $j++){
	$erg = $i * $j;	
	echo "$erg ";
	}
	echo '<br>';
}

?>