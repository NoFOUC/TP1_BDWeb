<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    /**
    *@Route("lucky/number")
    */
    public function number(){
        $nom = "Votre Nom ";
        $number = random_int(0,1000);
        return $this ->render('lucky/number.html.twig', ['number'=>$number, 'nom'=>$nom,]);
    }

    /** *@Route("/home") */
    public function home(){
        
        return $this ->render('home/home.html.twig');
    }

    /** @Route("articles", name="articles") */

    public function articles(ArticleRepository $repo)
    {
        $articles = $repo->findAll();
        return $this->render('article/article.html.twig', ['articles'=>$articles,]);
    }

    /**
    * @Route("/DetailArticles/{id}", name="DetailsArticle")
    */
    public function Detailsarticles($id, ArticleRepository $repo) {
        $articles = $repo->findOneById($id);
        return $this-> render('article/Detailsarticle.html.twig',['articles'=>$articles,]);
   }

   /** @Route("/RemoveArticle/{id}", name="RemoveArticle") */
   public function removearticle($id, ArticleRepository $repo)
   {
       $article = $repo->findOneById($id);
       $repo->remove($article, true);
       return $this->redirectToRoute('articles');
   }
   
}