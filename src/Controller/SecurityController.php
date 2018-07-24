<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function login( Request $request, AuthenticationUtils $utils)
    {
        $error=$utils->getLastAuthenticationError();
        $lastUsername=$utils->getLastUsername();

        return $this->render('security/login.html.twig', [

            'error'=>$error,
            'last_username'=>$lastUsername,



        ]);
    }
}
