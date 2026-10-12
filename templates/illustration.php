<?php $title = "Lucie Castel"; ?>

<?php ob_start(); ?>

<h1>Mon Illustration</h1>
<p>Nom <?= $illustration->getName(); ?></p>
<p>Date <?= $illustration->getDate(); ?></p>
<p>Description <?= $illustration->getDescription(); ?></p>

<?php

$content = ob_get_clean();

require('layout.php');