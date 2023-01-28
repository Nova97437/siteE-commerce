<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientsController extends AbstractController
{
    #[Route('/clients', name: 'app_clients')]
    public function index(ProduitsRepository $produitsRepository): Response
    {
        return $this->render('clients/index.html.twig', [
            'produits' => $produitsRepository->findAll(),
        ]);
    }
    
}
