<?php
echo "<h2><u>Ejercicio 7 strpos()</u></h2>";
$string = "Me encanta php, a mi también me encanta php!";
$busco = "php";

$resultado = strpos($string, $busco);

echo "La palabra <b>$busco</b> aparece por primera vez en la frase '<cite>$string</cite>' en la posición <b>$resultado</b>.";
?>