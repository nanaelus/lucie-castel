<?php

declare(strict_types=1);

namespace Application\Controllers\Homepage;

require_once('src/lib/Database.php');
require_once('src/model/Book.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Book\Book;
use Application\Model\Book\BookRepository;

class Homepage
{
    public function execute(): void
    {
        $randomBook = $this->getRandomBook();

        require_once('templates/homepage.php');
    }

    public function getRandomBook(): ?Book
    {
        $bookRepository = new BookRepository();
        $bookRepository->connection = new DatabaseConnection();
        $books = $bookRepository->getHighlightedBooks();

        if($books === null || empty($books)) {
            return null;
        }
        $randomBookId = array_rand($books);
        return $books[$randomBookId];
    }
}