<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExpertiseController extends AbstractController
{
    /**
     * @Route("/savoir-faire", name="expertise_list")
     */
    public function list(): Response
    {
        return $this->render('expertise/list.html.twig', [
            'controller_name' => 'ExpertiseController',
        ]);
    }

    /**
     * @Route("/savoir-faire/{id}", name="expertise_show")
     */
    public function show(): Response
    {
        return $this->render('expertise/show.html.twig', [
            'controller_name' => 'ExpertiseController',
        ]);
    }
}
