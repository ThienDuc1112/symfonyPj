<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="app_default")
     */
    public function index(): Response
    {
     $users=$this->getDoctrine()->getRepository(User::class)->findAll();

     $gifts=['Flower', 'Cake', 'Car', 'Iphone'];
     shuffle($gifts);
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users,
            'Random_gift' => $gifts,

        ]);
    }
}
