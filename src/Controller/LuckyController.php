<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route("")]
    public function number(): Response
    {
        $number = random_int(0, 100);
        return $this->render("lucky.html.twig", [
            "number" => $number
        ]);
        //return new Response("<html><h1>$number</h1></html>");
    }
}