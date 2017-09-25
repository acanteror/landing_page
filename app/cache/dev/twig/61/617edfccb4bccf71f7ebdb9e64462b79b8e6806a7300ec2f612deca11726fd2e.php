<?php

/* LandingBundle:Default:thanks-promotion.html.twig */
class __TwigTemplate_d2dd035a9c664983cec9289af50af1297caa1cea3c0bc39cd396cf0f79d682b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LandingBundle:Default:thanks-promotion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0db2370c7f9f950df9c9a1c89e6737b3ae7817338c4bbcc4d93f151127cc8c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db2370c7f9f950df9c9a1c89e6737b3ae7817338c4bbcc4d93f151127cc8c79->enter($__internal_0db2370c7f9f950df9c9a1c89e6737b3ae7817338c4bbcc4d93f151127cc8c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LandingBundle:Default:thanks-promotion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db2370c7f9f950df9c9a1c89e6737b3ae7817338c4bbcc4d93f151127cc8c79->leave($__internal_0db2370c7f9f950df9c9a1c89e6737b3ae7817338c4bbcc4d93f151127cc8c79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1726087da5df333f54bcab010edc6cee9d43e36e6878b3aa340a1897f26f258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1726087da5df333f54bcab010edc6cee9d43e36e6878b3aa340a1897f26f258->enter($__internal_f1726087da5df333f54bcab010edc6cee9d43e36e6878b3aa340a1897f26f258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\" >
        <div class=\"wrapper\" style=\"padding: 5% 15%;\" >

            <div class=\"jumbotron text-xs-center\"style=\"background-color: #FFC107; width:100%; height: 100%; \">
                <h3 class=\"display-3 text-center\">¡Gracias por tu solicitud!</h3>
                <br>
                <p class=\"text-center\"><strong>Vigila tu email</strong>, en breve tendrás noticias nuestras.</p>
                <hr>
                <p class=\"text-center\">
                    ¿Tienes prisa por estrenar coche? <a href=\"mailto:landing.page.opel.comercial@gmail.com\">
                        <i class=\"fa fa-envelope-square\"></i> Contacta aquí</a>
                </p>
                <p class=\"text-center\">
                    <a class=\"btn btn-primary btn-sm\" href=\"https://www.opel.es/\" target=\"_blank\" role=\"button\">Accede a nuestra web</a>
                </p>
            </div>

        </div>
    </div>


";
        
        $__internal_f1726087da5df333f54bcab010edc6cee9d43e36e6878b3aa340a1897f26f258->leave($__internal_f1726087da5df333f54bcab010edc6cee9d43e36e6878b3aa340a1897f26f258_prof);

    }

    public function getTemplateName()
    {
        return "LandingBundle:Default:thanks-promotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container-fluid\" >
        <div class=\"wrapper\" style=\"padding: 5% 15%;\" >

            <div class=\"jumbotron text-xs-center\"style=\"background-color: #FFC107; width:100%; height: 100%; \">
                <h3 class=\"display-3 text-center\">¡Gracias por tu solicitud!</h3>
                <br>
                <p class=\"text-center\"><strong>Vigila tu email</strong>, en breve tendrás noticias nuestras.</p>
                <hr>
                <p class=\"text-center\">
                    ¿Tienes prisa por estrenar coche? <a href=\"mailto:landing.page.opel.comercial@gmail.com\">
                        <i class=\"fa fa-envelope-square\"></i> Contacta aquí</a>
                </p>
                <p class=\"text-center\">
                    <a class=\"btn btn-primary btn-sm\" href=\"https://www.opel.es/\" target=\"_blank\" role=\"button\">Accede a nuestra web</a>
                </p>
            </div>

        </div>
    </div>


{% endblock %}", "LandingBundle:Default:thanks-promotion.html.twig", "/Library/WebServer/Documents/landing/src/LandingBundle/Resources/views/Default/thanks-promotion.html.twig");
    }
}
