<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BezoekerController extends AbstractController
{
    /**
     * @Route("/bezoeker", name="app_bezoeker")
     */
    public function index(): Response
    {
        return $this->render('bezoeker/index.html.twig', [
            'controller_name' => 'VisitController',
        ]);
    }

    /**
     * @Route("/trainingsaanbod", name="trainings_aanbod")
     */
    public function trainingsaanbod(): Response
    {
        return $this->render('bezoeker/index.html.twig', [
            'controller_name' => 'VisitController',
        ]);
    }

}
