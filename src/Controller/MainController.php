<?php

namespace App\Controller;



use App\Entity\Article;
use App\Entity\Event;
use App\Entity\Music;
use App\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class MainController extends AbstractController
{

    /**
     * @Route("/", name="index")
     */
    public function Index()
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
