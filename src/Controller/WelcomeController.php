<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    #[Route("/")]
    public function welcome(SessionInterface $session)
    {
        $session->set("username", "Gabriel");
        $this->addFlash("error", "Une erreur est survenue");
        return $this->redirectToRoute("app_lucky_number", ["value" => 19]);
    }
}