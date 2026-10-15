<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>
<link href="./assets/css/book.css" rel="stylesheet" />
<main>
    <div class="book-pictures">
        <img src="assets/img/none.jpg">
        <img src="assets/img/none.jpg">
        <img src="assets/img/none.jpg">
    </div>
    <div class="about-book">
        <h1><?php echo $book->getName(); ?></h1>
        <p>Date: <?php echo $book->getDate(); ?></p>
        <p>Attendees: <?php echo $book->getAttendees(); ?></p>
        <p>Summary: <?php echo $book->getSummary(); ?></p>
        <p>ISBN: <?php echo $book->getIsbn(); ?></p>
    </div>

</main>



<?php
$content = ob_get_clean();

require('layout.php');