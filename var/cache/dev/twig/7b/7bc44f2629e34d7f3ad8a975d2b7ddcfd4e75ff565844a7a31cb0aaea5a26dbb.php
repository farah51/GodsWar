<?php

/* User/changer_infos.html.twig */
class __TwigTemplate_4fcdc7d7c4f84863987eefb42074ee489343c58a19bf4cc65c6800644c201a93 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "User/changer_infos.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/changer_infos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/changer_infos.html.twig"));

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

        echo "Changer vos informations";
        
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
        echo "    <div id=\"presentation\">
        <div class=\"container col-lg-6\">
            <div class=\"social\">
                <h1>Changer vos informations</h1>
                <div>
                    ";
        // line 11
        if (array_key_exists("message", $context)) {
            // line 12
            echo "                        <p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "</p>
                    ";
        }
        // line 14
        echo "                </div>

                    <div>
                        ";
        // line 17
        if (array_key_exists("form_pseudo", $context)) {
            // line 18
            echo "                            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_pseudo"]) || array_key_exists("form_pseudo", $context) ? $context["form_pseudo"] : (function () { throw new Twig_Error_Runtime('Variable "form_pseudo" does not exist.', 18, $this->source); })()), 'form_start');
            echo "
                            ";
            // line 19
            if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pseudo"]) || array_key_exists("form_pseudo", $context) ? $context["form_pseudo"] : (function () { throw new Twig_Error_Runtime('Variable "form_pseudo" does not exist.', 19, $this->source); })()), "username", array()), 'errors')) {
                // line 20
                echo "                                <br>
                                <p>Ce pseudo est déjà pris</p>
                            ";
            }
            // line 23
            echo "                            <br>
                            <p>Pseudo</p>
                            ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pseudo"]) || array_key_exists("form_pseudo", $context) ? $context["form_pseudo"] : (function () { throw new Twig_Error_Runtime('Variable "form_pseudo" does not exist.', 25, $this->source); })()), "username", array()), 'widget');
            echo "
                            <button class=\"btn btn btn-lg btn-primary\" type=\"submit\">Valider</button>
                            ";
            // line 27
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_pseudo"]) || array_key_exists("form_pseudo", $context) ? $context["form_pseudo"] : (function () { throw new Twig_Error_Runtime('Variable "form_pseudo" does not exist.', 27, $this->source); })()), 'form_end');
            echo "
                        ";
        } else {
            // line 29
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changer_pseudo");
            echo "\"><button type=\"submit\" class=\"btn btn-lg btn-primary\">Changer de pseudo</button></a>
                        ";
        }
        // line 31
        echo "                    </div>
                    <div>
                        ";
        // line 33
        if (array_key_exists("form_email", $context)) {
            // line 34
            echo "                            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_email"]) || array_key_exists("form_email", $context) ? $context["form_email"] : (function () { throw new Twig_Error_Runtime('Variable "form_email" does not exist.', 34, $this->source); })()), 'form_start');
            echo "
                            ";
            // line 35
            if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_email"]) || array_key_exists("form_email", $context) ? $context["form_email"] : (function () { throw new Twig_Error_Runtime('Variable "form_email" does not exist.', 35, $this->source); })()), "email", array()), 'errors')) {
                // line 36
                echo "                                <br>
                                <p>Cet Email est déjà pris ou n'est pas valide</p>
                            ";
            }
            // line 39
            echo "                            <br>
                            <p>Email</p>
                            ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_email"]) || array_key_exists("form_email", $context) ? $context["form_email"] : (function () { throw new Twig_Error_Runtime('Variable "form_email" does not exist.', 41, $this->source); })()), "email", array()), 'widget');
            echo "
                            <button class=\"btn btn-lg btn-primary\" type=\"submit\">Valider</button>
                            ";
            // line 43
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_email"]) || array_key_exists("form_email", $context) ? $context["form_email"] : (function () { throw new Twig_Error_Runtime('Variable "form_email" does not exist.', 43, $this->source); })()), 'form_end');
            echo "
                        ";
        } else {
            // line 45
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changer_email");
            echo "\"><button type=\"submit\" class=\"btn btn-lg btn-primary\">Changer de mail</button></a>
                        ";
        }
        // line 47
        echo "                    </div>
                    <div>
                        ";
        // line 49
        if (array_key_exists("form_mdp", $context)) {
            // line 50
            echo "                            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_mdp"]) || array_key_exists("form_mdp", $context) ? $context["form_mdp"] : (function () { throw new Twig_Error_Runtime('Variable "form_mdp" does not exist.', 50, $this->source); })()), 'form_start');
            echo "
                            ";
            // line 51
            if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_mdp"]) || array_key_exists("form_mdp", $context) ? $context["form_mdp"] : (function () { throw new Twig_Error_Runtime('Variable "form_mdp" does not exist.', 51, $this->source); })()), "password", array()), "first", array()), 'errors')) {
                // line 52
                echo "                                <br>
                                <p>Les mots de passes ne sont pas identitiques</p>
                            ";
            }
            // line 55
            echo "                            <br>
                            <p>Mot de passe</p>
                            ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_mdp"]) || array_key_exists("form_mdp", $context) ? $context["form_mdp"] : (function () { throw new Twig_Error_Runtime('Variable "form_mdp" does not exist.', 57, $this->source); })()), "password", array()), "first", array()), 'widget');
            echo "
                            <br>
                            ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_mdp"]) || array_key_exists("form_mdp", $context) ? $context["form_mdp"] : (function () { throw new Twig_Error_Runtime('Variable "form_mdp" does not exist.', 59, $this->source); })()), "password", array()), "second", array()), 'widget');
            echo "
                            <br>
                            <button class=\"btn btn btn-lg btn-primary\" type=\"submit\">Valider</button>
                            ";
            // line 62
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_mdp"]) || array_key_exists("form_mdp", $context) ? $context["form_mdp"] : (function () { throw new Twig_Error_Runtime('Variable "form_mdp" does not exist.', 62, $this->source); })()), 'form_end');
            echo "
                        ";
        } else {
            // line 64
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changer_mdp");
            echo "\"><button type=\"submit\" class=\"btn btn-lg btn-primary\">Changer le mot de passe</button></a>
                        ";
        }
        // line 66
        echo "                    </div>

                <a class=\"nav-link\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player");
        echo "\">Retour</a>

            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/changer_infos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 68,  208 => 66,  202 => 64,  197 => 62,  191 => 59,  186 => 57,  182 => 55,  177 => 52,  175 => 51,  170 => 50,  168 => 49,  164 => 47,  158 => 45,  153 => 43,  148 => 41,  144 => 39,  139 => 36,  137 => 35,  132 => 34,  130 => 33,  126 => 31,  120 => 29,  115 => 27,  110 => 25,  106 => 23,  101 => 20,  99 => 19,  94 => 18,  92 => 17,  87 => 14,  81 => 12,  79 => 11,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block title %}Changer vos informations{% endblock %}

