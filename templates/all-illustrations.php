<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>
<h1>Toutes mes illustrations</h1>
<?php if ($illustrations) {
    foreach ($illustrations as $i) { ?>
        <p><?= $i->getName() ?></p>
        <p><?= $i->getDate() ?? 'Pas de date disponible' ?></p>
        <p><?= $i->getDescription() ?></p>
        <p><?= $i->getId() ?></p>
    <?php } 
} else {
        echo "<p>No illustrations available.</p>";
    }

$content = ob_get_clean();

require('layout.php');