<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>
<h1>Homepage</h1>
<?php if ($randomBook === null){?>
    <p>No books available.</p>
<?php } else { ?>
    <p>Random Book:</p>
    
<p><?= $randomBook->getName() ?></p>
<p><?= $randomBook->getDate() ?></p>
<p><?= $randomBook->getAttendees() ?></p>
<p><?= $randomBook->getSummary() ?></p>
<p><?= $randomBook->getIsbn() ?></p>
<p><?= $randomBook->getId() ?></p>
<?php
}
$content = ob_get_clean();

require('layout.php');