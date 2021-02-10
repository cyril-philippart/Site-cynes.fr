<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
    /**
     * @Route("/l-equipe", name="team")
     */
    public function team(): Response
    {
        return $this->render('team/team.html.twig', [
            'controller_name' => 'TeamController',
        ]);
    }
}