<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\TblNews;
use App\Repository\TblNewsRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(TblNewsRepository $newsRepository): Response
    {
        $news = $newsRepository->getAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'news' => $news
        ]);
    }
}
