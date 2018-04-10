<?php

/* base2.html.twig */
class __TwigTemplate_27ef289a92dad2f6363728929cbea710821ca4b08e5f7648026c8d01abf79925 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
        <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\">
        <meta name=\"description\" content=\"Promotion website of Gods'war game by HELIOS\">
        <meta name=\"author\" content=\"Helios\">
        <link href=\"https://fonts.googleapis.com/css?family=Poppins\" rel=\"stylesheet\">

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
    </head>
    <body>

    ";
        // line 41
        $this->displayBlock('menu', $context, $blocks);
        // line 103
        echo "
    <main role=\"main\">

        ";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 121
        echo "
        ";
        // line 122
        $this->displayBlock('footer', $context, $blocks);
        // line 143
        echo "
    </main>

    ";
        // line 146
        $this->displayBlock('javascripts', $context, $blocks);
        // line 152
        echo "
    ";
        // line 153
        $this->displayBlock('script', $context, $blocks);
        // line 155
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gods'War";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_fin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <style>
                @font-face {
                    src: url( ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/CAESAR.TTF"), "html", null, true);
        echo ") format(\"TTF\");
                    src: url(";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/CAESAR.woff2"), "html", null, true);
        echo ") format(\"woff2\");
                    font-family: 'CAESAR';
                }

                /* Padding below the footer and lighter body text */
                * {
                    margin: 0;
                }

                body {
                    margin: 0 auto;
                    font-family: 'Poppins', sans-serif;
                }

                h1 {
                    font-family: 'CAESAR'!important;
                }
            </style>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "    <header>
            <nav style=\"background-color:black;\" class=\"navbar navbar-collapse collapse-right navbar-expand-md navbar-dark\">
                <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
                    <ul class=\"navbar-nav mr-auto\">
                            ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array(), "any", false, true), "roles", array(), "any", true, true)) {
            // line 52
            echo "                                ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->source); })()), "user", array()), "bloque", array()) != 1))) {
                // line 53
                echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
                // line 54
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player");
                echo "\">Votre Profil</a>
                                    </li>
                                    ";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->source); })()), "user", array()), "partiecours", array()) == 0)) {
                    // line 57
                    echo "                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
                    // line 58
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouvelle_partie");
                    echo "\">Jouer</a>
                                        </li>
                                    ";
                } else {
                    // line 61
                    echo "                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 62, $this->source); })()), "user", array()), "partiecours", array()))), "html", null, true);
                    echo "\">Jouer</a>
                                        </li>
                                    ";
                }
                // line 65
                echo "                                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 66
                echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
                // line 67
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Espace administrateur</a>
                                    </li>
                                ";
            } else {
                // line 70
                echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
                // line 71
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player");
                echo "\">Votre Profil</a>
                                    </li>
                                ";
            }
            // line 74
            echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classement");
            echo "\">Classement</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ch");
            echo "\">Chat</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("regles");
            echo "\">Règles</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Se déconnecter</a>
                                </li>
                            ";
        } else {
            // line 87
            echo "                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\">Accueil</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Se connecter</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_registration");
            echo "\">S'inscrire</a>
                                </li>
                            ";
        }
        // line 97
        echo "                    </ul>
                </div>
                </div>
            </nav>
    </header>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 107
        echo "            <div id=\"presentation\">
                <div class=\"container col-lg-6\">
                    <h1>Mettez les dieux de votre côté</h1>
                    <div class=\"social\">
                        <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">connexion</a>
                        <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_registration");
        echo "\">inscription</a>
                    </div>
                    <div class=\"embed-responsive embed-responsive-16by9 promo\">
                        <iframe class=\"embed-responsive-item\" width=\"500\" height=\"281\" src=\"https://www.youtube.com/embed/gjQpIY2fWTs?ecver=2\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 123
        echo "            <div id=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"social\">
                            <a href=\"https://www.facebook.com/GodsWarGame/\" target=\"_blank\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/social_icon/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\"></a>
                            <a href=\"https://twitter.com/GodsWarGame/\" target=\"_blank\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/social_icon/twitter.png"), "html", null, true);
        echo "\"></a>
                            <a href=\"https://www.youtube.com/channel/UC5VTogIeCsHn-HCxSz_qeFA\" target=\"_blank\"><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/social_icon/youtube.png"), "html", null, true);
        echo "\" alt=\"youtube\"></a>
                            <a href=\"https://www.instagram.com/godswargame/\" target=\"_blank\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/social_icon/insta.png"), "html", null, true);
        echo "\" alt=\"instagram\"></a>
                        </div>
                    </div>
                    <footer>
                        <p>&copy;2018 HELIOS. TOUS DROITS RÉSERVÉS.<br>
                            Toutes les marques citées appartiennent à leur propriétaire.</p>
                    </footer>
                    <div class=\"helios\">
                        <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_agency_black"), "html", null, true);
        echo "\" />
                    </div>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 147
        echo "        <script>window.jQuery || document.write('<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery-slim.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/holder.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 153
    public function block_script($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 154
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 154,  440 => 153,  428 => 150,  424 => 149,  420 => 148,  415 => 147,  406 => 146,  391 => 138,  380 => 130,  376 => 129,  372 => 128,  368 => 127,  362 => 123,  353 => 122,  334 => 112,  330 => 111,  324 => 107,  315 => 106,  300 => 97,  294 => 94,  288 => 91,  282 => 88,  279 => 87,  273 => 84,  267 => 81,  261 => 78,  255 => 75,  252 => 74,  246 => 71,  243 => 70,  237 => 67,  234 => 66,  231 => 65,  225 => 62,  222 => 61,  216 => 58,  213 => 57,  211 => 56,  206 => 54,  203 => 53,  200 => 52,  198 => 51,  187 => 45,  182 => 42,  173 => 41,  144 => 18,  140 => 17,  134 => 14,  129 => 13,  120 => 12,  102 => 4,  89 => 155,  87 => 153,  84 => 152,  82 => 146,  77 => 143,  75 => 122,  72 => 121,  70 => 106,  65 => 103,  63 => 41,  57 => 37,  55 => 12,  47 => 7,  41 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title %}Gods'War{% endblock %}</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
        <link rel=\"icon\" href=\"{{ asset('img/favicon.ico') }}\">
        <meta name=\"description\" content=\"Promotion website of Gods'war game by HELIOS\">
        <meta name=\"author\" content=\"Helios\">
        <link href=\"https://fonts.googleapis.com/css?family=Poppins\" rel=\"stylesheet\">

        {% block stylesheets %}
            <link href=\"{{ asset('dist/css/bootstrap.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('style_fin.css') }}\" rel=\"stylesheet\">
            <style>
                @font-face {
                    src: url( {{ asset('img/CAESAR.TTF') }}) format(\"TTF\");
                    src: url({{ asset('img/CAESAR.woff2') }}) format(\"woff2\");
                    font-family: 'CAESAR';
                }

                /* Padding below the footer and lighter body text */
                * {
                    margin: 0;
                }

                body {
                    margin: 0 auto;
                    font-family: 'Poppins', sans-serif;
                }

                h1 {
                    font-family: 'CAESAR'!important;
                }
            </style>
        {% endblock %}

    </head>
    <body>

    {% block menu %}
    <header>
            <nav style=\"background-color:black;\" class=\"navbar navbar-collapse collapse-right navbar-expand-md navbar-dark\">
                <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('index') }}\"><img src=\"{{ asset('img/logo.png') }}\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
                    <ul class=\"navbar-nav mr-auto\">
                            {% if app.user.roles is defined  %}
                                {% if is_granted('ROLE_USER') and app.user.bloque !=1 %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ path('player') }}\">Votre Profil</a>
                                    </li>
                                    {% if app.user.partiecours == 0 %}
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"{{ path('nouvelle_partie') }}\">Jouer</a>
                                        </li>
                                    {% else %}
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"{{ path('afficher_partie', {'id': app.user.partiecours }) }}\">Jouer</a>
                                        </li>
                                    {% endif %}
                                {% elseif is_granted('ROLE_ADMIN') %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ path('admin') }}\">Espace administrateur</a>
                                    </li>
                                {% else %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ path('player') }}\">Votre Profil</a>
                                    </li>
                                {% endif %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('classement') }}\">Classement</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('ch') }}\">Chat</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('regles') }}\">Règles</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('security_logout')}}\">Se déconnecter</a>
                                </li>
                            {% else %}
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"{{ path('index') }}\">Accueil</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('security_login') }}\">Se connecter</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('user_registration') }}\">S'inscrire</a>
                                </li>
                            {% endif %}
                    </ul>
                </div>
                </div>
            </nav>
    </header>
    {% endblock %}

    <main role=\"main\">

        {% block content %}
            <div id=\"presentation\">
                <div class=\"container col-lg-6\">
                    <h1>Mettez les dieux de votre côté</h1>
                    <div class=\"social\">
                        <a class=\"btn btn-lg btn-primary\" href=\"{{ path('security_login') }}\">connexion</a>
                        <a class=\"btn btn-lg btn-primary\" href=\"{{ path('user_registration') }}\">inscription</a>
                    </div>
                    <div class=\"embed-responsive embed-responsive-16by9 promo\">
                        <iframe class=\"embed-responsive-item\" width=\"500\" height=\"281\" src=\"https://www.youtube.com/embed/gjQpIY2fWTs?ecver=2\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            </div>
        {% endblock %}

        {% block footer %}
            <div id=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"social\">
                            <a href=\"https://www.facebook.com/GodsWarGame/\" target=\"_blank\"><img src=\"{{ asset('img/social_icon/facebook.png') }}\" alt=\"facebook\"></a>
                            <a href=\"https://twitter.com/GodsWarGame/\" target=\"_blank\"><img src=\"{{ asset('img/social_icon/twitter.png') }}\"></a>
                            <a href=\"https://www.youtube.com/channel/UC5VTogIeCsHn-HCxSz_qeFA\" target=\"_blank\"><img src=\"{{ asset('img/social_icon/youtube.png') }}\" alt=\"youtube\"></a>
                            <a href=\"https://www.instagram.com/godswargame/\" target=\"_blank\"><img src=\"{{ asset('img/social_icon/insta.png') }}\" alt=\"instagram\"></a>
                        </div>
                    </div>
                    <footer>
                        <p>&copy;2018 HELIOS. TOUS DROITS RÉSERVÉS.<br>
                            Toutes les marques citées appartiennent à leur propriétaire.</p>
                    </footer>
                    <div class=\"helios\">
                        <img src=\"{{ asset('img/logo_agency_black') }}\" />
                    </div>
                </div>
            </div>
        {% endblock %}

    </main>

    {% block javascripts %}
        <script>window.jQuery || document.write('<script src=\"{{ asset('assets/js/vendor/jquery-slim.min.js') }}\"><\\/script>')</script>
        <script src=\"{{ asset('assets/js/vendor/popper.min.js') }}\"></script>
        <script src=\"{{ asset('dist/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/vendor/holder.min.js') }}\"></script>
    {% endblock %}

    {% block script %}
    {% endblock %}

    </body>
</html>
", "base2.html.twig", "C:\\wamp64\\www\\www\\jeu\\templates\\base2.html.twig");
    }
}
