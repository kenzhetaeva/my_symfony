<?php
// src/Controller
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController {
    /**
    * @Route("/c")
    */
    public function index() {
        return new Response(
            '<h1>This is index page<br></h1>'
        );
    }

}