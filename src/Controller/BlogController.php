<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Event;
use App\Entity\Music;
use App\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    /**
     * @Route("/news", name="news")
     *
     */
    public function show()
    {

        $repo = $this->getDoctrine()->getRepository(Article::class);
        $music = $this->getDoctrine()->getRepository(Music::class)->LastMusic();
        $lastvideo = $this->getDoctrine()->getRepository(Video::class)->LastVideo();
        $nextconcert = $this->getDoctrine()->getRepository(Event::class)->NextConcert();
        $article = $repo->findAll();
        return $this->render('index/news.html.twig', [
            'musics' => $music,
            'articles' => $article,
            'lastvideos' => $lastvideo,
            'nextconcerts' => $nextconcert,
        ]);
    }

}
