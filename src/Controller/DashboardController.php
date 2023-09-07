<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        if (!$this->isGranted('ROLE_USER')) {
            throw new AccessDeniedException('Acceso denegado. Debes iniciar sesión.');
        }
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'Gracias por registrarte',
        ]);
    }
}
