<?php

namespace Sirecoog\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('SirecoogUsuarioBundle:Default:index.html.twig');
    }

    public function loginAction() {
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $error = $peticion->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
        );
        return $this->render('SirecoogUsuarioBundle:Default:login.html.twig', array(
                    'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
                    'error' => $error
        ));
//        return $this->render('SirecoogUsuarioBundle:Default:login.html.twig');
    }

}
