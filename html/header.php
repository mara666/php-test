<?php
$encabezado = ["home" => "#", "quienes" => "#", "servicios" => "#", "portfolio" => "#", "sucursales" => "#", "contacto" => "#"];
?>

<header class="main-header">
    <img src="images/logo.jpg" alt="logotipo" class="logo">

    <a href="#" class="toggle-nav">
        <span class="fa fa-bars"></span>
    </a>

    <nav class="main-nav">
        <ul>
            <?php foreach ($encabezado as $li => $a) : ?>
                <li><a href=<?= $a ?>><?= $li ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>