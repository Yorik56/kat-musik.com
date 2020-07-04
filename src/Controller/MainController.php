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
     * @param \Swift_Mailer $mailer
     * Ce controller permet d'afficher la page d'accueil
     */
    public function index(): Response
    {
        // $name = "test";
        // $message = (new \Swift_Message('Hello Email'))
        // ->setFrom('yorikmoreau@gmail.com')
        // ->setTo('yorikmoreau@gmail.com')
        // ->setBody(
        //     $this->renderView(
        //         // templates/emails/registration.html.twig
        //         'emails/registration.html.twig',
        //         ['name' => $name]
        //     ),
        //     'text/html'
        // );
        // $mailer->send($message);
        return $this->render('index/index.html.twig');

    }

    
}
