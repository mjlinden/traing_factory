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
            'controller_name' => 'BezoekerController',
        ]);
    }

    /**
     * @Route("/trainings_aanbod", name="trainings_aanbod")
     */
    public function trainings_aanbod(): Response
    {

        return $this->render('bezoeker/index.html.twig', [
            'controller_name' => 'BezoekerController',
        ]);
    }

}
