<?php

namespace App\Mail;

class NewsletterManagerStaticFactory
{
    public static function createNewsletterManager()
    {
        $newsletterManager = new NewsletterManager();

        // ...

        return $newsletterManager;
    }
}