<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AproposController extends AbstractController
{
    /**
     * @Route("/apropos-de-nous", name="apropos")
     */
    public function index(): Response
    {
        return $this->render('apropos/index.html.twig');
    }
}
