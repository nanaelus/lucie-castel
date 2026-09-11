<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>
<h1>Tous mes livres</h1>
<?php if ($books) {
    foreach ($books as $b) { ?>
        <p><?= $b->getName() ?></p>
        <p><?= $b->getDate() ?></p>
        <p><?= $b->getAttendees() ?></p>
        <p><?= $b->getSummary() ?></p>
        <p><?= $b->getIsbn() ?></p>
        <p><?= $b->getId() ?></p>
    <?php } 
} else {
        echo "<p>No books available.</p>";
    }
$content = ob_get_clean();

require('layout.php');