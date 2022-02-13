<?php

namespace App\Mail;

class NewsletterManagerFactory
{
    public function __invoke()
    {
        $newsletterManager = new NewsletterManager();

        // ...

        return $newsletterManager;
    }
}