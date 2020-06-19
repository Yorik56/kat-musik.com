<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class MusikController extends AbstractController
{
    /**
     * @Route("/musik", name="musik")
     *
     */
    public function musik()
    {
        return $this->render('index/musik.html.twig');
    }

}
