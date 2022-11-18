<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    #[Route("/lucky")]
    public function number(Request $request, SessionInterface $session): Response
    {
        //$this->logger->info("TEST");
        $number = random_int(0, 100);
        $value = $request->query->get("value");
        /* if (!$value) {
            throw $this->createNotFoundException("La valeur n'existe pas...");
        } */
        echo "Bonjour, je m'appelle {$session->get('username')}<br>";
        return $this->render("lucky.html.twig", [
            "number" => $number
        ]);
    }
}