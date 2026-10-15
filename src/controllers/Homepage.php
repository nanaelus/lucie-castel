<?php

declare(strict_types=1);

namespace Application\Controllers\Homepage;

require_once('src/lib/Database.php');
require_once('src/model/Book.php');
require_once('src/model/Media.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Book\Book;
use Application\Model\Book\BookRepository;
use Application\Model\Media\Media;

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
        $bookMedia = new Media();
        $bookMedia->connection = new DatabaseConnection();

        if($books === null || empty($books)) {
            return null;
        }
        $randomBookId = array_rand($books);

        $randomBook = $books[array_rand($books)];
        $randomBook->file_path = $bookMedia->getMainMediaByEntityIdAndType($randomBook->getid(), 'book');
        return $randomBook;
    }
}