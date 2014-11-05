<?php

/* SirecoogAgenciaBundle:Default:resumen.html.twig */
class __TwigTemplate_5d91b974dd7dd7834ff30ab428c54e6975545a716ae3e11297e193fa298a3684 extends Twig_Template
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
        echo "<h2><span>Tu</span> Resumen</h2>
<ul class=\"insurance\">
    <li><strong>Usuario</strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "usuario", array()), "nombre", array()), "html", null, true);
        echo "</li>
    <li><strong>Valor tope</strong>\$ ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "valor", array()), "html", null, true);
        echo "</li>
    <li><strong>Fecha</strong>";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "fecha", array()), "d-m-y"), "html", null, true);
        echo "</li>
    <li><strong>Hora</strong>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "hora", array()), "h:m:s"), "html", null, true);
        echo "</li>
    <li><strong>Tiempo transcurrido desde la asignacion</strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('date')->diff($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "fecha", array())), "html", null, true);
        echo "</li>
</ul>


";
    }

    public function getTemplateName()
    {
        return "SirecoogAgenciaBundle:Default:resumen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
