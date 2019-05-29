<html>
<head>
<?php
include("funciones.php");
include("superficie.php");
?>
</head>
<br>
<h3>TODO JUNTO</h3>
</html>
<?php
function maySup($r1, $r2, $r3){
    $supC1 = circulo($r1);
    $supC2 = circulo($r2);
    $supC3 = circulo($r3);
    $may = mayor($supC1, $supC2, $supC3);
    return $may;
}

echo "Mayor superficie: <br><br>".maySup(4, 1, 0);
?>