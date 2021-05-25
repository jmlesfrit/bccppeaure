<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RouteController extends AbstractController
{

    /**
     * @Route("/connexion", name="connexion")
     */

    public function connexion(): Response
    {
        return $this->render('login');
    }

    /**
     * @Route("/inscription", name="inscription")
     */

    public function inscription(): Response
    {
        return $this->render('register');
    }

    public function home(): Response
    {
        return $this->render('index.html.twig');
    }

}
