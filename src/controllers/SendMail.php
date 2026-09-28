<?php

declare(strict_types=1);

namespace Application\Controllers\SendMail;

require_once('utils/Mailer.php');

use Application\Utils\Mailer\Mailer;

class SendMail
{
    public function execute(array $input): void
    {
        $mailer = new Mailer();

        $message = "Nouveau message de ${input['name']} (${input['email']}) :\n\n${input['message']}";

        $ok = $mailer->send('mameldecheval@hotmail.fr', 'Nouveau message du formulaire de contact', $message);
        if ($ok) {
            echo 'Message envoyé.';
        } else {
            echo 'Erreur lors de l\'envoi du mail.';
        }
    }
}