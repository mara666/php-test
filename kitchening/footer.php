<?php
$footer = ["home" => "#", "quienes" => "#", "servicios" => "#", "portfolio" => "#", "sucursales" => "#", "contacto" => "#"];
?>

<footer class="main-footer">
    <ul>
        <?php foreach ($footer as $li => $a) : ?>
            <li><a href=<?= $a ?>><?= $li ?></a></li>
        <?php endforeach; ?>
    </ul>
</footer>