<?php

declare(strict_types=1);

namespace Application\Controllers\AllBooks;

require_once('src/lib/Database.php');
require_once('src/model/Book.php');

use Application\lib\Database\DatabaseConnection;
use Application\Model\Book\Book;
use Application\Model\Book\BookRepository;

class AllBooks
{
    public function execute(): void
    {
        $BookRepository = new BookRepository();
        $BookRepository->connection = new DatabaseConnection();

        $books = $BookRepository->getBooks();

        require('templates/allBooks.php');
    }
    
}