<?php

require_once('src/controllers/Homepage.php');
<<<<<<< HEAD
require_once('src/controllers/AllBooks.php');

use Application\Controllers\Homepage\Homepage;
use Application\Controllers\AllBooks\AllBooks;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'tous-mes-livres') {
            (new AllBooks())->execute();
        }
    } else {
        (new Homepage())->execute();
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
=======

use Application\Controllers\Homepage\Homepage;

(new Homepage())->execute();
>>>>>>> 6264ea9fd07f5ce6ec4ff9870ecbe62bff646e95
