<?php

namespace App\Notification;

use App\Entity\Contact;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

class ContactNotification
{

    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function contactNotify(Contact $contact)
    {
        $message = <<<HTML
            <h1>Demande de contact</h1>
            <br>
            <p>Mr ou Mme {$contact->getNom()} vous a contacté pour avoir des informations</p>
            <p>Voici leur message :</p>
            <p>{$contact->getMessage()}</p>
        HTML;

        $email = (new Email())
            ->from('hello@example.com')
            ->to($contact->getEmail())
            ->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Envoi de mail pour contact')
            ->html($message);

        $this->mailer->send($email);
    }
}
