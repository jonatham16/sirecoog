<?php

namespace Sirecoog\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SirecoogUsuarioBundle:Default:index.html.twig', array('name' => $name));
    }
}
