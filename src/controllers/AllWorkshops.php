<?php

declare(strict_types=1);

namespace Application\Controllers\AllWorkshops;

require_once('src/lib/Database.php');
require_once('src/model/Workshop.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Workshop\Workshop;
use Application\Model\Workshop\WorkshopRepository;

class AllWorkshops
{
    public function execute(): void
    {
        $workshopRepository = new WorkshopRepository();
        $workshopRepository->connection = new DatabaseConnection();

        $workshops = $workshopRepository->getWorkshops();

        require('templates/all-workshops.php');
    }
}