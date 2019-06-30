<?php 
echo '<hr>';
echo '<br>';

// 13, 17, 21, 25, 29
echo "1. Zahlenreihe<br> ";
for($i=13 ; $i<=29 ; $i+=4) {
	echo $i.' ';
}
echo '<br>';
echo '<br>';
// 2 1.5 1 0.5 0 -0.5 -1
echo "2. Zahlenreihe<br> ";
for($i=2 ; $i>=-1 ; $i-=0.5) {
	echo $i.' ';
}
echo '<br>';
echo '<br>';

// 2000, 3000, 4000, 5000, 6000
echo "3. Zahlenreihe<br> ";
for($i=2000 ; $i<=6000 ; $i+=1000) {
	echo $i.' ';
}
echo '<br>';
echo '<br>';

// Z5 Z7 Z9 Z11 Z13
echo "4. Zahlenreihe<br> ";
for($i=5 ; $i<=13 ; $i+=2) {
	echo 'Z'.$i.' ';
}
echo '<br>';
echo '<br>';


// a b1 a b2 a b3
echo "5. Zahlenreihe<br> ";
for($i=1 ; $i<=3 ; $i++) {
	echo 'a b'.$i.' ';
}
echo '<br>';
echo '<br>';

//Denkansatz 6: Variable?
// c2 c3 c12 c13 c22 c23
echo "6. Zahlenreihe Variante 1  (og) <br> ";
if ($i <= 4){
	for($i=2 ; $i<=3 ; $i++) {
		echo 'c'.$i.' ';
		}
	}
if ($i = 3){
		for($i=12 ; $i<=13 ; $i++) {
			echo 'c'.$i.' ';
			}
	}
if ($i = 13){
		for($i=22 ; $i<=23 ; $i++) {
			echo 'c'.$i.' ';
			}
}
echo '<br>';
echo '<br>';
echo "6. Zahlenreihe Variante 2 in Clever<br> ";
for($i=2 ; $i<=22 ; $i+=10) {
	$j = $i +1;
	echo "c$i c$j ";
}
echo '<br>';
echo '<br>';
//Denkansatz 7: if/else ?
// 13 17 21 33 37 41 45
echo "7. Zahlenreihe Variante 1 (og) <br> ";
$i=0;
if ($i <= 21){
	for($i=13 ; $i<=21 ; $i+=4) {
		echo $i.' ';
		}
	}
if ($i <= 45){
		for($i=33 ; $i<=45 ; $i+=4) {
			echo $i.' ';
			}
	}
	
echo '<br>';
echo '<br>';	
echo "7. Zahlenreihe Variante 2 <br> ";	

	for($i=13 ; $i<=45 ; $i+=4) {
		
		if($i<=21 || $i>=33){
		echo $i.' ';
		}
	}

echo '<br>';
echo '<br>';
echo '<hr>';

?>