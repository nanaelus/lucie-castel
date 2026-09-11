<?php

require_once('src/controllers/Homepage.php');
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