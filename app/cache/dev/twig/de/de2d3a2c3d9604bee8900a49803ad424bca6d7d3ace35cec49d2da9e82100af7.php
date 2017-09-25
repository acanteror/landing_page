<?php

/* LandingBundle:Default:_vehicles_select.html.twig */
class __TwigTemplate_82ae85b0e9ad97f92ca4426ef65808e1bfd43650a16d7c987562eb7b9f4f827f extends Twig_Template
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
        $__internal_a345475f7d824e4fa5d76bc1ff3871d80903cb33ba4786a7878175e1e2f65c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a345475f7d824e4fa5d76bc1ff3871d80903cb33ba4786a7878175e1e2f65c79->enter($__internal_a345475f7d824e4fa5d76bc1ff3871d80903cb33ba4786a7878175e1e2f65c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LandingBundle:Default:_vehicles_select.html.twig"));

        // line 2
        echo "    <option>Selecciona...</option>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) ? $context["vehicles"] : $this->getContext($context, "vehicles")));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 4
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehicle"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehicle"], "name", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a345475f7d824e4fa5d76bc1ff3871d80903cb33ba4786a7878175e1e2f65c79->leave($__internal_a345475f7d824e4fa5d76bc1ff3871d80903cb33ba4786a7878175e1e2f65c79_prof);

    }

    public function getTemplateName()
    {
        return "LandingBundle:Default:_vehicles_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#<selector id=\"messageForm_vehicle\" name=\"messageForm[vehicle]\">#}
    <option>Selecciona...</option>
    {% for vehicle in vehicles %}
        <option value=\"{{ vehicle.id }}\">{{ vehicle.name  }}</option>
    {% endfor %}
{#</selector>#}", "LandingBundle:Default:_vehicles_select.html.twig", "/Library/WebServer/Documents/landing/src/LandingBundle/Resources/views/Default/_vehicles_select.html.twig");
    }
}
