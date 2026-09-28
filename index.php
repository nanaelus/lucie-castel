<?php

require_once('src/controllers/Homepage.php');
require_once('src/controllers/AllBooks.php');
require_once('src/controllers/AllIllustrations.php');
require_once('src/controllers/AllWorkshops.php');
require_once('src/controllers/Contact.php');
require_once('src/controllers/Book.php');
require_once('src/controllers/SendMail.php');
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Application\Controllers\Homepage\Homepage;
use Application\Controllers\AllBooks\AllBooks;
use Application\Controllers\AllIllustrations\AllIllustrations;
use Application\Controllers\AllWorkshops\AllWorkshops;
use Application\Controllers\Contact\Contact;
use Application\Controllers\Book\Book;
use Application\Controllers\SendMail\SendMail;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'tous-mes-livres') {
            if(isset($_GET['id']) && $_GET['id'] > 0) {
                (new Book())->execute((int)$_GET['id']);
            } else {
                (new AllBooks())->execute();
            }
        } elseif ($_GET['action'] === 'contact') {
            (new Contact())->execute();
        } elseif ($_GET['action'] === 'mail') {
            (new SendMail())->execute($_POST);
        }
    } elseif (isset($_GET['toutes-mes-illustrations'])) {
        (new AllIllustrations())->execute();
    } elseif (isset($_GET['tous-mes-ateliers'])) {
        (new AllWorkshops())->execute();
    }
    else {
        (new Homepage())->execute();
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}