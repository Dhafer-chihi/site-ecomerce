<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{prenom?World}",name="hello")
     */
    public function hello($prenom, Environment $twig)
    {
        $html = $twig->render('hello.html.twig');
        return new Response($html);
    }
}
