<?php

namespace App\Controller;

use App\Entity\Gite;
use App\Entity\GiteSearch;
use App\Form\GiteSearchType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home_index")
     */
    public function index(ManagerRegistry $doctrine, Request $request)
    {

        $search = new GiteSearch();
        $form = $this->createForm(GiteSearchType::class, $search);
        $form->handleRequest($request);
        
        $repository = $doctrine->getRepository(Gite::class);
        $gites = $repository->findAll($search);


        if($form->isSubmitted() && $form->isValid())
        {
            $gites = $repository->findGiteSearch($search);

        }

        return $this->render("home/index.html.twig", [
            "title" => "Bienvenue sur mon site",
            "message" => "Hello World ! Bienvenue sur mon site",
            "menu" => "home",
            "gites" => $gites,
            "form" => $form->createView()
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
