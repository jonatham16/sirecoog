<?php

/* ::base.html.twig */
class __TwigTemplate_efbbbc0f08388fce927326e3ea67e02e033310522c0db5844993f6bc1e707254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metades' => array($this, 'block_metades'),
            'metacont' => array($this, 'block_metacont'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'id' => array($this, 'block_id'),
            'body' => array($this, 'block_body'),
            'javascritps' => array($this, 'block_javascritps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 5
        $this->displayBlock('metades', $context, $blocks);
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('metacont', $context, $blocks);
        echo "\">
        <meta name=\"author\" content=\"Jonathan Molina Vargas, @jmolinavar\">
        <meta charset=\"utf-8\">

        ";
        // line 10
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 12
        echo "
    </head>
    <body id=\"";
        // line 14
        $this->displayBlock('id', $context, $blocks);
        echo "\" >
        <div class=\"tail-bottom\">
            <div id=\"main\">
                <!-- header -->
                <header>
                    <h1><a href=\"index.html\">BizSolutions</a></h1>   
                </header>
                <div class=\"wrapper indent\">
                    <!-- content -->
                    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "                </div>
                <!-- footer -->
                <footer>
                    <div class=\"inside\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo " Creditos a quien se lo merece: <br>
                        Website template designed by <a class=\"new_window\" href=\"http://store.templatemonster.com?aff=netsib1\" target=\"_blank\" rel=\"nofollow\">www.templatemonster.com</a><br/>3D Models provided by <a class=\"new_window\" href=\"http://www.templates.com/product/3d-models/\" target=\"_blank\" rel=\"nofollow\">www.templates.com</a>
                    </div>
                </footer>
                ";
        // line 33
        $this->displayBlock('javascritps', $context, $blocks);
        // line 35
        echo "            </div>
        </div>    
    </body>
</html>

";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido al SIRECOOG ";
    }

    // line 5
    public function block_metades($context, array $blocks = array())
    {
        echo " Meta descripcion comun ";
    }

    // line 6
    public function block_metacont($context, array $blocks = array())
    {
        echo "Meta Content";
    }

    // line 10
    public function block_stylesheet($context, array $blocks = array())
    {
        echo " 
        ";
    }

    // line 14
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "                    ";
    }

    // line 33
    public function block_javascritps($context, array $blocks = array())
    {
        // line 34
        echo "                ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 34,  128 => 33,  124 => 24,  121 => 23,  115 => 14,  108 => 10,  102 => 6,  96 => 5,  90 => 4,  81 => 35,  79 => 33,  72 => 29,  66 => 25,  64 => 23,  52 => 14,  48 => 12,  46 => 10,  39 => 6,  35 => 5,  31 => 4,  26 => 1,);
    }
}
