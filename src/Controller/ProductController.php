<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/products")
     */
    public function list(LoggerInterface $logger)
    {
        $logger->info('Look! I just used a service');

        return new Response('Trop cool');
    }

    /**
     * @Route("/new")
     * @param MessageGenerator $messageGenerator
     * @return Response
     */
    public function new(MessageGenerator $messageGenerator)
    {
        // thanks to the type-hint, the container will instantiate a
        // new MessageGenerator and pass it to you
        // ...

        $message = $messageGenerator->getHappyMessage();
        $this->addFlash('success', $message);

        return new Response('On a généré un message via un service !');
    }

}