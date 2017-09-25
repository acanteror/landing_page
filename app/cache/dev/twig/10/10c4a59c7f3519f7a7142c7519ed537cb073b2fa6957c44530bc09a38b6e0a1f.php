<?php

/* LandingBundle:Default:index.html.twig */
class __TwigTemplate_61333416d93ab14874973a5052f06b50c30fcc9e75c21d37b90e36a69f2b0a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LandingBundle:Default:index.html.twig", 1);
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
        $__internal_a571253ad16b8d2738b8bf12bec4c5031732b9bd2ba757caad760fb2831d4ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a571253ad16b8d2738b8bf12bec4c5031732b9bd2ba757caad760fb2831d4ba2->enter($__internal_a571253ad16b8d2738b8bf12bec4c5031732b9bd2ba757caad760fb2831d4ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LandingBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a571253ad16b8d2738b8bf12bec4c5031732b9bd2ba757caad760fb2831d4ba2->leave($__internal_a571253ad16b8d2738b8bf12bec4c5031732b9bd2ba757caad760fb2831d4ba2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9711a879afea075ab3f3eeb9c258b214c4312f634c6b87c71db78860918da2a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9711a879afea075ab3f3eeb9c258b214c4312f634c6b87c71db78860918da2a4->enter($__internal_9711a879afea075ab3f3eeb9c258b214c4312f634c6b87c71db78860918da2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container-fluid\" style=\"background-color: #FFC107;width: 100%; height: 100%;\">

        <div class=\"wrapper\" style=\"padding: 2% 30% 10% 30%;\" >
            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"\" style=\"\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/mokka.jpg"), "html", null, true);
        echo "\" class=\"img-rounded\" alt=\"Opel promo\" width=\"100%\" height=\"\">
                    </div>

                </div>
            </div>
            <div id=\"phoneWarning\" style=\"display:none;\" class=\"alert alert-danger\" role=\"alert\">
                <strong>Lo sentimos</strong>, el número de teléfono debe comenzar por 6,7 o 9 y tener 9 dígitos.
            </div>
            <div id=\"preferenceWarning\" style=\"display:none;\" class=\"alert alert-danger\" role=\"alert\">
                <strong>Lo sentimos</strong>, es necesario seleccionar una preferencia.
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <section class=\"panel\" style=\"background-color:grey ;padding:10px; margin-top:10px;\">

                        <form method=\"post\" action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save-message");
        echo "\" role=\"form\" enctype=\"multipart/form-data\" xmlns=\"http://www.w3.org/1999/html\">

                            ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                            <div class=\"row\">
                                <div class=\"col-md-6 col-xs-12\">
                                    <div class=\"form-group\">
                                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label');
        echo "
                                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeVehicle", array()), 'label');
        echo "
                                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeVehicle", array()), 'widget');
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preference", array()), 'label');
        echo "
                                        ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preference", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <div class=\"col-md-6 col-xs-12\">
                                    <div class=\"form-group\">
                                        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'label');
        echo "
                                        ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'widget');
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                                        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicle", array()), 'label');
        echo "
                                        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicle", array()), 'widget');
        echo "

                                    </div>

                                </div>
                            </div>

                            <div id=\"submitBtnDiv\" class=\"form-group\">
                                <button id=\"submitBtn\" type=\"submit\" class=\"btn btn-warning\">Enviar</button>
                            </div>

                            <div id=\"loadingSpinnerDiv\" style=\"display: none;\">
                                <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i>
                                <span class=\"sr-only\">Loading...</span>
                            </div>

                            ";
        // line 83
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </form>
                    </section>
                </div>
            </div>
        </div>

    </div>


    <script>


        \$(function() {
            showSubmitButton();

            hidePhoneWarning();
            hidePreferenceWarning();


        });

        \$(\"form\").submit(function(){
            showSpinner();
        });

        \$(\"#message_phone\").blur(function(){
            var \$phone = \$(\"#message_phone\").val();
            var \$first = \$phone.charAt(0);

            if (\$phone.length != 9 || (\$first != 9 && \$first != 7 && \$first != 6 )){
                showPhoneWarning();
                disableSubmit()
            } else {
                hidePhoneWarning();
                enableSubmit();
            }

        });

        \$(\"#message_preference\").blur(function(){
            var \$pref = \$(\"#message_preference\").val();
            if (\$pref == 0){
                showPreferenceWarning();
                disableSubmit();
            } else {
                hidePreferenceWarning();
                enableSubmit();
            }
        }).change(function(){
            if (\$pref == 0){
                showPreferenceWarning();
                disableSubmit();
            } else {
                hidePreferenceWarning();
                enableSubmit();
            }
        });

        \$(\"#message_typeVehicle\").change(function() {

            var data = {
                typeVehicle_id: \$(this).val()
            };

            \$.ajax({
                type: 'post',
                url: '";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_vehicles");
        echo "',
                data: data,
                success: function(data) {

                    console.log(data);

                    var \$vehicle_selector = \$('#message_vehicle');
                    \$vehicle_selector.html(data);

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(error);
                    console.log(thrownError);
                }
            });
        });

        function showPreferenceWarning(){
            \$(\"#preferenceWarning\").show();
        }

        function hidePreferenceWarning(){
            \$(\"#preferenceWarning\").hide();
        }

        function showPhoneWarning(){
            \$(\"#phoneWarning\").show();
        }

        function hidePhoneWarning(){
            \$(\"#phoneWarning\").hide();
        }

        function disableSubmit(){
            \$(\"#submitBtn\").attr('disabled', true);
        }

        function enableSubmit(){
            \$(\"#submitBtn\").attr('disabled', false);
        }

        function showSpinner() {
            \$(\"#submitBtnDiv\").css('display', 'none');
            \$(\"#loadingSpinnerDiv\").css('display', 'block');
        }

        function showSubmitButton(){
            \$(\"#submitBtnDiv\").css('display', 'block');
            \$(\"#loadingSpinnerDiv\").css('display', 'none');
        }

    </script>

";
        
        $__internal_9711a879afea075ab3f3eeb9c258b214c4312f634c6b87c71db78860918da2a4->leave($__internal_9711a879afea075ab3f3eeb9c258b214c4312f634c6b87c71db78860918da2a4_prof);

    }

    public function getTemplateName()
    {
        return "LandingBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 150,  175 => 83,  156 => 67,  152 => 66,  145 => 62,  141 => 61,  134 => 57,  130 => 56,  121 => 50,  117 => 49,  110 => 45,  106 => 44,  99 => 40,  95 => 39,  88 => 35,  84 => 34,  76 => 29,  72 => 28,  67 => 26,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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

    <div class=\"container-fluid\" style=\"background-color: #FFC107;width: 100%; height: 100%;\">

        <div class=\"wrapper\" style=\"padding: 2% 30% 10% 30%;\" >
            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"\" style=\"\">
                        <img src=\"{{ asset('assets/images/mokka.jpg') }}\" class=\"img-rounded\" alt=\"Opel promo\" width=\"100%\" height=\"\">
                    </div>

                </div>
            </div>
            <div id=\"phoneWarning\" style=\"display:none;\" class=\"alert alert-danger\" role=\"alert\">
                <strong>Lo sentimos</strong>, el número de teléfono debe comenzar por 6,7 o 9 y tener 9 dígitos.
            </div>
            <div id=\"preferenceWarning\" style=\"display:none;\" class=\"alert alert-danger\" role=\"alert\">
                <strong>Lo sentimos</strong>, es necesario seleccionar una preferencia.
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <section class=\"panel\" style=\"background-color:grey ;padding:10px; margin-top:10px;\">

                        <form method=\"post\" action=\"{{ path('save-message') }}\" role=\"form\" enctype=\"multipart/form-data\" xmlns=\"http://www.w3.org/1999/html\">

                            {{ form_start(form) }}
                            {{ form_errors(form) }}

                            <div class=\"row\">
                                <div class=\"col-md-6 col-xs-12\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.name) }}
                                        {{ form_widget(form.name) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(form.phone) }}
                                        {{ form_widget(form.phone) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(form.typeVehicle) }}
                                        {{ form_widget(form.typeVehicle) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(form.preference) }}
                                        {{ form_widget(form.preference) }}
                                    </div>
                                </div>

                                <div class=\"col-md-6 col-xs-12\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.surname) }}
                                        {{ form_widget(form.surname) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(form.email) }}
                                        {{ form_widget(form.email) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(form.vehicle) }}
                                        {{ form_widget(form.vehicle) }}

                                    </div>

                                </div>
                            </div>

                            <div id=\"submitBtnDiv\" class=\"form-group\">
                                <button id=\"submitBtn\" type=\"submit\" class=\"btn btn-warning\">Enviar</button>
                            </div>

                            <div id=\"loadingSpinnerDiv\" style=\"display: none;\">
                                <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i>
                                <span class=\"sr-only\">Loading...</span>
                            </div>

                            {{ form_end(form) }}
                        </form>
                    </section>
                </div>
            </div>
        </div>

    </div>


    <script>


        \$(function() {
            showSubmitButton();

            hidePhoneWarning();
            hidePreferenceWarning();


        });

        \$(\"form\").submit(function(){
            showSpinner();
        });

        \$(\"#message_phone\").blur(function(){
            var \$phone = \$(\"#message_phone\").val();
            var \$first = \$phone.charAt(0);

            if (\$phone.length != 9 || (\$first != 9 && \$first != 7 && \$first != 6 )){
                showPhoneWarning();
                disableSubmit()
            } else {
                hidePhoneWarning();
                enableSubmit();
            }

        });

        \$(\"#message_preference\").blur(function(){
            var \$pref = \$(\"#message_preference\").val();
            if (\$pref == 0){
                showPreferenceWarning();
                disableSubmit();
            } else {
                hidePreferenceWarning();
                enableSubmit();
            }
        }).change(function(){
            if (\$pref == 0){
                showPreferenceWarning();
                disableSubmit();
            } else {
                hidePreferenceWarning();
                enableSubmit();
            }
        });

        \$(\"#message_typeVehicle\").change(function() {

            var data = {
                typeVehicle_id: \$(this).val()
            };

            \$.ajax({
                type: 'post',
                url: '{{ path(\"select_vehicles\") }}',
                data: data,
                success: function(data) {

                    console.log(data);

                    var \$vehicle_selector = \$('#message_vehicle');
                    \$vehicle_selector.html(data);

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(error);
                    console.log(thrownError);
                }
            });
        });

        function showPreferenceWarning(){
            \$(\"#preferenceWarning\").show();
        }

        function hidePreferenceWarning(){
            \$(\"#preferenceWarning\").hide();
        }

        function showPhoneWarning(){
            \$(\"#phoneWarning\").show();
        }

        function hidePhoneWarning(){
            \$(\"#phoneWarning\").hide();
        }

        function disableSubmit(){
            \$(\"#submitBtn\").attr('disabled', true);
        }

        function enableSubmit(){
            \$(\"#submitBtn\").attr('disabled', false);
        }

        function showSpinner() {
            \$(\"#submitBtnDiv\").css('display', 'none');
            \$(\"#loadingSpinnerDiv\").css('display', 'block');
        }

        function showSubmitButton(){
            \$(\"#submitBtnDiv\").css('display', 'block');
            \$(\"#loadingSpinnerDiv\").css('display', 'none');
        }

    </script>

{% endblock %}


", "LandingBundle:Default:index.html.twig", "/Library/WebServer/Documents/landing/src/LandingBundle/Resources/views/Default/index.html.twig");
    }
}
