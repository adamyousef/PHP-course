<?php


if (isset($_POST['celsius'])) {
    $c = $_POST['celsius'];
    $f = ($c * 9/5) + 32;
    echo "<pre>$c Celsius is " .$f ." Fahrenheit</pre>";
}

if (isset($_POST['fahren'])) {
    $fah = $_POST['fahren'];
    $cen = ($fah - 32) / 1.8;
    echo "<pre>$fah Fahrenheit is " .$cen ." Celsius</pre>";
}

// (°F - 32) / 1.8 = °C


echo <<<_END

<pre>
<form method="post" action="10-unit-converter.php">

Celsius to Fahrenheit:
    <input type="text" name="celsius" size="7" />
    <input type="submit" value="Fahrenheit" />

<br>

Fahrenheit to Celsius: 
    <input type="text" name="fahren" size="7" />
    <input type="submit" value="Celsius" />



</form>
</pre>


_END

?>