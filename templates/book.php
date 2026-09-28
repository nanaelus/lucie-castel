<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>

<h1>MON LIVRE</h1>
<p>Nom: <?php echo $book->getName(); ?></p>
<p>Date: <?php echo $book->getDate(); ?></p>
<p>Attendees: <?php echo $book->getAttendees(); ?></p>
<p>Summary: <?php echo $book->getSummary(); ?></p>
<p>ISBN: <?php echo $book->getIsbn(); ?></p>

<?php
$content = ob_get_clean();

require('layout.php');