<?php

/* User/player.html.twig */
class __TwigTemplate_251b4b06c8332456aa8f369c24c1d044c2c0bcbe32959982cc06cc501a18e8d7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "User/player.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/player.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/player.html.twig"));

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

        echo "Espace membre";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div id=\"presentation\">
    <div class=\"social\">
        <h1>Bienvenue ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo " !</h1>
        ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "user", array()), "partiecours", array()) == 0)) {
            // line 10
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouvelle_partie");
            echo "\"><button class=\"btn btn-lg btn-primary\">JOUER</button></a>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "user", array()), "partiecours", array()) != 0) && ((isset($context["ja"]) || array_key_exists("ja", $context) ? $context["ja"] : (function () { throw new Twig_Error_Runtime('Variable "ja" does not exist.', 13, $this->source); })()) != ""))) {
            // line 14
            echo "            <div class=\"social\">
                <div class=\"row\">
                    <div class=\"col-lg-4 \">
                    </div>
                    <div class=\"col-lg-4 \">
                        <p>Vous avez une partie nommée <strong>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 19, $this->source); })()), "nom", array()), "html", null, true);
            echo "</strong> en cours contre <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ja"]) || array_key_exists("ja", $context) ? $context["ja"] : (function () { throw new Twig_Error_Runtime('Variable "ja" does not exist.', 19, $this->source); })()), "username", array()), "html", null, true);
            echo "</strong> </p>
                    </div>
                    <div class=\"col-lg-4 container\">
                        <span><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->source); })()), "user", array()), "partiecours", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-lg btn-primary\">REJOINDRE</button></a></span>
                </div>
            </div>
        ";
        }
        // line 26
        echo "    </div>
    <div class=\"col-lg-8 container\">
        <table class=\"first table-responsive\">
            <tr>
                <td class=\"col-1\">Pseudo</td>
                <td class=\"col-1\">Email</td>
                <td class=\"col-4\">Nb de parties</td>
                <td class=\"col-2\">victoires</td>
                <td class=\"col-2\">défaites</td>
                <td class=\"col-2\">ratio</td>
            </tr>
            <tr>
                <td class=\"col-1\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                <td class=\"col-1\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->source); })()), "user", array()), "email", array()), "html", null, true);
        echo "</td>
                <td class=\"col-4\"><strong>";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["nbpartie"]) || array_key_exists("nbpartie", $context) ? $context["nbpartie"] : (function () { throw new Twig_Error_Runtime('Variable "nbpartie" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</strong></td>
                <td class=\"col-2\"><strong>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "user", array()), "victoire", array()), "html", null, true);
        echo "</strong></td>
                <td class=\"col-2\"><strong>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->source); })()), "user", array()), "defaite", array()), "html", null, true);
        echo "</strong></td>
                <td class=\"col-2\"><strong>";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new Twig_Error_Runtime('Variable "ratio" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "</strong></td>
            </tr>
        </table>
        </div>
    <div class=\"social\">
        <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changer_infos");
        echo "\"><button class=\"btn btn-sm btn-primary\">Changer vos informations</button></a>
    </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/player.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 48,  149 => 43,  145 => 42,  141 => 41,  137 => 40,  133 => 39,  129 => 38,  115 => 26,  108 => 22,  100 => 19,  93 => 14,  91 => 13,  88 => 12,  82 => 10,  80 => 9,  76 => 8,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block title %}Espace membre{% endblock %}

{% block content %}
<div id=\"presentation\">
    <div class=\"social\">
        <h1>Bienvenue {{ app.user.username }} !</h1>
        {% if app.user.partiecours == 0 %}
            <a href=\"{{ path('nouvelle_partie') }}\"><button class=\"btn btn-lg btn-primary\">JOUER</button></a>
        {% endif %}

        {% if app.user.partiecours != 0 and ja != \"\" %}
            <div class=\"social\">
                <div class=\"row\">
                    <div class=\"col-lg-4 \">
                    </div>
                    <div class=\"col-lg-4 \">
                        <p>Vous avez une partie nommée <strong>{{ partie.nom }}</strong> en cours contre <strong>{{ ja.username }}</strong> </p>
                    </div>
                    <div class=\"col-lg-4 container\">
                        <span><a href=\"{{ path('afficher_partie', {'id': app.user.partiecours }) }}\"><button class=\"btn btn-lg btn-primary\">REJOINDRE</button></a></span>
                </div>
            </div>
        {% endif %}
    </div>
    <div class=\"col-lg-8 container\">
        <table class=\"first table-responsive\">
            <tr>
                <td class=\"col-1\">Pseudo</td>
                <td class=\"col-1\">Email</td>
                <td class=\"col-4\">Nb de parties</td>
                <td class=\"col-2\">victoires</td>
                <td class=\"col-2\">défaites</td>
                <td class=\"col-2\">ratio</td>
            </tr>
            <tr>
                <td class=\"col-1\">{{ app.user.username }}</td>
                <td class=\"col-1\">{{ app.user.email }}</td>
                <td class=\"col-4\"><strong>{{ nbpartie }}</strong></td>
                <td class=\"col-2\"><strong>{{ app.user.victoire }}</strong></td>
                <td class=\"col-2\"><strong>{{ app.user.defaite }}</strong></td>
                <td class=\"col-2\"><strong>{{ ratio }}</strong></td>
            </tr>
        </table>
        </div>
    <div class=\"social\">
        <a href=\"{{ path('changer_infos') }}\"><button class=\"btn btn-sm btn-primary\">Changer vos informations</button></a>
    </div>
    </div>
</div>

{% endblock %}



", "User/player.html.twig", "C:\\wamp64\\www\\www\\jeu\\templates\\User\\player.html.twig");
    }
}
