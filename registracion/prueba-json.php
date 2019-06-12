<?php

$usuariosJSON = file_get_contents("usuarios.json");

$usuariosArray = json_decode($usuariosJSON,true);

echo "<pre>";
var_dump($usuariosArray);exit;

$emailBusqueda = "luiggi@borrachosanonimos.drunk";

for ($i=0; $i < count($usuariosArray); $i++) { 
    echo "$i <br>";
    if($usuariosArray[$i]["email"] === $emailBusqueda) {
        echo "Encontré el email" . $usuariosArray[$i]["email"] . " en la posición $i <br>";
        break;
    }
}

echo "Final";
/*
echo "<pre>";
var_dump($usuariosArray[0]["email"]);exit;

*/