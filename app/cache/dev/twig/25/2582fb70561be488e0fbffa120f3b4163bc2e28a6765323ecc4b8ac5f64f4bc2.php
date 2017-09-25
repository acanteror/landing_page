<?php

/* @Landing/Default/mail.html.twig */
class __TwigTemplate_416e1d52d8a2afda771180e4375c6e576378d73c69fe39cae4d613776cef82b1 extends Twig_Template
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
        $__internal_342ad8e27c96dfca66a9a95317ff9c2644210828409204b899cf822103434de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342ad8e27c96dfca66a9a95317ff9c2644210828409204b899cf822103434de4->enter($__internal_342ad8e27c96dfca66a9a95317ff9c2644210828409204b899cf822103434de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Landing/Default/mail.html.twig"));

        // line 1
        echo "<h2>Hola ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "name", array()), "html", null, true);
        echo ".</h2>


<p>Tu solicitud de información sobre el nuevo Opel ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "vehicle", array()), "name", array()), "html", null, true);
        echo " ha sido procesada.</p>
<br>
<p>En breve nuestro equipo comercial se pondrá en contacto contigo.</p>
<br><br>
<p>Gracias</p>
";
        
        $__internal_342ad8e27c96dfca66a9a95317ff9c2644210828409204b899cf822103434de4->leave($__internal_342ad8e27c96dfca66a9a95317ff9c2644210828409204b899cf822103434de4_prof);

    }

    public function getTemplateName()
    {
        return "@Landing/Default/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Hola {{ message.name }}.</h2>


<p>Tu solicitud de información sobre el nuevo Opel {{ message.vehicle.name }} ha sido procesada.</p>
<br>
<p>En breve nuestro equipo comercial se pondrá en contacto contigo.</p>
<br><br>
<p>Gracias</p>
", "@Landing/Default/mail.html.twig", "/Library/WebServer/Documents/landing/src/LandingBundle/Resources/views/Default/mail.html.twig");
    }
}
