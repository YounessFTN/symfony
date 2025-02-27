<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController {
    #[Route("/", "home")]
    function index(): Response{
        return $this->render('recipe/index.html.twig');
    }
}