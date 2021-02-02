<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/nos-realisations", name="project_list")
     */
    public function list(): Response
    {
        return $this->render('project/list.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/nos-realisations/{id}", name="project_show")
     */
    public function show(): Response
    {
        return $this->render('project/show.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }
}
