<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>
<link href="./assets/css/workshop.css" rel="stylesheet" />

<main>
    <banner>
        <img src="<?= $banner ; ?>">
    </banner>
        
    <div class="about-workshop">
        <?php foreach ($workshops as $w) { ?>
            <div>
                <h3><?= $w->getType() ; ?></h3>
                <p><?= $w->getDescription() ; ?></p>
            </div>
        <?php } ?>
    </div>
</main>




<?php $content = ob_get_clean();

require('layout.php');