<?php
$funcionesEjecutadas = 0;
include("funciones.php");
echo "<hr>";
include("superficie.php");
echo "<hr>";
?>

<?php
echo "<h2><u>Ejercicio 4 - TODO JUNTO</u></h2>";
function maySup($r1, $r2, $r3)
{
    $supC1 = circulo($r1);
    $supC2 = circulo($r2);
    $supC3 = circulo($r3);
    $may = mayor($supC1, $supC2, $supC3);
    return $may;
}

echo "Mayor superficie: " . maySup(4, 1, 0);
?>


<?php
echo "<h2><u>Ejercicio 5 y 6 - Funciones Ejecutadas</u></h2>";
echo "Funciones Ejecutadas: " . $funcionesEjecutadas;
?>