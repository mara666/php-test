<?php
$arrayProductos = [
    0 => [
        "id" => 1,
        "nombre" => "Nombre 1",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
        "imagen" => 'img/img-phone-01.jpg',
        "precio" => 4000,
        "estaEnOferta" => true
    ],
    1 => [
        "id" => 2,
        "nombre" => "Nombre 2",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
        "imagen" => 'img/img-phone-02.jpg',
        "precio" =>  1000,
        "estaEnOferta" => false
    ],
    2 => [
        "id" => 3,
        "nombre" => "Nombre 3",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
        "imagen" => 'img/img-phone-03.jpg',
        "precio" =>  1000,
        "estaEnOferta" => true
    ],
    3 => [
        "id" => 4,
        "nombre" => "Nombre 4",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
        "imagen" => 'img/img-phone-01.jpg',
        "precio" => 1000,
        "estaEnOferta" => false
    ],
    4 => [
        "id" => 5,
        "nombre" => "Nombre 5",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
        "imagen" => 'img/img-phone-02.jpg',
        "precio" =>  4000,
        "estaEnOferta" => true
    ],
    5 => [
        "id" => 6,
        "nombre" => "Nombre 6",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
        "imagen" => 'img/img-phone-03.jpg',
        "precio" =>  1000,
        "estaEnOferta" => true
    ]
];

//Ejercicio 11
function descripcionLarga($nomArt)
{
    global $arrayProductos;
    foreach ($arrayProductos as $productos) {
        if ($nomArt == $productos['nombre']) {
            return $productos['descripcion'];
        }
    }
}

function verDescuento($evaluarOferta)
{
    global $arrayProductos;
    foreach ($arrayProductos as $productos) {
        $descuento = ($productos['precio'] * 20 / 100);
        $sinDescuento = $productos['precio'];
        $conDescuento = ($productos['precio'] - $descuento);
        if ($evaluarOferta == $productos['estaEnOferta'] && $productos['estaEnOferta'] == true) {
            return "<b>Precio: $" . $conDescuento . "</b>";
        } else {
            return "<b>Precio: $" . $sinDescuento . "</b>";
        }
    }
}

?>

<section class="product-container">
    <?php foreach ($arrayProductos as $productos) : ?>
        <article class="producto">
            <img class="main-photo" src=<?= $productos['imagen'] ?> alt="">
            <h2 class="name"><?= $productos['nombre'] ?></h2>
            <p><?= descripcionLarga($productos['nombre']) ?></p> <!--Ejercicio 12 -->
            <p><?= verDescuento($productos['estaEnOferta']) ?></p>
            <a class="more" href="#">Ver más</a>
        </article>
    <?php endforeach; ?>
</section>

<!-- function descPrecio($descuento20)
{
    global $arrayProductos;
    foreach ($arrayProductos as $productos) {
        $descuento = ($productos['precio'] * 20/100);
        $conDescuento = ($productos['precio'] - $descuento);
        $sinDescuento = $productos['precio'];
        if (($descuento20 == $productos['precio']) && ($productos['estaEnOferta'] == true)) {            
            return "<b>Precio: $" . $conDescuento . "</b>";
        }else{
            return "<b>Precio: $" . $sinDescuento . "</b>";
        }
    }
} -->