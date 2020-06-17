<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/news", name="news")
     *
     */
    public function show(){
        $repo = $this->getDoctrine()->getRepository(Article::class);
        $article = $repo->findAll();
        return $this->render('index/news.html.twig', [
            'articles' => $article]);
    }

}
