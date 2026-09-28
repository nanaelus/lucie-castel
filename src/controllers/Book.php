<?php

declare(strict_types=1);

namespace Application\Controllers\Book;

require_once('src/controllers/AllBooks.php');

use Application\lib\Database\DatabaseConnection;
use Application\Model\Book\BookRepository;
use Application\Controllers\AllBooks\AllBooks;

class Book
{
    public function execute(int $id): void
    {
        $BookRepository = new BookRepository();
        $BookRepository->connection = new DatabaseConnection();

        $book = $BookRepository->getBookById($id);
        
        if($book) {
            require('templates/book.php');
        } else {
            (new AllBooks())->execute();     
        }
    }
}