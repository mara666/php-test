<?php
echo "<h2><u>Bucles - Ejercicio 1</u></h2>";
$dos = 2;

for ($i = 0; $i < 11; $i++) {
    echo "$dos x $i =" . $dos * $i . "<br>";
}
?>

<?php
echo "<h2><u>Bucles - Ejercicio 2</u></h2>";
$a = 100;
while ($a > 84) {
    echo $a . "<br>";
    $a--;
}
?>

<?php
echo "<h2><u>Bucles - Ejercicio 3</u></h2>";
$contador = [1, 2, 3, 4, 5];
$i = 0;
while ($i < count($contador)) {
    echo $contador[$i] * 2 . "<br>";
    $i++;
}
?>

<?php
echo "<h2><u>Bucles - Ejercicio 4</u></h2>";
$tiros = 0;
$acumulado_caras = 0;

while ($acumulado_caras < 5) {
    $moneda = rand(0, 1);
    $tiros++;
    $acumulado_caras = $acumulado_caras + $moneda;
}
echo "<b>Número de caras:</b> " . $acumulado_caras . "<br>";
echo "<b>Número de tiros:</b> " . $tiros;
?>

<?php
echo "<h2><u>Bucles - While - Ejercicio 5</u></h2>";

$nombres = ["Dario", "Axel", "Franco", "Gabriela", "Gustavo"];

$i = 0;
while ($i < count($nombres)) {
    echo "<li>" . $nombres[$i] . "</li>";
    $i++;
}
?>

<?php
echo "<h2><u>Bucles - For - Ejercicio 5</u></h2>";
$nombres = ["Dario", "Axel", "Franco", "Gabriela", "Gustavo"];

for ($i = 0; $i < count($nombres); $i++) {
    echo "<li>" . $nombres[$i] . "</li>";
}
?>

<?php
echo "<h2><u>Bucles - Do/While - Ejercicio 5</u></h2>";
$nombres = ["Dario", "Axel", "Franco", "Gabriela", "Gustavo"];

$i = 0;
do {
    echo "<li>" . $nombres[$i] . "</li>";
    $i++;
} while ($i < count($nombres));
?>

<?php
echo "<h2><u>Bucles - Foreach - Ejercicio 5</u></h2>";
$nombres = ["Dario", "Axel", "Franco", "Gabriela", "Gustavo"];

foreach ($nombres as $nombre) {
    echo "<li>" . $nombre . "</li>";
}
?>

<?php
echo "<h2><u>Bucles - Ejercicio 6</u></h2>";
$aleatorio = [];
for ($i = 0; $i < 10; $i++) {
    array_push($aleatorio, rand(0, 10));
    if ($aleatorio[$i] == 5) {
        echo "se encontró un 5 en la posición n° " . $i . " del array";
        //exit;
    }
}
?>

<?php
echo "<h2><u>Bucles - Ejercicio 7</u></h2>";
$aleatorios = []; //array vacio para rellenar mediante la funcio array_push
$cantpares = 0; //inicializo el contador de pares en 0
for ($i = 0; $i < 10; $i++) { //establezco el limite para generar n° aleatorios
    array_push($aleatorios, rand(0, 100)); //genero numeros aleatorios entre 0 y 100 y los agrego al array
}
foreach ($aleatorios as $aleatorio) { //recorro todos los elementos del array
    if ($aleatorio % 2 == 0) {  //aca pregunto si cada elemento es par
        $cantpares++; //sumo la cantidad de elementos pares
    }
}
var_dump($aleatorios); //muestro el array con su contenido
echo "Cantidad de numeros pares <b>" . $cantpares . "</b>"; //imprimo contador de n° pares

?>

<?php
echo "<h2><u>Bucles - Ejercicio 8</u></h2>";
//ejercicio 8
$mascota = [
    "animal" => "perro",
    "edad" => 10,
    "altura" => 1,
    "nombre" => "jonas"
];
foreach ($mascota as $campo => $valor) {
    echo "$campo: " . $valor . "<br>";
}
?>

<?php
echo "<h2><u>Bucles - Ejercicio 9</u></h2>";
$ceu = [
    "Italia" => "Roma",
    "Luxembourg" => "Luxembourg",
    "Bélgica" => "Bruselas",
    "Dinamarca" => "Copenhagen",
    "Finlandia" => "Helsinki",
    "Francia" => "Paris",
    "Slovakia" => "Bratislava",
    "Eslovenia" => "Ljubljana",
    "Alemania" => "Berlin",
    "Grecia" => "Athenas",
    "Irlanda" => "Dublin",
    "Holanda" => "Amsterdam",
    "Portugal" => "Lisbon",
    "España" => "Madrid",
    "Suecia" => "Stockholm",
    "Reino Unido" => "London",
    "Chipre" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Republica Checa" => "Prague",
    "Estonia" => "Talljin",
    "Hungría" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valleta",
    "Austria" => "Vienna",
    "Polonia" => "Warsaw"
];

foreach ($ceu as $pais => $capital) {
    echo "$capital: " . $pais . "<br>";
}
?>

<?php
echo "<h2><u>Bucles - Ejercicio 10</u></h2>";
$ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fe"],
    "Brasil" => ["Brasilia", "Río de Janeiro", "Sao Paulo"],
    "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
    "Francia" => ["Paris", "Nantes", "Lyon"],
    "Italia" => ["Roma", "Milan", "Venecia"],
    "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

foreach ($ceu as $pais => $ciudades) {
    echo "Las ciudades de " . $pais . " son: <br><br>";
    foreach ($ciudades as $ciudad) {
        echo "<li>" . $ciudad . "</li>" . "<br>";
    }
}

echo "<hr>";
echo "<h2><u>Bucles - Ejercicio 15</u></h2>";

foreach ($ceu as $pais => $ciudades){
    $Pais = [
        "Ciudades" => $ciudades,
        "EsAmericano" => ($pais == "Argentina" || $pais == "Brasil" || $pais = "Colombia")
    ];
    var_dump($Pais);
}

?>

<?php
echo "<hr>";
echo "<h2><u>Bucles - Ejercicio 15</u></h2>";
$ceu2 = [
    "Argentina" => [
        "ciudades" => ["Buenos Aires", "Córdoba", "Santa Fe"],
        "esAmericano" => true
    ],
    "Brasil" => [
        "ciudades" => ["Brasilia", "Río de Janeiro", "Sao Paulo"],
        "esAmericano" => true
    ],
    "Colombia" => [
        "ciudades" => ["Cartagena", "Bogota", "Barranquilla"],
        "esAmericano" => true
    ],
    "Francia" => [
        "ciudades" => ["Paris", "Nantes", "Lyon"],
        "esAmericano" => false
    ],
    "Italia" => [
        "ciudades" => ["Roma", "Milan", "Venecia"],
        "esAmericano" => false
    ],
    "Alemania" => [
        "ciudades" => ["Munich", "Berlin", "Frankfurt"],
        "esAmericano" => false
    ]
];

foreach ($ceu2 as $pais => $ciudades) {
    echo "Las ciudades de " . $pais . " son: <br><br>";
    foreach($ciudades as $ciudad => $valores){
            echo "<li>" . $valores . "</li>" . "<br>";
        
    }
}

?>

</html>