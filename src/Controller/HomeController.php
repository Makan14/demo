<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    // anotation route (ce n est pas 1 commentaire)
    /**
     * @Route("/", name="app_home") 
     */
    // lorsque je met /home dans l URL la fonction s execute et redirige vers home/index.html.twig
    public function index(): Response
    {
        // je crée une variable title
        $title = "ceci est la page home";
        
        return $this->render('home/index.html.twig', [
            // j execute la variable $title en appelant la clé "myTitle" dns le dossier HOME/index.html.twig 
            "myTitle" => $title 
            // "clé" => $valeur
        ]); 
    } 
}
