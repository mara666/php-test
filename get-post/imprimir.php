<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imprimir</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php include_once("validar.php")?>

<div class="alert alert-success" role="alert">
    <h3 class="alert-heading">Bienvenido</h3>
    <?php foreach($_POST as $nombre => $valor):?>
    <p><b><?=$nombre?> :</b> <?=$valor?></p>
    <?php endforeach;?>
</div>

<!-- Ejercicio 4 -->
<?php
echo "<br><h2>getAllHeaders()</h2>";
foreach (getallheaders() as $nombre => $valor) {
    echo "$nombre: $valor\n";
}
?>

<!-- Ejercicio 5 -->
<?php
echo "<br><br><h2>$ _ SERVER</h2>";
var_dump($_SERVER);
?>

<?php
echo "<br><br><h2>$ _ FILES</h2>";
var_dump($_FILES);
?>

<?php
echo "<br><br><h2>$ _ REQUEST</h2>";
var_dump($_REQUEST);
?>

<?php
echo "<br><br><h2>$ _ SESSION</h2>";
var_dump($_SESSION);
?>

<?php
echo "<br><br><h2>$ _ COOKIE</h2>";
var_dump($_COOKIE);
?>

<?php
echo "<br><br><h2>$ _ GLOBALS</h2>";
var_dump($GLOBALS);
?>

