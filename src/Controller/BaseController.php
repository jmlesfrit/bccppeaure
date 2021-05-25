<?php

namespace App\Controller;

use App\Entity\Acheteur;
use App\Form\Register;
use App\Form\Login;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class BaseController extends AbstractController
{

    /**
     * @Route("/register", name="register")
     */

    public function register(Request $request)
    {
        $acheteur = new Acheteur();
        $form = $this->createForm(Register::class, $acheteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($acheteur);

            $entityManager->flush();

            return $this->render('connexion.html.twig');
        }
        return $this->render('inscription.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request)
    {

        $form  = $this->createForm(Login::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $adressemail = $form->get('adressemail')->getData();
            $password = $form->get('password')->getData();
            $acheteur  = $this->getDoctrine()
                ->getRepository(Acheteur::class)
                ->findOneBy(
                    ['adressemail' => $adressemail,
                    'password' => $password]
                );
            if($acheteur != null){
                return $this->render('index.html.twig');

            }

        }
        return $this->render('connexion.html.twig', array('form' => $form->createView()));
    }

}
