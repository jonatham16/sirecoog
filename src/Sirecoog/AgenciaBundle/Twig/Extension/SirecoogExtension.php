<?php
 namespace Sirecoog\AgenciaBundle\Twig\Extension;
 
 class SirecoogExtension extends \Twig_Extension{
     
     public function getFunctions() {
         return array('val_comas' => new \Twig_Function_Method($this,'val_comas'));
     }
     
     public function val_comas($numero) {
         return number_format($numero, 2, '.', ',');
     }
     
     public function getName() {
         return 'agencia';
     }
     
     
 }

