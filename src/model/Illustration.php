<?php

declare(strict_types=1);

namespace Application\Model\Illustration;

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Media\Media;

require_once('src/Lib/Database.php');
require_once('src/model/media.php');

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
        $media = new Media();
        $media->connection = new DatabaseConnection();
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
            $illustration->file_path = $media->getMainMediaByEntityIdAndType($illustration->getId(), 'illustration');
            $illustrations[] = $illustration;
        }
        if (empty($illustrations)) {
            return null;
        }
        return $illustrations;
    }

    public function getIllustrationById(int $id): ?Illustration
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT id, name, DATE_FORMAT(date, '%d-%m-%y') AS french_date, description FROM illustration WHERE id = $id"
        );
        $row = $statement->fetch();
        if($row) {
            return new Illustration($row['id'], $row['name'], $row['french_date'], $row['description']);
        }
        return null;
    }
}