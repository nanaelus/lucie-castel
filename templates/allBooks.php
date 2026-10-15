<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>

<h1 class="main-title">Tous mes livres</h1>
<main>
<?php if ($books) {
    foreach ($books as $b) { ?>
    <div class="book">
        <a href="index.php?action=tous-mes-livres&id=<?= $b->getId() ?>"><img src="<?= $b->file_path ? $b->file_path : 'assets/img/none.jpg' ?>" alt="Couverture du livre <?= $b->getName() ?>"></a>
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