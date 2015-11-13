<?php

// src/site/GeneralBundle/Controller/AdvertController.php

namespace site\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this
                ->get('templating')
                ->render('siteGeneralBundle:Advert:index.html.twig',array (
                    'nom' => 'Simon'
                    )
                );
    return new Response($content);
    }
}