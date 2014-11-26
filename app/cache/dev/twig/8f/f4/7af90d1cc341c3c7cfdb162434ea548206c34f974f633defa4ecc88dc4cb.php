<?php

/* ::frontend.html.twig */
class __TwigTemplate_8ff47af90d1cc341c3c7cfdb162434ea548206c34f974f633defa4ecc88dc4cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["login"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "has", array(0 => "login"), "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "login"), "method")) : ((isset($context["login_iniciado"]) ? $context["login_iniciado"] : $this->getContext($context, "login_iniciado"))));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agencia/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agencia/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agencia/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">    
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"nav-box\">
        <nav>
            <ul class=\"fright\">
                <li><a href=\"index.html\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agencia/images/pic-home-act.gif"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"contact-us.html\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agencia/images/pic-mail.gif"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"sitemap.html\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agencia/images/pic-sitemap.gif"), "html", null, true);
        echo "\"></a></li>
            </ul>
            <ul>
                <li class=\"current\"><a href=\"index.html\">home</a></li>
                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a></li>\t\t\t\t\t
            </ul>
        </nav>
    </div> 
    ";
        // line 26
        $this->displayBlock('contenido', $context, $blocks);
        // line 28
        echo "

    <aside>
        <div class=\"inside\">
            ";
        // line 32
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("SirecoogAgenciaBundle:Default:resumen", array("login" => (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")))), array());
        // line 36
        echo "        </div>
    </aside>



";
    }

    // line 26
    public function block_contenido($context, array $blocks = array())
    {
        // line 27
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  99 => 26,  90 => 36,  88 => 32,  82 => 28,  80 => 26,  73 => 22,  66 => 18,  62 => 17,  58 => 16,  53 => 13,  50 => 12,  44 => 9,  40 => 8,  35 => 7,  32 => 6,  27 => 2,);
    }
}
