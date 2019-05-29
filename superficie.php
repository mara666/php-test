<html>
<h3>Funciones - Ejercicio 2-a</h3>
</html>
<?php
function triangulo($base, $altura){
    return $base*$altura;
}
echo "La superficie del triangulo es: ". triangulo (10, 2)
?>

<html>
<h3>Funciones - Ejercicio 2-b</h3>
</html>
<?php
function rectangulo($base, $altura){
    return $base*$altura;
}
echo "La superficie del rectangulo es: ".rectangulo (12, 3)
?>

<html>
<h3>Funciones - Ejercicio 2-c</h3>
</html>
<?php
function cuadrado($base, $altura){
    return $base*$altura;
}
echo "La superficie del cuadrado es: ".cuadrado (11, 4)
?>

<html>
<h3>Funciones - Ejercicio 2-d</h3>
</html>
<?php
function circulo($radio){
    return pi()*$radio*$radio;
    
}
echo circulo (10)
?>