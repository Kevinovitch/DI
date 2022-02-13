<?php

namespace App\Controller;

use App\Service\TwitterClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function tweet(TwitterClient $twitterClient)
    {
        // fetch $user, $key, $status from the POST'ed data

        $twitterClient->tweet($user, $key, $status);
    }

}