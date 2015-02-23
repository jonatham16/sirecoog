<?php

/* SirecoogUsuarioBundle:Default:login.html.twig */
class __TwigTemplate_7c444dd7b3cb50a9172cea1768523f62b35b00384e66daa1d6a07376fc51e313 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>LOGIN!</title>
    </head>
    <body>
        ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
        ";
        }
        // line 12
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\">
            <label for=\"username\">Usuario:</label>
            <input type=\"text\" id=\"username\" name=\"_username\"
                   value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
            <label for=\"password\">Contraseña:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
       <!--     <input type=\"hidden\" name=\"_target_path\" value=\"hello2\" /> -->
<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
<label for=\"remember_me\">No cerrar sesión</label>
<input type=\"hidden\" name=\"_csrf_token\"
        value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >

            <input type=\"submit\" name=\"login\" value=\"Acceder\" />
        </form>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SirecoogUsuarioBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  44 => 15,  37 => 12,  31 => 10,  29 => 9,  19 => 1,);
    }
}
