<?php

namespace App\Controller;

use App\Repository\ListingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    #[Route('/detail/{id}', name: 'app_detail')]
    public function index($id, ListingRepository $listingRepository): Response
    {

        $annonce = $listingRepository->getAnnonceById($id);
        dump($annonce);

        return $this->render('front/detail/index.html.twig', [
            'controller_name' => 'DetailController',
            'annonce' => $annonce,
        ]);
    }
}
