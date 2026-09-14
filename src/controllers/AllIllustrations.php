<?php

declare(strict_types=1);

namespace Application\Controllers\AllIllustrations;

require_once('src/lib/Database.php');
require_once('src/model/Illustration.php');

use Application\lib\Database\DatabaseConnection;
use Application\Model\Illustration\Illustration;
use Application\Model\Illustration\IllustrationRepository;

class AllIllustrations
{
    public function execute(): void
    {
        require('templates/all-illustrations.php');
    }
}