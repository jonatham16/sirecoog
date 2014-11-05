<?php

namespace Sirecoog\RecaudoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SirecoogRecaudoBundle:Default:index.html.twig', array('name' => $name));
    }
}
