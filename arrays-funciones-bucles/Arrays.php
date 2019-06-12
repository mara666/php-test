<?php

// $persona1 = ['dario', 'marañes', 28];

// echo $persona1[0];

// $persona2 = Array('jose', 'perez', 25, $persona1);

// echo "<br>". $persona2[3][2];


// $persona = [
//     'nombre' => 'Jon',
//     'apellido' => 'Snow',
//     'edad' => 27,
//     'hobbies' => ['netflix', 'futbol', 'programar']
// ];

// $persona['edad'] = 25;
// echo $persona['edad']."<br>";

// $persona[] = ['direccion'=>'winterfall'];

// var_dump($persona);

// $hobbies = $persona['hobbies'];
// $hobbies[]= 'pescar';

// var_dump ($hobbies);
// ?>

<?php
    /*ejercicio 1*/
    $num1 = 10;
    $num2 = 9999;

    if($num1>$num2){
        echo "El número mayor es ".$num1."<br>";
    }else{
        echo "El número mayor es ".$num2."<br>";
    }
?>

<?php
/*ejercicio 2*/
    $x = 1;
    $y = 5;

    $numrandom = rand($x, $y);
    echo "<br>"."El numero random de la PRIMER funcion es: ". $numrandom;

    if($numrandom == 3 || $numrandom == 5){
        echo "<br>".$numrandom."<br>";
    }else{
        echo "<br>". "el numero es distinto de 3 o 5"."<br>";    
    }
?>

<?php
/*ejercicio 3*/
    $x = 1;
    $y = 5;

    $numrandom = rand($x, $y);
    echo "<br>"."El numero random de la SEGUNDA funcion es: ".$numrandom."<br>";

    if($numrandom != 3){
        echo "<br>"."el número no es 3";
    }else{
        echo "<br>".$numrandom."<br>";    
    }
?>


<?php
/*ejercicio 4*/
    $x = 1;
    $y = 100;

    $numrandom = rand($x, $y);
    echo "<br>"."<br>"."El numero random de la TERCER funcion es: ".$numrandom."<br>";

    if($numrandom > 50){
        echo "<br>"."El número es mayor a 50";
    }elseif($numrandom < 50){
        echo "<br>"."El número es menor a 50";    
    }
    else{
        echo "<br>"."El número es igual a 50";
    }
?>

<?php
/*ejercicio 5*/
    $nombreDeUsuario = "admin";
    $contraseniaDeUsuario = "1234";

    if($nombreDeUsuario == "admin" && $contraseniaDeUsuario == "1234"){
        echo "<br>"."<br>"."Bienvenido!";
    }elseif($nombreDeUsuario != "admin" && $contraseniaDeUsuario == "1234"){
        echo "<br>"."<br>"."Hay un error en el nombre de usuario";
    }elseif($nombreDeUsuario == "admin" && $contraseniaDeUsuario != "1234"){
       echo "<br>"."<br>"."Hay un error en la contraseña";
    }else{
    echo "<br>"."<br>"."Hay un error en el login";
    }
?>


<?php
/* Ejercicio 6 y 6-a */
    $edad = 81;
    $casado = true;
    $sexo = "masculino";

    if($edad > 18 && $casado == true && $sexo == "otro"){
        echo "<br>"."<br>"."Bienvenido...";
    }else{
        echo "<br>"."<br>"."No cumple con las condiciones para acceder";
    }
?>

<?php
/* Ejercicio 7 */
    $cantidadDeAlumnos = 10;

    if($cantidadDeAlumnos){
        echo "true"."<br>"."<br>";
    }
    else{
        echo "false"."<br>"."<br>";
    }
?>

<?php
/* Ejercicio 8 */
$numero = 90;

if($numero%2 ?: 0){
    echo "El número es par"."<br>"."<br>";
}else{
    echo "El número es impar"."<br>"."<br>";
}

?>

<?php
/* Ejercicio 9 */
$nota = 10;

switch($nota){
        case ($nota<4):
        echo "desaprobado";
        break;
    case ($nota == 4 || $nota == 5):
        echo "Zafamos";
        break;
    case ($nota>=6 && $nota<=8):
        echo "Bien!!!";
        break;
    case ($nota == 9):
        echo "MUY bien!!";
        break;
    case ($nota == 10):
        echo "Excelente!!!!!";
        break;
    /* Ejercicio 9 */
    default:
        echo "El número no es válido";
}

?>