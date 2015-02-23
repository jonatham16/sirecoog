<?php

/* SirecoogUsuarioBundle:Default:index.html.twig */
class __TwigTemplate_063c675a0ae5b3ce3d645a9273ef14838ba42fa8ef08dc183cc0d200ebe2966e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>LOGIN!</title>
    </head>
    <body>

        Hello 2!
        ";
        // line 10
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 11
            echo "            <p>Username: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
            echo "</p>
        ";
        }
        // line 13
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SirecoogUsuarioBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  32 => 11,  30 => 10,  19 => 1,);
    }
}
