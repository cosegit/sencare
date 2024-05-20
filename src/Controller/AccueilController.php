<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AccueilController extends AbstractController {
    #[Route('/', name : 'Accueil')]
    public function accueil(Request $request)
    {
        return  $this->render('site/accueil.html.twig');
    }
    #[Route('/About', name : 'About')]
    public function about(Request $request)
    {
        return  $this->render('site/about.html.twig');
    }
    #[Route('/Specialistes', name : 'Specialistes')]
    public function specialistes(Request $request)
    {
        return  $this->render('site/specialistes.html.twig');
    }
    #[Route('/Service', name : 'Service')]
    public function service(Request $request)
    {
        return  $this->render('site/service.html.twig');
    }
    #[Route('/Consultation', name : 'Consultation')]
    public function consultation(Request $request)
    {
        return  $this->render('site/consultation.html.twig');
    }
    #[Route('/Contact', name : 'Contact')]
    public function contact(Request $request)
    {
        return  $this->render('site/contact.html.twig');
    }
}

?>