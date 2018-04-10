<?php

/* User/chat.html.twig */
class __TwigTemplate_b4af564f39af765221f83933b4a3405371eb62aa5b24e110fea1c3c56ce828a5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "User/chat.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/chat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/chat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chat";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Libre+Baskerville\" rel=\"stylesheet\">
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function(){

        function ajax() {
            \$.ajax({
                url:\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat");
        echo "\",
                async : false,
                method : \"POST\",
                success: function(data) {
                    \$(\"#chat\").load(\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat");
        echo "\");
                }
            });
        }

        setInterval(ajax,2000);

        \$(function() {
            \$('input').on('click', function () {
                if(\$(\"textarea[name=message]\").val() != \"\"){
                    \$.ajax({
                        url:\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("envoyer");
        echo "\",
                        async : false,
                        type: \"POST\",
                        dataType: \"json\",
                        data: {
                            \"pseudo\": \"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "\",
                            \"message\": \$(\"textarea[name=message]\").val(),
                        },
                    });
                    \$(\"textarea[name=message]\").val(\"\");
                }
            });
        });

        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 48
        echo "    <div id=\"presentation\">
        <div class=\"social\">
            <h1>Chat</h1>
            <div class=\"container col-lg-4 col-md-5 col-sm-10\">
                <div id=\"chat\" class=\"promo\" style=\"background: url(";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/marbre2.png"), "html", null, true);
        echo ");font-family: 'Libre Baskerville', serif;margin:0;\"></div>
                <form method=\"post\" action=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("envoyer");
        echo "\">
                    <div class=\"row\">
                        <div style=\"display:inline-block;\" class=\"col-8\">
                            <textarea placeholder=\"Votre message\" style=\"width:120%;margin:0;\" class=\"promo\" id=\"text_message\" type=\"text\" value=\"\" name=\"message\"></textarea>
                        </div>
                        <div style=\"display:inline-block;\" class=\"col-4\">
                            <input type=\"button\" style=\"display:inline-block;margin:0;height:100%;width:100%;\" value=\"Envoyer\" class=\"btn btn-lg btn-primary\">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 53,  152 => 52,  146 => 48,  137 => 47,  114 => 33,  106 => 28,  92 => 17,  85 => 13,  76 => 7,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block title %}Chat{% endblock %}

{% block script %}
    <link href=\"https://fonts.googleapis.com/css?family=Libre+Baskerville\" rel=\"stylesheet\">
    <script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\"></script>
    <script>
        \$(document).ready(function(){

        function ajax() {
            \$.ajax({
                url:\"{{ path('chat')}}\",
                async : false,
                method : \"POST\",
                success: function(data) {
                    \$(\"#chat\").load(\"{{ path('chat')}}\");
                }
            });
        }

        setInterval(ajax,2000);

        \$(function() {
            \$('input').on('click', function () {
                if(\$(\"textarea[name=message]\").val() != \"\"){
                    \$.ajax({
                        url:\"{{ path('envoyer')}}\",
                        async : false,
                        type: \"POST\",
                        dataType: \"json\",
                        data: {
                            \"pseudo\": \"{{ app.user.username }}\",
                            \"message\": \$(\"textarea[name=message]\").val(),
                        },
                    });
                    \$(\"textarea[name=message]\").val(\"\");
                }
            });
        });

        });

    </script>
{% endblock %}

{% block content %}
    <div id=\"presentation\">
        <div class=\"social\">
            <h1>Chat</h1>
            <div class=\"container col-lg-4 col-md-5 col-sm-10\">
                <div id=\"chat\" class=\"promo\" style=\"background: url({{ asset('img/marbre2.png')}});font-family: 'Libre Baskerville', serif;margin:0;\"></div>
                <form method=\"post\" action=\"{{ path('envoyer') }}\">
                    <div class=\"row\">
                        <div style=\"display:inline-block;\" class=\"col-8\">
                            <textarea placeholder=\"Votre message\" style=\"width:120%;margin:0;\" class=\"promo\" id=\"text_message\" type=\"text\" value=\"\" name=\"message\"></textarea>
                        </div>
                        <div style=\"display:inline-block;\" class=\"col-4\">
                            <input type=\"button\" style=\"display:inline-block;margin:0;height:100%;width:100%;\" value=\"Envoyer\" class=\"btn btn-lg btn-primary\">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
{% endblock %}", "User/chat.html.twig", "C:\\wamp64\\www\\www\\jeu\\templates\\User\\Chat.html.twig");
    }
}
