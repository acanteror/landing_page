<?php

/* base.html.twig */
class __TwigTemplate_262e0075bd1e4f4e9cee822c9bedfa12df05472897d5123682fb3b4c34f0c159 extends Twig_Template
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
        $__internal_025b150cf41d86ab457b8c7499c1376c755a44595b66658a7f37df872daf7d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025b150cf41d86ab457b8c7499c1376c755a44595b66658a7f37df872daf7d35->enter($__internal_025b150cf41d86ab457b8c7499c1376c755a44595b66658a7f37df872daf7d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_025b150cf41d86ab457b8c7499c1376c755a44595b66658a7f37df872daf7d35->leave($__internal_025b150cf41d86ab457b8c7499c1376c755a44595b66658a7f37df872daf7d35_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee4ab3390b0eee27680763a2f4b1a7a4f3dce3270b6f88f6a7a7e8e1674aeca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4ab3390b0eee27680763a2f4b1a7a4f3dce3270b6f88f6a7a7e8e1674aeca0->enter($__internal_ee4ab3390b0eee27680763a2f4b1a7a4f3dce3270b6f88f6a7a7e8e1674aeca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landing Page";
        
        $__internal_ee4ab3390b0eee27680763a2f4b1a7a4f3dce3270b6f88f6a7a7e8e1674aeca0->leave($__internal_ee4ab3390b0eee27680763a2f4b1a7a4f3dce3270b6f88f6a7a7e8e1674aeca0_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_c67f7fc5b9e0ad653b1b260a819f0d3e2d94ae67c0c04b20c9ceeeb080cbf6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67f7fc5b9e0ad653b1b260a819f0d3e2d94ae67c0c04b20c9ceeeb080cbf6e2->enter($__internal_c67f7fc5b9e0ad653b1b260a819f0d3e2d94ae67c0c04b20c9ceeeb080cbf6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c67f7fc5b9e0ad653b1b260a819f0d3e2d94ae67c0c04b20c9ceeeb080cbf6e2->leave($__internal_c67f7fc5b9e0ad653b1b260a819f0d3e2d94ae67c0c04b20c9ceeeb080cbf6e2_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e05d95ae6789d22f581391368ecc13bb0975f2fbf260a032f0df0c9e56f5536b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05d95ae6789d22f581391368ecc13bb0975f2fbf260a032f0df0c9e56f5536b->enter($__internal_e05d95ae6789d22f581391368ecc13bb0975f2fbf260a032f0df0c9e56f5536b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "
";
        
        $__internal_e05d95ae6789d22f581391368ecc13bb0975f2fbf260a032f0df0c9e56f5536b->leave($__internal_e05d95ae6789d22f581391368ecc13bb0975f2fbf260a032f0df0c9e56f5536b_prof);

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
</html>", "base.html.twig", "/Library/WebServer/Documents/landing/app/Resources/views/base.html.twig");
    }
}
