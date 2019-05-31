<?php
echo "<h2><u>Superficie - Ejercicio 2.1</u></h2>";
function triangulo($base, $altura)
{
    global $funcionesEjecutadas; //se utiliza para los ejercicios 6 y 7
    $funcionesEjecutadas++; //se utiliza para los ejercicios 6 y 7
    return $base * $altura;
}
echo "La superficie del triangulo es: " . triangulo(10, 2)
?>

<?php
echo "<h2><u>Superficie - Ejercicio 2.2</u></h2>";
function rectangulo($base, $altura)
{
    global $funcionesEjecutadas; //se utiliza para los ejercicios 6 y 7
    $funcionesEjecutadas++; //se utiliza para los ejercicios 6 y 7
    return $base * $altura;
}
echo "La superficie del rectangulo es: " . rectangulo(12, 3)
?>

<?php
echo "<h2><u>Superficie - Ejercicio 2.3</u></h2>";
function cuadrado($base, $altura)
{
    global $funcionesEjecutadas; //se utiliza para los ejercicios 6 y 7
    $funcionesEjecutadas++; //se utiliza para los ejercicios 6 y 7
    return $base * $altura;
}
echo "La superficie del cuadrado es: " . cuadrado(11, 4)
?>


<?php
echo "<h2><u>Superficie - Ejercicio 2.4</u></h2>";
function circulo($radio)
{
    global $funcionesEjecutadas; //se utiliza para los ejercicios 6 y 7
    $funcionesEjecutadas++; //se utiliza para los ejercicios 6 y 7
    $resultado = pi() * $radio * $radio;
    return $resultado;
}
echo "La superficie del círculo es: " . circulo(10)
?>