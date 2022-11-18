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
        $count = $newsRepository->getCount();
        $news = $newsRepository->findAll();
        $result=null;

        if($count>0)
        {
            $result = $news;
        }
        else
        {
            $result = [];
        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'news' => $result
        ]);
    }
}
