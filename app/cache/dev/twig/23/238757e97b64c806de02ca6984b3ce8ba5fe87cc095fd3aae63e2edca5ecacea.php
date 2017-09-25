<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a22d3e0aab9282c15b031a59ecd2e0a0a46510e395a845b86b292d96008338c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b370dc06d6836b372795d059ac49d7165ddbbed0cd0028ee66c206db30871d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b370dc06d6836b372795d059ac49d7165ddbbed0cd0028ee66c206db30871d3->enter($__internal_7b370dc06d6836b372795d059ac49d7165ddbbed0cd0028ee66c206db30871d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b370dc06d6836b372795d059ac49d7165ddbbed0cd0028ee66c206db30871d3->leave($__internal_7b370dc06d6836b372795d059ac49d7165ddbbed0cd0028ee66c206db30871d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90b601369ba489cc8f07f133d248b026805225bea0d0dc204bbe9c94ece97254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b601369ba489cc8f07f133d248b026805225bea0d0dc204bbe9c94ece97254->enter($__internal_90b601369ba489cc8f07f133d248b026805225bea0d0dc204bbe9c94ece97254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_90b601369ba489cc8f07f133d248b026805225bea0d0dc204bbe9c94ece97254->leave($__internal_90b601369ba489cc8f07f133d248b026805225bea0d0dc204bbe9c94ece97254_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_642db884bd3178f233c5e39d1b6e5abb0ec2422bd3ac29d504c8b528153fc2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642db884bd3178f233c5e39d1b6e5abb0ec2422bd3ac29d504c8b528153fc2e0->enter($__internal_642db884bd3178f233c5e39d1b6e5abb0ec2422bd3ac29d504c8b528153fc2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_642db884bd3178f233c5e39d1b6e5abb0ec2422bd3ac29d504c8b528153fc2e0->leave($__internal_642db884bd3178f233c5e39d1b6e5abb0ec2422bd3ac29d504c8b528153fc2e0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d61e72322d266b782b7b89f96124895ea72468095e16cbd1f865702cf2e3805f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61e72322d266b782b7b89f96124895ea72468095e16cbd1f865702cf2e3805f->enter($__internal_d61e72322d266b782b7b89f96124895ea72468095e16cbd1f865702cf2e3805f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d61e72322d266b782b7b89f96124895ea72468095e16cbd1f865702cf2e3805f->leave($__internal_d61e72322d266b782b7b89f96124895ea72468095e16cbd1f865702cf2e3805f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Library/WebServer/Documents/landing/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
