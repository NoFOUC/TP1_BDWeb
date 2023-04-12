<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; use Symfony\Component\Routing\Annotation\Route;
class MyController extends AbstractController
{

    /** *@Route("/home") */
    public function home()
    {
        return $this->render('home/home.html.twig');
    }

    /** *@Route("/lucky/number", name="numbers") */
    public function number()
    {
        $nom = "Votre Nom ";
        $number = random_int(0, 1000);
        return $this->render('lucky/number.html.twig', ['number' => $number, 'nom' => $nom,]);
    }

    /** @Route("articles", name="articles") */

    public function articles()
    {
        return $this->render('article/article.html.twig');
    }

}