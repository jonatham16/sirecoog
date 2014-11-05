<?php

namespace Sirecoog\AgenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SirecoogAgenciaBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function portadaAction($login) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('SirecoogUsuarioBundle:Usuario')->findOneByLogin($login);
        if(!$usuario){
            throw $this->createNotFoundException('!! NO SE ENCONTRO EL USUARIO !!');
        }
        return $this->render('SirecoogAgenciaBundle:Default:portada.html.twig', array('usuario' => $usuario));
        
    }
    public function resumenAction($login) {
        $em = $this->getDoctrine()->getManager();
        $resumen = $em->getRepository('SirecoogAgenciaBundle:Tope')->findResumen($login);
        if(!$resumen){
            throw $this->createNotFoundException('!! NO SE ENCONTRARON LOS DATOS DE USUARIO !!');
        }
        return $this->render('SirecoogAgenciaBundle:Default:resumen.html.twig', array('resumen' => $resumen));
    }
}
