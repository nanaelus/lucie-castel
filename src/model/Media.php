<?php

declare(strict_types=1);

namespace Application\Model\Media;

use Application\Lib\Database\DatabaseConnection;

require_once('src/Lib/Database.php');

class Media
{
    public function getMainMediaByEntityIdAndType(int $entityId, string $type): ?string
    {
        $statement = $this->connection->getConnection()->prepare(
            'SELECT file_path FROM media WHERE entity_id = ? AND entity_type = ? AND main_image = TRUE LIMIT 1'
        );
        $statement->execute([$entityId, $type]);
        $media = $statement->fetchColumn();
        return $media ?: null;
    }
}