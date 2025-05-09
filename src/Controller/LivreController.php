<?php

namespace App\Controller;

use App\Repository\LivreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LivreController extends AbstractController
{
    #[Route('/livre', name: 'app_livre')]
    public function index(LivreRepository $livreRepository): Response
    {
        //Récupérer tous les livres
        $livres = $livreRepository->findAll();

        
        return $this->render('livre/index.html.twig', [
            'controller_name' => 'LivreController',
            'livres'=>$livres,
        ]);
    }
}
