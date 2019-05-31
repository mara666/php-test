<?php
$arrayProductos = [
	0 => [
		"id" => 1,
		"titulo" => "Lorem Ipsum",
		"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint
			necessitatibus, officia ex.",
		"precio" => 200,
		"imagen" => 'images/img-pdto-1.jpg',
		"enOferta" => true
	],
	1 => [
		"id" => 2,
		"titulo" => "Lorem Ipsum",
		"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint
			necessitatibus, officia ex.",
		"precio" => 300,
		"imagen" => 'images/img-pdto-2.jpg',
		"enOferta" => true
	],
	2 => [
		"id" => 3,
		"titulo" => "Lorem Ipsum",
		"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint
			necessitatibus, officia ex.",
		"precio" => 400,
		"imagen" => 'images/img-pdto-3.jpg',
		"enOferta" => false
	],
	3 => [
		"id" => 4,
		"titulo" => "Lorem Ipsum",
		"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint
			necessitatibus, officia ex.",
		"precio" => 500,
		"imagen" => 'images/img-pdto-4.jpg',
		"enOferta" => false
	],
	4 => [
		"id" => 5,
		"titulo" => "Lorem Ipsum",
		"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint
			necessitatibus, officia ex.",
		"precio" => 600,
		"imagen" => 'images/img-pdto-5.jpg',
		"enOferta" => false,
	],
	5 => [
		"id" => 6,
		"titulo" => "Lorem Ipsum",
		"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint
			necessitatibus, officia ex.",
		"precio" => 700,
		"imagen" => 'images/img-pdto-6.jpg',
		"enOferta" => true
	],
];


?>

<section class="vip-products">

	<?php foreach ($arrayProductos as $productos) : ?>
		<article class="product">
			<div class="photo-container">
				<img class="photo" src=<?= $productos['imagen'] ?> alt=pdto<?= $productos["id"] ?>>
				<?php if ($productos["enOferta"] == true) : ?>
					<img class="special" src='images/img-descuento.png' alt=<?= $productos["precio"] ?>>
					<!-- <p>En Oferta!</p> --> <!-- Ejercicio 4 -->
				<?php else : ?>
					<img class="special" src='images/img-nuevo.png' alt=<?= $productos["precio"] ?>>
				<?php endif; ?>
				<a class="zoom" href='#'>$<?= $productos["precio"] ?></a>
			</div>
			<h2><?= $productos["titulo"] ?></h2>
			<p><?= $productos["descripcion"] ?></p>
			<a class="more" href="detalleRestaurante.php?numero=<?=$productos["id"]?>">ver más</a>
		</article>
	<?php endforeach; ?>

</section>