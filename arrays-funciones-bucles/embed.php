<?php
$nombre = "Dario";
$numazar = rand(0, 1);
//echo $numazar;
$arraySitiosWeb = ["Google" => "https://google.com", "Facebook" => "https://facebook.com", "Twitter" => "https://twitter.com"];
$arrayProductos = [
  0 => [
    "id" => 1,
    "titulo" => "Lorem Ipsum",
    "descripcion" => "Lorem Ipsum",
    "precio" => 200,
    "imagen" => "img-pdto-1.jpg",
    "enOferta" => true
  ],
  1 => [
    "id" => 2,
    "titulo" => "Lorem Ipsum",
    "descripcion" => "Lorem Ipsum",
    "precio" => 300,
    "imagen" => "img-pdto-2.jpg",
    "enOferta" => true
  ],
  2 => [
    "id" => 3,
    "titulo" => "Lorem Ipsum",
    "descripcion" => "Lorem Ipsum",
    "precio" => 400,
    "imagen" => "img-pdto-3.jpg",
    "enOferta" => true
  ],
  3 => [
    "id" => 4,
    "titulo" => "Lorem Ipsum",
    "descripcion" => "Lorem Ipsum",
    "precio" => 500,
    "imagen" => "img-pdto-4.jpg",
    "enOferta" => true
  ],
  4 => [
    "id" => 5,
    "titulo" => "Lorem Ipsum",
    "descripcion" => "Lorem Ipsum",
    "precio" => 600,
    "imagen" => "img-pdto-5.jpg",
    "enOferta" => true
  ],
  5 => [
    "id" => 6,
    "titulo" => "Lorem Ipsum",
    "descripcion" => "Lorem Ipsum",
    "precio" => 700,
    "imagen" => "img-pdto-6.jpg",
    "enOferta" => true
  ]
];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <h1>La Internet</h1>
  <marquee>Bienvenidos al mundo de la internet</marquee>
  <h2>Bienvenido <?= $nombre ?></h2>
  <h3>¿Es usted un ganador?</h3>
  <?php
  if ($numazar == 1) {
    echo "SI";
  } else {
    echo "NO";
  }
  ?>
  <h3>Algunos sitios interesantes:</h3>

  <?php
  foreach ($arraySitiosWeb as $sitios => $hr) {
    echo "<ul><li><a href=$hr>$sitios</a></li></ul>";
  }
  ?>


  <!-- <ul>
      <li>
        <a href="https://google.com">Google</a>
      </li>
      <li>
        <a href="https://facebook.com">Facebook</a>
      </li>
      <li>
        <a href="https://twitter.com">Twitter</a>
      </li>
    </ul> -->
</body>

</html>