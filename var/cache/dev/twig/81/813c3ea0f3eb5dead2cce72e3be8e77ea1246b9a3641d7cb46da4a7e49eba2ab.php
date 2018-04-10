<?php

/* User/admin.html.twig */
class __TwigTemplate_5c50ce4a06b26be6870e46309bebef4ebf991afd1f1bc76e2536ffd00640bf5d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "User/admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'subtitle' => array($this, 'block_subtitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/admin.html.twig"));

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

        echo "Espace Administrateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_subtitle($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subtitle"));

        // line 6
        echo "    <h1>Bienvenue ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "</h1>
    <p>Vous êtes sur l'espace administrateur</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <nav>
        <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
            <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Infos joueurs</a>
           <!-- <a class=\"nav-item nav-link\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Infos parties</a>-->
            <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Vos informations</a>
        </div>
    </nav>

        <div class=\"tab-content\" id=\"nav-tabContent\">
            <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">

                <div class=\"table-responsive\">
                    <table style=\"text-align:center;\" class=\"table table-sm table-hover\">
                        <tr>
                            <th >ID</th>
                            <th>Pseudo</th>
                            <th>Email</th>
                            <th>Nb de parties</th>
                            <th>% de victoires</th>
                            <th>Changer l'état</th>
                        </tr>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new Twig_Error_Runtime('Variable "joueurs" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 34
            echo "                            <tr>
                                <th>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["joueur"], "joueur", array()), "id", array()), "html", null, true);
            echo "</th>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["joueur"], "joueur", array()), "username", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["joueur"], "joueur", array()), "email", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "nbpartie", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "ratio", array()), "html", null, true);
            echo "</td>
                                <td><form method=\"post\" action=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changer_etat");
            echo "\">
                                        ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["joueur"], "joueur", array()), "bloque", array()) == 0)) {
                // line 42
                echo "                                            <input type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["joueur"], "joueur", array()), "id", array()), "html", null, true);
                echo "\" name=\"bloque\">
                                            <button class =\"btn btn-outline-danger btn-sm\" type=\"submit\">Bloquer</button>
                                        ";
            } else {
                // line 45
                echo "                                            <input type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["joueur"], "joueur", array()), "id", array()), "html", null, true);
                echo "\" name=\"bloque\">
                                            <button class =\"btn btn-outline-success btn-sm\" type=\"submit\">Débloquer</button>
                                        ";
            }
            // line 48
            echo "                                    </form>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </table>
                </div>

            </div>

           <!-- <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">

            </div>-->

            <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

                <div class=\"table-responsive\">
                    <table style=\"text-align:center;\" class=\"table table-sm table-hover\">
                        <tr>
                            <th>Pseudo</th>
                            <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 67, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->source); })()), "user", array()), "email", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 71,  193 => 67,  176 => 52,  167 => 48,  160 => 45,  153 => 42,  151 => 41,  147 => 40,  143 => 39,  139 => 38,  135 => 37,  131 => 36,  127 => 35,  124 => 34,  120 => 33,  96 => 11,  87 => 10,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Espace Administrateur{% endblock %}

{% block subtitle %}
    <h1>Bienvenue {{ app.user.username }}</h1>
    <p>Vous êtes sur l'espace administrateur</p>
{% endblock %}

{% block body %}

    <nav>
        <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
            <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Infos joueurs</a>
           <!-- <a class=\"nav-item nav-link\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Infos parties</a>-->
            <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Vos informations</a>
        </div>
    </nav>

        <div class=\"tab-content\" id=\"nav-tabContent\">
            <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">

                <div class=\"table-responsive\">
                    <table style=\"text-align:center;\" class=\"table table-sm table-hover\">
                        <tr>
                            <th >ID</th>
                            <th>Pseudo</th>
                            <th>Email</th>
                            <th>Nb de parties</th>
                            <th>% de victoires</th>
                            <th>Changer l'état</th>
                        </tr>
                        {% for joueur in joueurs %}
                            <tr>
                                <th>{{ joueur.joueur.id }}</th>
                                <td>{{ joueur.joueur.username }}</td>
                                <td>{{ joueur.joueur.email }}</td>
                                <td>{{ joueur.nbpartie }}</td>
                                <td>{{ joueur.ratio }}</td>
                                <td><form method=\"post\" action=\"{{ path('changer_etat') }}\">
                                        {% if joueur.joueur.bloque == 0 %}
                                            <input type=\"hidden\" value=\"{{ joueur.joueur.id }}\" name=\"bloque\">
                                            <button class =\"btn btn-outline-danger btn-sm\" type=\"submit\">Bloquer</button>
                                        {% else %}
                                            <input type=\"hidden\" value=\"{{ joueur.joueur.id }}\" name=\"bloque\">
                                            <button class =\"btn btn-outline-success btn-sm\" type=\"submit\">Débloquer</button>
                                        {% endif %}
                                    </form>
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>

            </div>

           <!-- <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">

            </div>-->

            <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

                <div class=\"table-responsive\">
                    <table style=\"text-align:center;\" class=\"table table-sm table-hover\">
                        <tr>
                            <th>Pseudo</th>
                            <td>{{ app.user.username }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ app.user.email }}</td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>



{% endblock %}", "User/admin.html.twig", "C:\\wamp64\\www\\www\\jeu\\templates\\User\\admin.html.twig");
    }
}
