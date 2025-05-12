<?php

namespace App\Controller;

use App\Repository\AuteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AuteurController extends AbstractController
{
    #[Route('/auteur', name: 'app_auteur')]
    public function index(AuteurRepository $auteurs): Response
    {

        // Récupérer tous les auteurs
        $auteurs = $auteurs->findAll();

        return $this->render('auteur/index.html.twig', [
            'controller_name' => 'AuteurController',
            'auteurs' => $auteurs,
        ]);
    }
}
