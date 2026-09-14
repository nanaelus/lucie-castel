<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>
<h1>Tous mes ateliers</h1>
<?php if ($workshops) {
    foreach ($workshops as $w) { ?>
        <p><?= $w->getType() ?></p>
        <p><?= $w->getDescription() ?></p>
        <p><?= $w->getId() ?></p>
</br>
    <?php }
} else {
    echo "<p>Pas d'ateliers disponibles.</p>";
}
?>
<br>
<p><h3>Vous êtes prof au collègue ou au lycée ?</h3></br>
Mes ateliers sont disponibles avec le Pass Culture.
Autre info intéressante, je peux demander l’aide « Masterclass d’auteurices du livre et de l’écrit » du Centre
national du livre qui finance des rencontres dans les établissements scolaires.
Intéressé.e ? Contactez-moi !
</p>

<?php $content = ob_get_clean();

require('layout.php');