{% block content %}
    <div id=\"presentation\">
        <div class=\"container col-lg-6\">
            <div class=\"social\">
                <h1>Changer vos informations</h1>
                <div>
                    {% if message is defined %}
                        <p>{{ message }}</p>
                    {% endif %}
                </div>

                    <div>
                        {% if form_pseudo is defined %}
                            {{ form_start(form_pseudo) }}
                            {% if form_errors(form_pseudo.username) %}
                                <br>
                                <p>Ce pseudo est déjà pris</p>
                            {% endif %}
                            <br>
                            <p>Pseudo</p>
                            {{ form_widget(form_pseudo.username) }}
                            <button class=\"btn btn btn-lg btn-primary\" type=\"submit\">Valider</button>
                            {{ form_end(form_pseudo) }}
                        {% else %}
                            <a href=\"{{ path('changer_pseudo') }}\"><button type=\"submit\" class=\"btn btn-lg btn-primary\">Changer de pseudo</button></a>
                        {% endif %}
                    </div>
                    <div>
                        {% if form_email is defined %}
                            {{ form_start(form_email) }}
                            {% if form_errors(form_email.email) %}
                                <br>
                                <p>Cet Email est déjà pris ou n'est pas valide</p>
                            {% endif %}
                            <br>
                            <p>Email</p>
                            {{ form_widget(form_email.email) }}
                            <button class=\"btn btn-lg btn-primary\" type=\"submit\">Valider</button>
                            {{ form_end(form_email) }}
                        {% else %}
                            <a href=\"{{ path('changer_email') }}\"><button type=\"submit\" class=\"btn btn-lg btn-primary\">Changer de mail</button></a>
                        {% endif %}
                    </div>
                    <div>
                        {% if form_mdp is defined %}
                            {{ form_start(form_mdp) }}
                            {% if form_errors(form_mdp.password.first) %}
                                <br>
                                <p>Les mots de passes ne sont pas identitiques</p>
                            {% endif %}
                            <br>
                            <p>Mot de passe</p>
                            {{ form_widget(form_mdp.password.first) }}
                            <br>
                            {{ form_widget(form_mdp.password.second) }}
                            <br>
                            <button class=\"btn btn btn-lg btn-primary\" type=\"submit\">Valider</button>
                            {{ form_end(form_mdp) }}
                        {% else %}
                            <a href=\"{{ path('changer_mdp') }}\"><button type=\"submit\" class=\"btn btn-lg btn-primary\">Changer le mot de passe</button></a>
                        {% endif %}
                    </div>

                <a class=\"nav-link\" href=\"{{ path('player') }}\">Retour</a>

            </div>
        </div>
    </div>

{% endblock %}", "User/changer_infos.html.twig", "C:\\wamp64\\www\\www\\jeu\\templates\\User\\changer_infos.html.twig");
    }
}
