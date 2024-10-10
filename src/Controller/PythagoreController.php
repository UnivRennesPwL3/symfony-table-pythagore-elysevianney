<?php

namespace App\Controller;

use PythagorUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    #[Route('/pythagore', name: 'app_pythagore')]
    public function index(): Response
    {
        $pythagoreTable = PythagorUtility::display();
        //var_dump($pythagoreTable);

        return $this->render('pythagore/index.html.twig', [
            'controller_name' => 'PythagoreController',
            'pythagoreTable' => $pythagoreTable
        ]);
    }
}
