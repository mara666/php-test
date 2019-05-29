<html>
<h3>Funciones - Ejercicio 1-a</h3>
</html>
<?php
function mayor($num1, $num2, $num3){
    if($num1>$num2 && $num1>$num3){
        return $num1;
    }else if($num2>$num1 && $num2>$num3){
        return $num2;
    }else{
        return $num3;
    }
}
echo mayor(1171, 1, 110);
?>

<html>
<h3>Funciones - Ejercicio 1-b</h3>
</html>
<?php
function tabla($base, $limite){
while ($base <= $limite) {
    echo $base . "<br>";
    $base++;
}
}
echo tabla(12333, 12340);
?>

<html>
<h3>Funciones - Ejercicio 1-c</h3>
</html>
<?php
function mayor2($num1, $num2, $num3=100){

$arrayNum = [$num1, $num2, $num3];

$numMax = $arrayNum[0];

foreach($arrayNum as $valor){
    if($valor > $numMax){
        $numMax = $valor;
    }
}
return $numMax;
}

echo mayor2(110, 4444);
?>

<html>
<h3>Funciones - Ejercicio 1-d</h3>
</html>
<?php
function tabla2($base, $limite=100){
while ($base <= $limite) {
    echo $base . "<br>";
    $base++;
}
}
echo tabla2(98);
?>

