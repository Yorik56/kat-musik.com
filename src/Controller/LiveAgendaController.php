<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class LiveAgendaController extends AbstractController
{
    /**
     * @Route("/liveagenda", name="liveagenda")
     *
     */
    public function liveagenda()
    {
        return $this->render('index/liveagenda.html.twig');
    }

}
