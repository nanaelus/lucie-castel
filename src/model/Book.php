<?php

declare(strict_types=1);

namespace Application\Model\Book;

use Application\Lib\Database\DatabaseConnection;

require_once('src/Lib/Database.php');

class Book
{
    private int $id;
    private string $name;
    private string $date;
    private string $attendees;
    private string $summary;
    private string $isbn;

    public function __construct($id, $name, $date, $attendees, $summary, $isbn)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->attendees = $attendees;
        $this->summary = $summary;
        $this->isbn = $isbn;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getAttendees(): string
    {
        return $this->attendees;
    }

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }
}

class BookRepository
{
    public DatabaseConnection $connection;

<<<<<<< HEAD

    /**
     * Get all books from the database
     * 
     * Execute a SQL query to retrieve all books from the database and return them as an array of Book objects.
     * @return array|null An array of Book objects or null if no books are found
     */
=======
>>>>>>> 6264ea9fd07f5ce6ec4ff9870ecbe62bff646e95
    public function getBooks(): ?array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT id, name, DATE_FORMAT(date, '%d-%m-%y') AS french_date, attendees, summary, isbn FROM book"
        );
        $books = [];
        while ($row = $statement->fetch()) {
            $book = new Book($row['id'], $row['name'], $row['french_date'], $row['attendees'], $row['summary'], $row['isbn']);
            $books[] = $book;
        }
<<<<<<< HEAD
        if (empty($books)) {
            return null;
        }
        return $books;
    }

    /**
     * Get highlighted books from the database
     * 
     * Execute a SQL query to retrieve highlighted books from the database and return them as an array of Book objects.
     * @return array|null An array of Book objects or null if no highlighted books are found
     */
=======
        return $books;
    }

>>>>>>> 6264ea9fd07f5ce6ec4ff9870ecbe62bff646e95
    public function getHighlightedBooks(): ?array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT id, name, DATE_FORMAT(date, '%d-%m-%y') AS french_date, attendees, summary, isbn FROM book WHERE highlighted = 1"
        );
        $books = [];
        while ($row = $statement->fetch()) {
            $book = new Book($row['id'], $row['name'], $row['french_date'], $row['attendees'], $row['summary'], $row['isbn']);
            $books[] = $book;
        }
<<<<<<< HEAD
        if (empty($books)) {
            return null;
        }
=======
>>>>>>> 6264ea9fd07f5ce6ec4ff9870ecbe62bff646e95
        return $books;
    }
}