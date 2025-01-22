<?php

namespace App\Controller;

use App\Form\SignupType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SignupController extends AbstractController
{
    #[Route('/', name: 'app_signup')]
    public function index(Request $request): Response
    {

        $form = $this->createForm(SignupType::class);
        $form->handleRequest($request);

        dump(random_int(1, 100));
        dump($form->isSubmitted());

        return $this->render('signup/index.html.twig', [
            'controller_name' => 'SignupController',
            'form' => $form->createView(),
        ]);
    }
}
