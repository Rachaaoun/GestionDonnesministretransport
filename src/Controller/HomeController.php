<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        
      $datedujour= new \DateTime('now');
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'today'=>$datedujour->format('d/m/Y')
        ]);
    }
        /**
     * @Route("/home3", name="home3")
     */
    public function index3(): Response
    {
      $datedujour= new \DateTime('now');
     
        return $this->render('home/index3.html.twig', [
            'controller_name' => 'HomeController',
            'today'=>$datedujour->format('d/m/Y')
        ]);
    }
    /**
     * @Route("/menu", name="menudeux")
     */
    public function menudeux(): Response
    {
        $datedujour= new \DateTime('now');
        return $this->render('home/index2.html.twig', [
            'controller_name' => 'HomeController',
            'today'=>$datedujour->format('d/m/Y')
        ]);
    }
}
