<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\PostRepository;
use Symfony\Component\Serializer\SerializerInterface;

final class NeonController extends AbstractController
{
    #[Route('/neon', name: 'neon.index')]
    public function index( PostRepository $postRepository): Response
    {
        $posts = $postRepository -> findAll();

        return $this->render('neon/index.html.twig',[
            'posts'=>$posts
        ]);
    }

    #[Route('/neon/json', name: 'neon.show')]
    public function show(PostRepository $postRepository, SerializerInterface $serializer): Response
    {
        $posts = $postRepository->findAll();
        $json = $serializer->serialize($posts, 'json');
    
        return new JsonResponse($json, 200, [], true);
    }
}


