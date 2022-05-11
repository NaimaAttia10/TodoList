<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first/naima', name: 'first')]
    public function index(): Response
    {
        return $this->render('first/index.html.twig', [
        ]);
        // new response(
        //   <head> hello </head>
        //);
    }

    #[Route('/sayHello/{name}', name: 'say.hello')]
    public function sayHello($name): Response
    {
        return $this->render('first/hello.html.twig', [
            'name'=>'$name'
        ]);

    }
}

