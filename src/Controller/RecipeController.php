<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class RecipeController extends AbstractController
{

    #[Route('/manga', name: 'manga.index')]
    public function index(Request $request): Response
    {
        return new JsonResponse([

            'nico'=>"petite bite",
        ]);

    }


    #[Route('/manga/{slug}-{id}', name: 'manga.show')]
    public function show(Request $request, string $slug, int $id): Response
    {
        return new JsonResponse([
            'slug' => $slug,
            'id'=> $id,
            'Chiara'=>"la connasse",
        ]);

        // return $this->render("recipe/show.html.twig",[
        //     'slug' => $slug,
        //     'id'=> $id,
        //     'connasse'=>[
        //         'name'=> 'chiara',
        //         'age'=> 20,
                
        //     ]
        // ]);
    }
}
