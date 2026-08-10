<?php

declare(strict_types=1);

namespace Application\Controllers\Homepage;

require_once('src/lib/Database.php');
require_once('src/model/Book.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Book\BookRepository;

class Homepage
{
    public function execute(): void
    {
        $bookRepository = new BookRepository();
        $bookRepository->connection = new DatabaseConnection();
        $books = $bookRepository->getBooks();

        require_once('templates/homepage.php');
    }
}