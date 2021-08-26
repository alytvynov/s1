<?php

namespace App\Controller;

use App\DTO\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    #[Route('/site', name: 'conference')]
    public function index(): Response
    {
        $user = (new User())->setName('Anton')->setLastName('Lytvynov');
        $data = $user->toArray();

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path'    => 'src/Controller/ConferenceController.php',
            'user'    => $user->getFullName(),
            'data'    => $data,
        ]);
    }
}
