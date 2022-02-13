<?php

namespace App\Updates;


use App\Service\MessageGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SiteUpdateManager
{
    private $messageGenerator;

    private $mailer;

    private $adminEmail;

    public function __construct(MessageGenerator $messageGenerator, MailerInterface $mailer, string $adminEmail)
    {
        $this->messageGenerator = $messageGenerator;
        $this->mailer = $mailer;
        $this->adminEmail = $adminEmail;
    }

    public function notifyOfSiteUpdate()
    {
        $happyMessage = $this->messageGenerator->getHappyMessage();

        $email = (new Email())
            ->from('admin@example.com')
            ->to($this->adminEmail)
            ->subject('Site update just happened')
            ->text('Someone just updated the site. We told them: '.$happyMessage);

        $this->mailer->send($email);

        return new Response('Une update du site a été notifiée');
    }

}