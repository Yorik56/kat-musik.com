<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Event;
use App\Entity\Music;
use App\Entity\Video;
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
       $repo = $this->getDoctrine()->getRepository(Music::class);
       $music = $repo->findAll();
       $article = $this->getDoctrine()->getRepository(Article::class)->sidebarArticles();


        return $this->render('index/musik.html.twig', [
            'musics' => $music,
            'articles' => $article,
        ]);
    }






    /**
     * @Route("/video", name="videok")
     *
     */
    public function video()
    {
        $repo = $this->getDoctrine()->getRepository(Video::class);
        $video = $repo->findAll();
        return $this->render('index/video.html.twig', [
            'videos' => $video]);
    }



}
