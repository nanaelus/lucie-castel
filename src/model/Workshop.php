<?php

declare(strict_types=1);

namespace Application\Model\Workshop;

use Application\Lib\Database\DatabaseConnection;

require_once('src/Lib/Database.php');

class Workshop
{
    public function __construct(
        private int $id,
        private string $type,
        private string $description
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}

Class WorkshopRepository
{
    public DatabaseConnection $connection;

    /**
     * Get all workshops from the database.
     * 
     * Execute a SQL query to retrieve all workshops from the database and return them as an array of Workshop objects.
     * @return array|null An array of Workshop objects if workshops are found, or null if no workshops are available.
     */
    public function getWorkshops(): ?array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT id, type, description FROM workshop"
        );
        $workshops = [];
        while ($row = $statement->fetch()) {
            $workshop = new Workshop(
                $row['id'],
                $row['type'],
                $row['description']
            );
            $workshops[] = $workshop;
        }
        if (empty($workshops)) {
            return null;
        }
        return $workshops;
    }
}