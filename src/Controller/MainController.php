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

        return $this->render('index/index.html.twig');

    }

    /**
     * @Route("/muzik", name="muzik")
     * @return Response
     *
     */
    public function muzik(): Response
    {

        return $this->render('muzik.html.twig');
    }


}
