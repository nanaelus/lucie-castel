<?php $title = 'Lucie Castel'; ?>

<link href="./assets/css/homepage.css" rel="stylesheet" />

<?php ob_start(); ?>

<?php if ($randomBook === null){?>
    <p>No books available.</p>
<?php } else { ?>
<img class="homepage-image" src="<?= $randomBook->file_path ? $randomBook->file_path : 'assets\img\none.jpg' ?>" alt="Book Image" />
<?php
}
$content = ob_get_clean();

require('layout.php');