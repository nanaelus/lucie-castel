<?php

declare(strict_types=1);

namespace Application\Controllers\Contact;

class Contact
{
    public function execute(): void
    {
        require('templates/contact.php');
    }
}