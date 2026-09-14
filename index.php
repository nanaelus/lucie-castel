<?php

require_once('src/controllers/Homepage.php');
require_once('src/controllers/AllBooks.php');
require_once('src/controllers/AllIllustrations.php');

use Application\Controllers\Homepage\Homepage;
use Application\Controllers\AllBooks\AllBooks;
use Application\Controllers\AllIllustrations\AllIllustrations;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'tous-mes-livres') {
            (new AllBooks())->execute();
        }
    } elseif (isset($_GET['toutes-mes-illustrations'])) {
        (new AllIllustrations())->execute();
    } else {
        (new Homepage())->execute();
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}