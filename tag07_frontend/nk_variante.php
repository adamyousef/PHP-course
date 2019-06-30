<?php
//void einmaleins (int $num1,int $num2)
function einmaleins($a1,$a2)
{
echo '<h4>Einmal '.$a2.' !</h4>';
$htm='<table border ="1">';
	for($i=1;$i<=$a1;$i++)
	{
		$htm.='<tr>';
		$htm.='<td>'.$i.'</td>';
		$htm.='<td>'.' X '.'</td>';
		$htm.='<td>'.$a2.'</td>';
		$htm.='<td>'.' = '.'</td>';
		$htm.='<td>'.$i*$a2.'</td>';
		$htm.='</tr>';
	}
$htm.='</table>';
echo $htm;
echo '<br/>';
}
einmaleins(15,22);
einmaleins(7,11);
?>