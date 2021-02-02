<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(): Response
    {
        return $this->render('main/homepage.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/mentions-legales", name="legal_notice")
     */
    public function legalNotice(): Response
    {
        return $this->render('main/legal_notice.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/erreur404", name="error404")
     */
    public function error404(): Response
    {
        return $this->render('main/error404.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
