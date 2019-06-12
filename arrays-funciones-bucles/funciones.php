<?php
echo "<h2><u>Funciones - Ejercicio 1.1</u></h2>";
function mayor($num1, $num2, $num3)
{
    global $funcionesEjecutadas; //se utiliza para los ejercicios 6 y 7
    $funcionesEjecutadas++; //se utiliza para los ejercicios 6 y 7
    if ($num1 > $num2 && $num1 > $num3) {
        return $num1;
    } else if ($num2 > $num1 && $num2 > $num3) {
        return $num2;
    } else {
        return $num3;
    }
}
echo mayor(1171, 1, 110);
?>

<?php
echo "<h2><u>Funciones - Ejercicio 1.2</u></h2>";
function tabla($base, $limite)
{
    global $funcionesEjecutadas; //se utiliza para los ejercicios 6 y 7
    $funcionesEjecutadas++; //se utiliza para los ejercicios 6 y 7
    while ($base <= $limite) {
        echo $base . "<br>";
        $base++;
    }
}
echo tabla(12333, 12340);
?>

<?php
echo "<h2><u>Funciones - Ejercicio 1.3</u></h2>";
function mayor2($num1, $num2, $num3 = 100)
{
    global $funcionesEjecutadas; //se utiliza para los ejercicios 6 y 7
    $funcionesEjecutadas++; //se utiliza para los ejercicios 6 y 7

    $arrayNum = [$num1, $num2, $num3];

    $numMax = $arrayNum[0];

    foreach ($arrayNum as $valor) {
        if ($valor > $numMax) {
            $numMax = $valor;
        }
    }
    return $numMax;
}

echo mayor2(110, 4444);
?>

<?php
echo "<h2><u>Funciones - Ejercicio 1.4</u></h2>";
function tabla2($base, $limite = 100)
{
    global $funcionesEjecutadas; //se utiliza para los ejercicios 6 y 7
    $funcionesEjecutadas++; //se utiliza para los ejercicios 6 y 7
    while ($base <= $limite) {
        echo $base . "<br>";
        $base++;
    }
}
echo tabla2(95);
?>