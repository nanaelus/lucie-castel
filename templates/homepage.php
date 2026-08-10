<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>
<h1>Homepage</h1>
<?php
foreach ($books as $b) { ?>
    <p>
    Nom du livre : <?= htmlspecialchars($b->getName()) ;?></br>
    Date de publication : <?= htmlspecialchars($b->getDate()) ;?></br>
    Paragraphe contenant les participants:"<div style=color:blue;><?= ($b->getAttendees()) ; ?></div>"</br>
    Résume : <?= htmlspecialchars($b->getSummary()) ;?></br>
    ISBN : <?= htmlspecialchars($b->getIsbn()) ;?></br>
    </p>

<?php
}

$content = ob_get_clean();

require('layout.php');