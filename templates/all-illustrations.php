<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>
<h1>Toutes mes illustrations</h1>
<main>
<?php if ($illustrations) {
    foreach ($illustrations as $i) { ?>
    <div class="book">
        <a href="index.php?action=toutes-mes-illustrations&id=<?= $i->getId() ?>"><img src="<?= $i->file_path ? $i->file_path : 'assets/img/none.jpg'; ?>" alt="Illustration : <?= $i->getName(); ?>" ></a>
    </div>
    <?php } 
} else {
        echo "<p>No illustrations available.</p>";
    } ?>

</main>
<?php $content = ob_get_clean();

require('layout.php');