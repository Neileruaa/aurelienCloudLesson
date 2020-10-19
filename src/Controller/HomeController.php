<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;

class HomeController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render("home/index.html.twig");
    }
}
