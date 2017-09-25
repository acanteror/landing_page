<?php

/* base.html.twig */
class __TwigTemplate_d058b33f1623651bf70292c2d8930f444457313f71388e267db1dece912386d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09807eea283dc3fcc33c3df6f66f27d7955e27a3f357c70dbdab39ac23e9935a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09807eea283dc3fcc33c3df6f66f27d7955e27a3f357c70dbdab39ac23e9935a->enter($__internal_09807eea283dc3fcc33c3df6f66f27d7955e27a3f357c70dbdab39ac23e9935a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\"
          integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

</head>

<body>
";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
</body>
</html>";
        
        $__internal_09807eea283dc3fcc33c3df6f66f27d7955e27a3f357c70dbdab39ac23e9935a->leave($__internal_09807eea283dc3fcc33c3df6f66f27d7955e27a3f357c70dbdab39ac23e9935a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61f2bd1c4164395f2b0e6bc37066af6ae60a93f43198835dad1a8e98d216411d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f2bd1c4164395f2b0e6bc37066af6ae60a93f43198835dad1a8e98d216411d->enter($__internal_61f2bd1c4164395f2b0e6bc37066af6ae60a93f43198835dad1a8e98d216411d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landing Page";
        
        $__internal_61f2bd1c4164395f2b0e6bc37066af6ae60a93f43198835dad1a8e98d216411d->leave($__internal_61f2bd1c4164395f2b0e6bc37066af6ae60a93f43198835dad1a8e98d216411d_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d436a83ebb0b1f07caa23909eb0877a674a1bb31e47c4c41df30603627684be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d436a83ebb0b1f07caa23909eb0877a674a1bb31e47c4c41df30603627684be->enter($__internal_4d436a83ebb0b1f07caa23909eb0877a674a1bb31e47c4c41df30603627684be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d436a83ebb0b1f07caa23909eb0877a674a1bb31e47c4c41df30603627684be->leave($__internal_4d436a83ebb0b1f07caa23909eb0877a674a1bb31e47c4c41df30603627684be_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59477c08bf7e8fb4c59eeae9ef4f0d5522b0c4b8b7991e545e2820545277bb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59477c08bf7e8fb4c59eeae9ef4f0d5522b0c4b8b7991e545e2820545277bb19->enter($__internal_59477c08bf7e8fb4c59eeae9ef4f0d5522b0c4b8b7991e545e2820545277bb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "
";
        
        $__internal_59477c08bf7e8fb4c59eeae9ef4f0d5522b0c4b8b7991e545e2820545277bb19->leave($__internal_59477c08bf7e8fb4c59eeae9ef4f0d5522b0c4b8b7991e545e2820545277bb19_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  92 => 20,  81 => 19,  69 => 5,  58 => 23,  56 => 20,  54 => 19,  45 => 13,  38 => 9,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Landing Page{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\"
          integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/font-awesome/css/font-awesome.min.css') }}\">


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

</head>

<body>
{% block body %}{% endblock %}
{% block javascripts %}

{% endblock %}

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
</body>
</html>", "base.html.twig", "/Users/acanteroruiz/Desktop/landing_page/app/Resources/views/base.html.twig");
    }
}
