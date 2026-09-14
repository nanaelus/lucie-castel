<?php

declare(strict_types=1);

namespace Application\Model\Illustration;

use Application\Lib\Database\DatabaseConnection;

require_once('src/Lib/Database.php');

class Illustration
{
    public function __construct(
        private int $id,
        private string $name,
        private ?string $date,
        private ?string $description
        ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}

class IllustrationRepository
{
    public DatabaseConnection $connection;

    public function getIllustrations(): ?array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT id, name, DATE_FORMAT(date, '%d-%m-%y') AS french_date, description FROM illustration"
        );
        $illustrations = [];
        while ($row = $statement->fetch()) {
            $illustration = new Illustration(
                $row['id'],
                $row['name'],
                $row['french_date'],
                $row['description']
            );
            $illustrations[] = $illustration;
        }
        if (empty($illustrations)) {
            return null;
        }
        return $illustrations;
    }
}