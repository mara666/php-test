<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado Usuarios</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="text-center">
<?php
echo "<h2>Listado de usuarios</h2>";
$usuariosJSON = file_get_contents("usuarios.json");
//var_dump($usuarios);exit;

$usuariosArray = json_decode($usuariosJSON, true);
//var_dump($usuariosArray);exit;

foreach($usuariosArray as $usuario){
    foreach($usuario as $clave => $valor){
        //echo $clave;
        foreach($valor as $valores => $resultados){
            //echo $valores;
            foreach ($resultados as $resfinal){
                echo "<a href='perfil.php?email=>".$resultados["email"]."</a><br>";
            }
        }
    }
}

?>

<br>
    <h5><a href="register.php">Volver al formulario de registro</a></h5>
</body>