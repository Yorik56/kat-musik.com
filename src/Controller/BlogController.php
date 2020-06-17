<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    /**
     * @Route("/blog/create", name="create")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request, EntityManagerInterface $manager)
    {
        $article = new Article();
        $form = $this->createForm(ArticleFormType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($article);
            $manager->flush();
            $this->addFlash('notice', 'Post Submitted Successfully!!!');
            return $this->redirectToRoute('create');
        }

        return $this->render('blog/create.html.twig', [
            'controller_name' => 'BlogController',
            'form' => $form->createView()
        ]);
    }
}
