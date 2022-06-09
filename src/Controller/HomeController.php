<?php

namespace App\Controller;

use App\Entity\Gite;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home_index")
     */
    public function index(ManagerRegistry $doctrine)
    {

        $repository = $doctrine->getRepository(Gite::class);

        $gites = $repository->findAll();


        return $this->render("home/index.html.twig", [
            "title" => "Bienvenue sur mon site",
            "message" => "Hello World ! Bienvenue sur mon site",
            "menu" => "home",
            "gites" => $gites
        ]);
    }

    /**
     * @Route("/contact", name="home_contact")
     */
    public function contact()
    {
        return $this->render("home/contact.html.twig", [
            "menu" => "contact"
        ]);
    }

    /**
     * @Route("/carte", name="home_carte")
     */
    public function carte()
    {
        return $this->render("home/carte.html.twig", [
            "menu" => "carte"
        ]);
    }


}
