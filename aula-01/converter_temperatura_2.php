<?php
function celsiusParaFahrenheit($celsius) {
	$fahrenheit = $celsius * (9 / 5);
	$fahrenheit += 32;
	return $fahrenheit;
}

echo celsiusParaFahrenheit(40);

?>
