<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function homepage()
        {
     return new Response('omg');
        }


    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
          'I ate aa rock once',
            'I ate a second rock',
            'I ate a third rock',


        ];



        return $this->render('article/show.html.twig', [
        'title' => ucwords(str_replace('-', '', $slug)),
        'title2' => strtolower($slug),
            'comments' => $comments,
    ]);

    }
}