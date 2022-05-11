<?php

namespace App\Controller;

use ContainerTK0x8IS\getSession_FactoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecondController extends AbstractController
{
    #[Route('/second', name: 'second')]
    public function index(Request $request): Response
    {
        $second=$request -> getSession();
        if ($second ->has('nbVisites')){
            $nbVisites=$second->get('nbVisites')+1;
        } else{
            $nbVisites=1;
        }
        $second->set('nbVisites',$nbVisites);

        $nbVisites=0;
        return $this->render('second/index.html.twig');
    }
}
