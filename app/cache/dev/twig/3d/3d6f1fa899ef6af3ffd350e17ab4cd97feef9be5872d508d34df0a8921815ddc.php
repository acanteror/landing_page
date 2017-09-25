<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7a6967dc3581115b89582db84404a0791e90a526f784b65f764b23f3bac41cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b0ef088eb46900247318d3ab930d9df2e1a573be2539b2c67ea958e948ed8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0ef088eb46900247318d3ab930d9df2e1a573be2539b2c67ea958e948ed8cb->enter($__internal_1b0ef088eb46900247318d3ab930d9df2e1a573be2539b2c67ea958e948ed8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b0ef088eb46900247318d3ab930d9df2e1a573be2539b2c67ea958e948ed8cb->leave($__internal_1b0ef088eb46900247318d3ab930d9df2e1a573be2539b2c67ea958e948ed8cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_665a6e5c3598b0e5aa0be1eb2cb142baa31dedad63179a3c8179504118d50803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665a6e5c3598b0e5aa0be1eb2cb142baa31dedad63179a3c8179504118d50803->enter($__internal_665a6e5c3598b0e5aa0be1eb2cb142baa31dedad63179a3c8179504118d50803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_665a6e5c3598b0e5aa0be1eb2cb142baa31dedad63179a3c8179504118d50803->leave($__internal_665a6e5c3598b0e5aa0be1eb2cb142baa31dedad63179a3c8179504118d50803_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6fdd0b5cd8615ea07a007dcd203d55f242bb78a11197e7cefdbe0eb37ac2873b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdd0b5cd8615ea07a007dcd203d55f242bb78a11197e7cefdbe0eb37ac2873b->enter($__internal_6fdd0b5cd8615ea07a007dcd203d55f242bb78a11197e7cefdbe0eb37ac2873b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6fdd0b5cd8615ea07a007dcd203d55f242bb78a11197e7cefdbe0eb37ac2873b->leave($__internal_6fdd0b5cd8615ea07a007dcd203d55f242bb78a11197e7cefdbe0eb37ac2873b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1500f84674b47c2c910ff46b8c2a1e1f21efb0c1ad19f1362a9d876af92d192c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1500f84674b47c2c910ff46b8c2a1e1f21efb0c1ad19f1362a9d876af92d192c->enter($__internal_1500f84674b47c2c910ff46b8c2a1e1f21efb0c1ad19f1362a9d876af92d192c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1500f84674b47c2c910ff46b8c2a1e1f21efb0c1ad19f1362a9d876af92d192c->leave($__internal_1500f84674b47c2c910ff46b8c2a1e1f21efb0c1ad19f1362a9d876af92d192c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Library/WebServer/Documents/landing/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
