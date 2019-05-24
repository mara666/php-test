<html><h3>Bucles - Ejercicio 1</h3></html>
<?php
//ejercicio 1
$dos = 2;

for($i=0;$i<11;$i++){
    echo "$dos x $i =".$dos*$i."<br>";
}
?>

<html><h3>Bucles - Ejercicio 2</h3></html>
<?php
//ejercicio 2
$a = 100;
while($a > 84){
    echo $a."<br>";
    $a--;
}
?>

<html><h3>Bucles - Ejercicio 3</h3></html>
<?php
//ejercicio 3
$contador = [1, 2, 3, 4, 5];
$i=0;
while($i<count($contador)){
    echo $contador[$i]*2 ."<br>";
    $i++;
}
?>

<html><h3>Bucles - Ejercicio 4</h3></html>
<?php
//ejercicio 4
$tiros = 0;
$acumulado_caras = 0;
    
while($acumulado_caras<5){
    $moneda = rand(0,1);
    $tiros++;
    $acumulado_caras = $acumulado_caras + $moneda;
}
echo "<b>Número de caras:</b> ".$acumulado_caras."<br>";
echo "<b>Número de tiros:</b> ".$tiros;
?>

<html><h3>Bucles - Ejercicio 5</h3></html>
<b>Con un while:</b><br><br>
<?php
//ejercicio 5 - con While

$nombres = ["Dario", "Axel", "Franco", "Gabriela", "Gustavo"];

$i = 0;
while($i<count($nombres)){
    echo "<li>".$nombres[$i]."</li>";
    $i++;
}
?>

<br><br><b>Con un for:</b><br><br>
<?php
//ejercicio 5 - con For
$nombres = ["Dario", "Axel", "Franco", "Gabriela", "Gustavo"];

for($i=0; $i<count($nombres); $i++){
    echo "<li>".$nombres[$i]."</li>";
}
?>

<br><br><b>Con Do/while:</b><br><br>
<?php
//ejercicio 5 - con do/while
$nombres = ["Dario", "Axel", "Franco", "Gabriela", "Gustavo"];

$i=0;
do{
    echo "<li>".$nombres[$i]."</li>";
    $i++;
}while($i<count($nombres));
?>

<br><br><b>Con Foreach:</b><br><br>
<?php
//ejercicio 5 - con foreach
$nombres = ["Dario", "Axel", "Franco", "Gabriela", "Gustavo"];

foreach($nombres as $nombre){
    echo "<li>".$nombre."</li>";
}
?>

<html><h3>Bucles - Ejercicio 6</h3></html>
<?php
//ejercicio 6
$aleatorio = [];
for($i=0; $i<10; $i++){
    array_push($aleatorio, rand(0, 10));
    if($aleatorio[$i] == 5){
        echo "se encontró un 5 en la posición n° ".$i." del array";
        exit;
    }
}
?>

<html><h3>Bucles - Ejercicio 7</h3></html>
<?php
//ejercicio 7
$aleatorios = []; //array vacio para rellenar mediante la funcio array_push
$cantpares = 0; //inicializo el contador de pares en 0
for($i=0; $i<10; $i++){ //establezco el limite para generar n° aleatorios
    array_push($aleatorios, rand(0, 100)); //genero numeros aleatorios entre 0 y 100 y los agrego al array
}
foreach($aleatorios as $aleatorio){ //recorro todos los elementos del array
    if($aleatorio % 2 == 0){  //aca pregunto si cada elemento es par
        $cantpares++; //sumo la cantidad de elementos pares
    }        
}
var_dump($aleatorios); //muestro el array con su contenido
echo "Cantidad de numeros pares <b>".$cantpares."</b>"; //imprimo contador de n° pares

?>