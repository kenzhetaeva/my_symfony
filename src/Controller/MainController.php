<?php
// src/Controller/mine_symfony/MainController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController {
    /**
    * @Route("/", name = "index")
    */
    public function index() {
        $name = "Programmers";
        return $this->render('pages/index.html.twig', [
            'name' => $name,
        ]);
    }

}