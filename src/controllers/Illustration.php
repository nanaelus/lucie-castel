<?php

declare(strict_types=1);

namespace Applicaiton\Controllers\Illustration;

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Illustration\IllustrationRepository;
use Application\Controllers\AllIllustrations\AllIllustration;

class Illustration
{
    public function execute(int $id): void
    {
        $illustrationRepository = new IllustrationRepository();
        $illustrationRepository->connection = new DatabaseConnection();

        $illustration = $illustrationRepository->getIllustrationById($id);

        if($illustration) {
            require('templates/illustration.php');
        } else {
            (new AllIllustration())->execute();
        }
    }
}