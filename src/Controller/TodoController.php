<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TodoController extends AbstractController
{
    #[Route('/todo', name: 'app_todo')]
    public function index($request): Response
    {   //afficher notre tableau de Todo
        $session=$request->getSession();
        if(!$session->has('todos') ){
            $todos=array(
                'achat'=>'acheter cle usb',
                'cours'=>'finaliser mon cours',
                'correction'=>'corriger mes examnes');
        }
            $session->set('todos', $todos);
            return $this->render('todo/index.html.twig');
    }
}
