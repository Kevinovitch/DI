<?php

namespace App\Controller;


use App\Updates\SiteUpdateManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/sites/new", name="app_sites_new")
     * @param SiteUpdateManager $siteUpdateManager
     */
    public function new(SiteUpdateManager $siteUpdateManager)
    {
        // ...

        if($siteUpdateManager->notifyOfSiteUpdate()){
            $this->addFlash('success', 'Notification mail was sent successfully');
        }

        // ....
        return new Response('Du nouveau contenu est présent sur le site');
    }
}