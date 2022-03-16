<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{  
    // anotation route (ce n est pas 1 commentaire)
    /**
     * @Route("/contact", name="app_contact")
     */
    // lorsque je met /contact dans l URL la fonction s execute et redirige vers contact/index.html.twig
    public function index(): Response
    {
        $form = "Tu souhaite nous contacter ?";

        return $this->render('contact/index.html.twig', [
            "Formulaire" => $form
        ]); 
    }
}
  