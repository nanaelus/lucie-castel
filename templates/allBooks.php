<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>

<h1 class="main-title">Tous mes livres</h1>
<main>
<?php if ($books) {
    foreach ($books as $b) { ?>
    <div class="book">
        <p><?= $b->getName() ?></p>
        <p><?= $b->getDate() ?></p>
        <p><?= $b->getAttendees() ?></p>
        <p><?= $b->getSummary() ?></p>
        <p><?= $b->getIsbn() ?></p>
        <p><?= $b->getId() ?></p>
        <p><a href="index.php?action=tous-mes-livres&id=<?= $b->getId() ?>">Voir les détails</a></p>
    </div>
    <?php } 
} else {
        echo "<p>No books available.</p>";
    }

?>

</main>
<?php
$content = ob_get_clean();

require('layout.php');