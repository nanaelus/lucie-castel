<?php $title = 'Lucie Castel'; ?>

<?php ob_start(); ?>
<h1>Toutes mes illustrations</h1>
<?php

$content = ob_get_clean();

require('layout.php');