<?php

namespace App\Controller;


// use Doctrine\Common\Persistence\ObjectManager;
// use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
/**
 * @Route("/")
 */
class MainController extends AbstractController
{

    /**
     * @Route("/", name="index" )
     * @return Response
     * Ce controller permet d'afficher la page d'accueil
     */
    public function index(): Response
    {

        return $this->render('index/blog.html.twig');

    }

    /**
     * @Route("news/", name="news")
     * @return Response
     */
    public function news(): Response
    {

        return $this->render('index/news.html.twig');


    }

}
