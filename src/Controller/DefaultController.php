<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /*
     * @Route("/", name="homepage")
     */
    public function index()
    {
        //return $this->render('default/index.html.twig', [
            //'controller_name' => 'DefaultController',
        //]);
				
				//return new Response('<h1>Coucou !</h1>');// Retourne un élément de page

				return $this->render('default/index.html.twig');// Retourne une page complète
    }

		public function signup()
		{
			return $this->render('default/signup.html.twig');
		}
}
