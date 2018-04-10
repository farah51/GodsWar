<?php

/* User/chat_afficher.html.twig */
class __TwigTemplate_62be57b54c36fc1e7b086ef7309f58165ed405febe7a73b4856b4d3a482788b2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/chat_afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/chat_afficher.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 3
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["message"], "pseudo", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "user", array()), "username", array()))) {
                // line 4
                echo "
                    <div class=\"row\">
                        <span class=\"col-10\">
                            <span style=\"color:white;float:right;margin:0;text-align:right;\">";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", array()), "html", null, true);
                echo "</span>
                        </span>
                        <span class=\"col-2\">
                        </span>
                    </div>
                ";
            } else {
                // line 13
                echo "                    <span style=\"color:#F5C751;float:left;margin-left:5%;\"><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "pseudo", array()), "html", null, true);
                echo "</strong> : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", array()), "html", null, true);
                echo "</span>
                    <br>
                ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "User/chat_afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  53 => 13,  44 => 7,  39 => 4,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    {% for message in messages %}
                {% if message.pseudo== app.user.username %}

                    <div class=\"row\">
                        <span class=\"col-10\">
                            <span style=\"color:white;float:right;margin:0;text-align:right;\">{{ message.message }}</span>
                        </span>
                        <span class=\"col-2\">
                        </span>
                    </div>
                {% else %}
                    <span style=\"color:#F5C751;float:left;margin-left:5%;\"><strong>{{ message.pseudo }}</strong> : {{ message.message }}</span>
                    <br>
                {% endif %}
    {% endfor %}", "User/chat_afficher.html.twig", "C:\\wamp64\\www\\www\\jeu\\templates\\User\\Chat_afficher.html.twig");
    }
}
