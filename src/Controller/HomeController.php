<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render("home/index.html.twig", [
            "title" => "Bienvenue sur mon site",
            "message" => "Hello World ! Bienvenue sur mon site",
            "menu" => "home"
        ]);
    }

    public function contact()
    {
        return $this->render("home/contact.html.twig", [
            "menu" => "contact"
        ]);
    }

    public function carte()
    {
        return $this->render("home/carte.html.twig", [
            "menu" => "carte"
        ]);
    }


}
