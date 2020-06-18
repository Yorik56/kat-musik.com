<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class VideoController extends AbstractController
{
    /**
     * @Route("/video", name="video")
     *
     */
    public function video()
    {
        return $this->render('index/video.html.twig');
    }

}
