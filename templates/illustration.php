<?php $title = "Lucie Castel"; ?>

<?php ob_start(); ?>
<link href="./assets/css/book.css" rel="stylesheet" />

<main>
    <div class="book-pictures">
        <?php foreach ($illustration->medias as $m) { ?>
            <img src="<?= $m ; ?>">
        <?php } ?>
    </div>
    <div class="about-book">
        <h1><?= $illustration->getName(); ?></h1>
        <p>Date: <?= $illustration->getDate(); ?></p>
        <p>Description : <?= $illustration->getDescription(); ?></p>
    </div>
</main>

<?php

$content = ob_get_clean();

require('layout.php');