<?php

/* SirecoogAgenciaBundle:Default:portada.html.twig */
class __TwigTemplate_a430a5664402673a5b352397db2111dd5e3500ae4d5056774f8f560647f65845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido usted esta en la portada
";
    }

    // line 5
    public function block_id($context, array $blocks = array())
    {
        echo "portada";
    }

    // line 8
    public function block_contenido($context, array $blocks = array())
    {
        // line 9
        echo "            <section id=\"content\">
                
                <div class=\"inside\">
                    <h2><span>Bienvenido</span> al Sirecoog 2.0!</h2>
                    <p><b>Hola ";
        // line 13
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), 8, true), "html", null, true);
        echo "! truncado</b> 
                    <p><b>Hola ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "!</b> 
                        Acabas de ingresar al Sistema de información para la administración de Recaudo. Se han habilitado una serie de opciones que podrá localizar en la parte superior de esta area y sobre las cuales se le ha permitido ejecutar acciones que pueden ser de consulta o modificación de la información almacenada.
                        <br>
                        <br>         
          Se recomienda que haga un uso adecuado de este recurso y preste total atención a los diferentes mensajes que el Sistema muestra durante su utilización, ya que esto evitará errores en las tareas que este ejecutando.
          It has several pages: <a href=\"index.html\">Home</a>, <a href=\"about-us.html\">About</a>, <a href=\"articles.html\">Articles</a> (with Article page), <a href=\"contact-us.html\">Contacts</a> (note that contact us form – doesn’t work), <a href=\"sitemap.html\">Site Map.</a></p>
                </div>

            </section>
        ";
    }

    public function getTemplateName()
    {
        return "SirecoogAgenciaBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  52 => 13,  46 => 9,  43 => 8,  37 => 5,  30 => 3,);
    }
}
