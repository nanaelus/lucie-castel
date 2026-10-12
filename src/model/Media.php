<?php

declare(strict_types=1);

namespace Application\Model\Media;

use Application\Lib\Database\DatabaseConnection;

require_once('src/Lib/Database.php');

class Media
{
    public function __construct(
        private int $id,
        private string $file_path,
        private int $entity_id,
        private string $entity_type
    ) {}


    public function getMediaByEntityIdAndType(int $entity_id, string $entity_type): ?array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT id, file_path, entity_id, entity_type FROM media WHERE entity_id = $entity_id AND entity_type = '$entity_type'"
        );
        $medias = [];
        while ($row = $statement->fetch()) {
            $media = new Media(
                $row['id'],
                $row['file_path'],
                $row['entity_id'],
                $row['entity_type']
            );
            $medias[] = $media;
        }
        if (empty($medias)) {
            return null;
        }
        return $medias;
    }
}