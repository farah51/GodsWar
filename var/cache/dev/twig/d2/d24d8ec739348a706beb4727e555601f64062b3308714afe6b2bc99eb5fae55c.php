<?php

/* jeu/afficher.html.twig */
class __TwigTemplate_cbd4f1e5896c22a633f10fdb7a6b11fa75d60d98c219c7d316fcfbb9c8ab0d84 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "jeu/afficher.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'script' => array($this, 'block_script'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jeu/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jeu/afficher.html.twig"));

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

        echo "Partie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 3, $this->source); })()), "nom", array()), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        @font-face {
            src: url( ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/CAESAR.TTF"), "html", null, true);
        echo ") format(\"TTF\");
            src: url(";
        // line 11
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



        li{
            list-style-type: none;
        }


        input:hover{
            opacity:0.7;
        }

        input[type=\"checkbox\"][id^=\"cb\"] {
            display: none;
        }

        input[type=\"radio\"][id^=\"cb\"] {
            display: none;
        }

        label {
            border: 1px solid grey;
            padding: 2px;
            display: block;
            position: relative;
            margin: 2px;
            cursor: pointer;
        }

        label:before {
            background-color: white;
            color: white;
            content: \" \";
            display: block;
            border-radius: 50%;
            border: 1px solid goldenrod;
            position: absolute;
            top: -5px;
            left: -5px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 28px;
            transition-duration: 0.4s;
            transform: scale(0);
        }

        label:hover{
            border: 3px solid goldenrod;
            transition-duration: 0.6s;

        }

        label img {
            height: 100px;
            width: 100px;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
        }

        :checked + label {
            border-color: goldenrod;
        }

        :checked + label:before {
            content: \"✓\";
            background-image:linear-gradient(to right, #F5C751, #B4812C, #F5C751 ,#C3882C);
            transform: scale(1);
        }

        :checked + label img {
            transform: scale(0.9);
            box-shadow: 0 0 5px #333;
            opacity:0.5;
            z-index: -1;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_script($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 108
        echo "
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>

                   <script>
                        setInterval(function(){

                            \$.ajax({
                                url: '";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_infos", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 115, $this->source); })()), "id", array()))), "html", null, true);
        echo "',
                                method : \"POST\",
                                success: function(data) {

                                    var id = '";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 119, $this->source); })()), "user", array()), "id", array()), "html", null, true);
        echo "';

                                    if(data == id){
                                        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["action_dispo"]) || array_key_exists("action_dispo", $context) ? $context["action_dispo"] : (function () { throw new Twig_Error_Runtime('Variable "action_dispo" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 123
            echo "                                            ";
            if ((((twig_get_attribute($this->env, $this->source, $context["action"], "dispo", array()) == 0) && ((isset($context["choix_paire"]) || array_key_exists("choix_paire", $context) ? $context["choix_paire"] : (function () { throw new Twig_Error_Runtime('Variable "choix_paire" does not exist.', 123, $this->source); })()) == 0)) && ((isset($context["choix_cadeau"]) || array_key_exists("choix_cadeau", $context) ? $context["choix_cadeau"] : (function () { throw new Twig_Error_Runtime('Variable "choix_cadeau" does not exist.', 123, $this->source); })()) == 0))) {
                // line 124
                echo "                                            window.location.reload();
                                            ";
            }
            // line 126
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                        console.log(data,id)
                                    }else{
                                        ";
        // line 129
        if ((((isset($context["message_fin"]) || array_key_exists("message_fin", $context) ? $context["message_fin"] : (function () { throw new Twig_Error_Runtime('Variable "message_fin" does not exist.', 129, $this->source); })()) != 0) && ((isset($context["message_fin"]) || array_key_exists("message_fin", $context) ? $context["message_fin"] : (function () { throw new Twig_Error_Runtime('Variable "message_fin" does not exist.', 129, $this->source); })()) == "Aucun vainqueur"))) {
            // line 130
            echo "                                        window.location.reload();
                                        ";
        }
        // line 132
        echo "                                        console.log(data,id);
                                    }

                                }
                            })
                        },5000);

                        setInterval(
                            function(){
                                \$.ajax({
                                    url: '";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_vainqueur", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 142, $this->source); })()), "id", array()))), "html", null, true);
        echo "',
                                    method : \"POST\",
                                    success: function(data) {
                                        if(data == true){
                                            window.location.reload();
                                            console.log(data)
                                        }else{
                                            console.log(data);
                                        }

                                    }
                                })
                            }
                            ,5000);
                    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 160
        echo "<div id=\"fond_jeu\" style=\"background: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/marbre_vecto.png"), "html", null, true);
        echo ");\">
    <div class=\"social\">
        <div class=\"row\">
            <div id=\"objectifs\" class=\"col\">
                    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new Twig_Error_Runtime('Variable "objectifs" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
            // line 165
            echo "                            <span style=\"width:7rem; height:10rem; display:inline-block;background: url(";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/gods/" . twig_get_attribute($this->env, $this->source, $context["carte"], "nom", array())) . ".png")), "html", null, true);
            echo ");background-size: 7rem 10rem;\">
                                <div style=\"height:1rem; line-height:1rem;\" class=\"row\">
                                    <div class=\"col-12\">
                                        ";
            // line 168
            if ((twig_get_attribute($this->env, $this->source, $context["carte"], "ja", array()) != 0)) {
                // line 169
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["carte"], "ja", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 170
                    echo "                                                <span style=\"background: -webkit-gradient(linear, left top, left bottom, from(#F5C751), to(#B4812C));\" class=\"badge badge-info\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "valeur", array()), "html", null, true);
                    echo "</span>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                                        ";
            }
            // line 173
            echo "                                    </div>
                                </div>
                                <div style=\"height:2rem;line-height:3rem;\" class=\"row\">
                                    <div class=\"col-12\">
                                        ";
            // line 177
            if ((twig_get_attribute($this->env, $this->source, $context["carte"], "jeton", array()) == "ja")) {
                // line 178
                echo "                                            <img style=\"width:2rem;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pion.png"), "html", null, true);
                echo "\">
                                        ";
            }
            // line 180
            echo "                                    </div>
                                </div>
                                <div class=\"row\" style=\"height:3rem;line-height:3rem;\">
                                    <div class=\"col-12\">
                                         ";
            // line 184
            if ((twig_get_attribute($this->env, $this->source, $context["carte"], "jeton", array()) == "autre")) {
                // line 185
                echo "                                             <img style=\"width:2rem;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pion.png"), "html", null, true);
                echo "\">
                                         ";
            }
            // line 187
            echo "                                    </div>
                                </div>
                                <div class=\"row\" style=\"height:2rem;line-height:-2rem;\">
                                    <div class=\"col-12\">
                                        ";
            // line 191
            if ((twig_get_attribute($this->env, $this->source, $context["carte"], "jeton", array()) == "j")) {
                // line 192
                echo "                                            <img style=\"width:2rem;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pion.png"), "html", null, true);
                echo "\">
                                        ";
            }
            // line 194
            echo "                                    </div>
                                </div>
                                <div class=\"row\" style=\"height:1rem;\">
                                    <div class=\"col-12\">
                                         ";
            // line 198
            if ((twig_get_attribute($this->env, $this->source, $context["carte"], "j", array()) != 0)) {
                // line 199
                echo "                                             ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["carte"], "j", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 200
                    echo "                                                 <span style=\"background: -webkit-gradient(linear, left top, left bottom, from(#F5C751), to(#B4812C));\" class=\"badge badge-success\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "valeur", array()), "html", null, true);
                    echo "</span>
                                             ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "                                         ";
            }
            // line 203
            echo "                                    </div>
                                </div>
                            </span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-3\" id=\"infos_partie\">
            ";
        // line 212
        if (twig_get_attribute($this->env, $this->source, ($context["j1"] ?? null), "username", array(), "any", true, true)) {
            // line 213
            echo "                <ul class=\"promo\" style=\"margin-left:5%;padding:0;margin-top:8.5%;line-height:130%;\">
                    <li>Partie n°";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 214, $this->source); })()), "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 214, $this->source); })()), "nom", array()), "html", null, true);
            echo "</li>
                        ";
            // line 215
            if ((twig_get_attribute($this->env, $this->source, (isset($context["j1"]) || array_key_exists("j1", $context) ? $context["j1"] : (function () { throw new Twig_Error_Runtime('Variable "j1" does not exist.', 215, $this->source); })()), "username", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 215, $this->source); })()), "user", array()), "username", array()))) {
                // line 216
                echo "                                <li>Contre j2 :  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["j2"]) || array_key_exists("j2", $context) ? $context["j2"] : (function () { throw new Twig_Error_Runtime('Variable "j2" does not exist.', 216, $this->source); })()), "username", array()), "html", null, true);
                echo "</li>
                                <li>Vous êtes j1 ";
                // line 217
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["j1"]) || array_key_exists("j1", $context) ? $context["j1"] : (function () { throw new Twig_Error_Runtime('Variable "j1" does not exist.', 217, $this->source); })()), "username", array()), "html", null, true);
                echo "</li>
                            ";
            } else {
                // line 219
                echo "                                <li>Votre adversaire : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["j1"]) || array_key_exists("j1", $context) ? $context["j1"] : (function () { throw new Twig_Error_Runtime('Variable "j1" does not exist.', 219, $this->source); })()), "username", array()), "html", null, true);
                echo " - j1</li>
                                <li>Vous : ";
                // line 220
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["j2"]) || array_key_exists("j2", $context) ? $context["j2"] : (function () { throw new Twig_Error_Runtime('Variable "j2" does not exist.', 220, $this->source); })()), "username", array()), "html", null, true);
                echo " - j2</li>
                        ";
            }
            // line 222
            echo "                    <li>Tour : <span id=\"tour\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 222, $this->source); })()), "tour", array()), "html", null, true);
            echo "</span></li>
                    <li>Manche : ";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 223, $this->source); })()), "manche", array()), "html", null, true);
            echo "</li>
                </ul>
            ";
        }
        // line 226
        echo "            </div>

            <div id=\"texteaction\" class=\"col-6\" style=\"background:url(";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/marbre3.png"), "html", null, true);
        echo ")\">

                ";
        // line 230
        if (((isset($context["message_fin"]) || array_key_exists("message_fin", $context) ? $context["message_fin"] : (function () { throw new Twig_Error_Runtime('Variable "message_fin" does not exist.', 230, $this->source); })()) != null)) {
            // line 231
            echo "                    ";
            if ((((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new Twig_Error_Runtime('Variable "score" does not exist.', 231, $this->source); })()) != "") || array_key_exists("score", $context))) {
                // line 232
                echo "                        <span>Score J1 = ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new Twig_Error_Runtime('Variable "score" does not exist.', 232, $this->source); })()), "j1", array()), "html", null, true);
                echo " contre </span><span> Score J2 = ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new Twig_Error_Runtime('Variable "score" does not exist.', 232, $this->source); })()), "j2", array()), "html", null, true);
                echo "</span>
                        <br>
                    ";
            }
            // line 235
            echo "                    ";
            if (((isset($context["message_fin"]) || array_key_exists("message_fin", $context) ? $context["message_fin"] : (function () { throw new Twig_Error_Runtime('Variable "message_fin" does not exist.', 235, $this->source); })()) == "Aucun vainqueur")) {
                // line 236
                echo "                        <li>";
                echo twig_escape_filter($this->env, (isset($context["message_fin"]) || array_key_exists("message_fin", $context) ? $context["message_fin"] : (function () { throw new Twig_Error_Runtime('Variable "message_fin" does not exist.', 236, $this->source); })()), "html", null, true);
                echo "</li>
                        <form method=\"post\" action=\"";
                // line 237
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 237, $this->source); })()), "id", array()))), "html", null, true);
                echo "\">
                            <input type=\"submit\" value=\"Passer à la manche suivante\" name=\"manche_suivante\" class=\"btn btn-primary\">
                        </form>
                    ";
            } else {
                // line 241
                echo "                        <h4>";
                echo twig_escape_filter($this->env, (isset($context["message_fin"]) || array_key_exists("message_fin", $context) ? $context["message_fin"] : (function () { throw new Twig_Error_Runtime('Variable "message_fin" does not exist.', 241, $this->source); })()), "html", null, true);
                echo "</h4>
                        <br>
                        <form method=\"post\" action=\"";
                // line 243
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 243, $this->source); })()), "id", array()))), "html", null, true);
                echo "\">
                            <input type=\"submit\" value=\"Retour à votre profil\" name=\"valid_fin\" class=\"btn btn-primary\">
                        </form>
                    ";
            }
            // line 247
            echo "                    ";
        } else {
            // line 248
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["action_dispo"]) || array_key_exists("action_dispo", $context) ? $context["action_dispo"] : (function () { throw new Twig_Error_Runtime('Variable "action_dispo" does not exist.', 248, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 249
                echo "                            ";
                if (((twig_get_attribute($this->env, $this->source, $context["action"], "nom", array()) == "dissimulation") && (twig_get_attribute($this->env, $this->source, $context["action"], "dispo", array()) == 1))) {
                    // line 250
                    echo "                                <li>A vous de jouer</li>
                            ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 251
$context["action"], "nom", array()) == "dissimulation") && (twig_get_attribute($this->env, $this->source, $context["action"], "dispo", array()) == 0))) {
                    // line 252
                    echo "                                <li>Vous n'avez pas la main, patientez le tour de votre adversaire ...</li>
                            ";
                }
                // line 254
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "                ";
        }
        // line 256
        echo "


                ";
        // line 259
        if (((isset($context["choix_cadeau"]) || array_key_exists("choix_cadeau", $context) ? $context["choix_cadeau"] : (function () { throw new Twig_Error_Runtime('Variable "choix_cadeau" does not exist.', 259, $this->source); })()) != 0)) {
            // line 260
            echo "                    <h1>Cadeau</h1>
                <li>Choississez une carte de votre adversaire à placer sur votre plateau</li>
                <form method=\"post\" action=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 262, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 263
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choix_cadeau"]) || array_key_exists("choix_cadeau", $context) ? $context["choix_cadeau"] : (function () { throw new Twig_Error_Runtime('Variable "choix_cadeau" does not exist.', 263, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["choix"]) {
                // line 264
                echo "                        <input type=\"radio\" id=\"cb";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choix"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choix"], "id", array()), "html", null, true);
                echo "\" name=\"carte_cadeau_choisie\">
                        <label style=\"display:inline-block;\" for=\"cb";
                // line 265
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choix"], "id", array()), "html", null, true);
                echo "\"><img style=\"width:6rem; height:10rem;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/objets/" . twig_get_attribute($this->env, $this->source, $context["choix"], "nom", array())) . ".png")), "html", null, true);
                echo "\" /></label>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "                    <br><input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Valider action\">
                </form>
                ";
        }
        // line 270
        echo "
                ";
        // line 271
        if (((isset($context["choix_paire"]) || array_key_exists("choix_paire", $context) ? $context["choix_paire"] : (function () { throw new Twig_Error_Runtime('Variable "choix_paire" does not exist.', 271, $this->source); })()) != 0)) {
            // line 272
            echo "                    <h1>Concurrence</h1>
                    <li>Choississez une paire l'autre sera attribuée à votre adversaire</li>
                    <form style=\"display:inline-block;\" method=\"post\" action=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 274, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choix_paire"]) || array_key_exists("choix_paire", $context) ? $context["choix_paire"] : (function () { throw new Twig_Error_Runtime('Variable "choix_paire" does not exist.', 275, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["choix"]) {
                // line 276
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["choix"], "paire", array()) == 1)) {
                    // line 277
                    echo "                                <span class=\"text-white\" style=\"width:6rem; height:10rem; display:inline-block;background: url(";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/objets/" . twig_get_attribute($this->env, $this->source, $context["choix"], "nom", array())) . ".png")), "html", null, true);
                    echo ");background-size: 6rem 10rem;\"></span>
                            ";
                }
                // line 279
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "<br>
                        <input type=\"hidden\" value=\"p1\" name=\"choix_paire\">
                        <input type=\"submit\" value=\"Paire1\" class=\"btn btn-sm btn-primary\">
                    </form>
                    <form method=\"post\" style=\"display:inline-block;\" action=\"";
            // line 283
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 283, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 284
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choix_paire"]) || array_key_exists("choix_paire", $context) ? $context["choix_paire"] : (function () { throw new Twig_Error_Runtime('Variable "choix_paire" does not exist.', 284, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["choix"]) {
                // line 285
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["choix"], "paire", array()) == 2)) {
                    // line 286
                    echo "                                <span class=\"text-white\" style=\"width:6rem; height:10rem; display:inline-block;background: url(";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/objets/" . twig_get_attribute($this->env, $this->source, $context["choix"], "nom", array())) . ".png")), "html", null, true);
                    echo ");background-size: 6rem 10rem;\"></span>
                            ";
                }
                // line 288
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "<br>
                        <input type=\"hidden\" value=\"p2\" name=\"choix_paire\">
                        <input type=\"submit\" value=\"Paire 2\" class=\"btn btn-sm btn-primary\">
                    </form>
                ";
        }
        // line 293
        echo "
                ";
        // line 294
        if (((isset($context["action_choisie"]) || array_key_exists("action_choisie", $context) ? $context["action_choisie"] : (function () { throw new Twig_Error_Runtime('Variable "action_choisie" does not exist.', 294, $this->source); })()) == "dissimulation")) {
            // line 295
            echo "                    <h3 style=\"font-family: 'CAESAR'\"><strong>SECRET</strong> : Choissisez <strong>1</strong> carte</h3>
                    <li id=\"informations\">Elle sera dissimulée et vous sera attribuée en fin de manche</li>
                    <img style=\"width:2rem;border-radius:10%;\" src=\"";
            // line 297
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/action/dissimulation.png"), "html", null, true);
            echo "\">
                    <br>
                    <a href=\"";
            // line 299
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 299, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Retour</a>
                ";
        } elseif ((        // line 300
(isset($context["action_choisie"]) || array_key_exists("action_choisie", $context) ? $context["action_choisie"] : (function () { throw new Twig_Error_Runtime('Variable "action_choisie" does not exist.', 300, $this->source); })()) == "disparition")) {
            // line 301
            echo "                    <h3 style=\"font-family: 'CAESAR'\"><strong>DISPARITION</strong> : Choissisez <strong>2</strong> cartes</h3>
                    <li>Elles seront écartées cette manche</li>
                    <img style=\"width:2rem;border-radius:10%;\" src=\"";
            // line 303
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/action/disparition.png"), "html", null, true);
            echo "\">
                    <br>
                    <a href=\"";
            // line 305
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 305, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Retour</a>
                ";
        } elseif ((        // line 306
(isset($context["action_choisie"]) || array_key_exists("action_choisie", $context) ? $context["action_choisie"] : (function () { throw new Twig_Error_Runtime('Variable "action_choisie" does not exist.', 306, $this->source); })()) == "cadeau")) {
            // line 307
            echo "                    <h3 style=\"font-family: 'CAESAR'\"><strong>CADEAU</strong> : Choissisez <strong>3</strong> cartes</h3>
                    <li>L'adversaire choisira une des cartes, les autres vous seront attribuées</li>
                    <img style=\"width:2rem;border-radius:10%;\" src=\"";
            // line 309
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/action/cadeau.png"), "html", null, true);
            echo "\">
                    <br>
                    <a href=\"";
            // line 311
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 311, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Retour</a>
                ";
        } elseif ((        // line 312
(isset($context["action_choisie"]) || array_key_exists("action_choisie", $context) ? $context["action_choisie"] : (function () { throw new Twig_Error_Runtime('Variable "action_choisie" does not exist.', 312, $this->source); })()) == "concurrence")) {
            // line 313
            echo "                    <h3 style=\"font-family: 'CAESAR'\"><strong>CONCURRENCE</strong> : Choissisez <strong>2 paires</strong> de cartes</h3>
                    <li>L'adversaire choisit une paire qui lui sera attribuée, l'autre vous sera attribuée</li>
                    <li>Séléctionnez bien <strong>4</strong> cartes différentes, 2 pour P1 et 2 pour P2</li>
                    <img style=\"width:2rem;border-radius:10%;\" src=\"";
            // line 316
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/action/concurrence.png"), "html", null, true);
            echo "\">
                    <br>
                    <a href=\"";
            // line 318
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 318, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Retour</a>
                ";
        }
        // line 320
        echo "            </div>

            <div class=\"col-3\" id=\"pioche\">
                <div style=\"width:7rem; height:10rem; display:inline-block;text-align:center;background: url(";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carte_verso.png"), "html", null, true);
        echo ");background-size: 7rem 10rem;border-radius:5px;\">
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-2\" id=\"actions_dispos\">
                    <li>Actions adverses</li>
                    ";
        // line 331
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["action_dispo_adverse"]) || array_key_exists("action_dispo_adverse", $context) ? $context["action_dispo_adverse"] : (function () { throw new Twig_Error_Runtime('Variable "action_dispo_adverse" does not exist.', 331, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 332
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "etat", array()) == 1)) {
                // line 333
                echo "                            <img style=\"margin:0;opacity:0.2;width:2rem;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/action/" . twig_get_attribute($this->env, $this->source, $context["action"], "nom", array())) . ".png")), "html", null, true);
                echo "\">
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 334
$context["action"], "etat", array()) == 0)) {
                // line 335
                echo "                            <img style=\"margin:0;width:2rem;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/action/" . twig_get_attribute($this->env, $this->source, $context["action"], "nom", array())) . ".png")), "html", null, true);
                echo "\">
                        ";
            }
            // line 337
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "
                <hr style=\"margin-top:1rem; margin-bottom:1rem;margin-left:25%;\">

                <li>Vos actions</li>
                    ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["action_dispo"]) || array_key_exists("action_dispo", $context) ? $context["action_dispo"] : (function () { throw new Twig_Error_Runtime('Variable "action_dispo" does not exist.', 342, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 343
            echo "
                        ";
            // line 344
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "nom", array()) == "dissimulation")) {
                // line 345
                echo "                                <form style=\"display:inline-block;\" method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 345, $this->source); })()), "id", array()))), "html", null, true);
                echo "\">
                                    <div class=\"form-group\">
                                        <input type=\"hidden\" value=\"dissimulation\" name=\"action\">
                                        ";
                // line 348
                if (((((twig_get_attribute($this->env, $this->source, $context["action"], "dispo", array()) == 0) || (twig_get_attribute($this->env, $this->source, $context["action"], "etat", array()) == 1)) || ((isset($context["choix_paire"]) || array_key_exists("choix_paire", $context) ? $context["choix_paire"] : (function () { throw new Twig_Error_Runtime('Variable "choix_paire" does not exist.', 348, $this->source); })()) != 0)) || ((isset($context["choix_cadeau"]) || array_key_exists("choix_cadeau", $context) ? $context["choix_cadeau"] : (function () { throw new Twig_Error_Runtime('Variable "choix_cadeau" does not exist.', 348, $this->source); })()) != 0))) {
                    // line 349
                    echo "                                            <input style=\"opacity:0.2;width:4rem;\" src=";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/action/" . twig_get_attribute($this->env, $this->source, $context["action"], "nom", array())) . ".png")), "html", null, true);
                    echo " type=image align=\"middle\" disabled >
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 350
$context["action"], "dispo", array()) == 1)) {
                    // line 351
                    echo "                                            <input id=\"btn-action\" style=\"width:4rem;\" src=";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/action/" . twig_get_attribute($this->env, $this->source, $context["action"], "nom", array())) . ".png")), "html", null, true);
                    echo " type=image align=\"middle\" >
                                        ";
                }
                // line 353
                echo "                                    </div>
                                </form>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 355
$context["action"], "nom", array()) == "disparition")) {
                // line 356
                echo "                                <form style=\"display:inline-block;\" method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 356, $this->source); })()), "id", array()))), "html", null, true);
                echo "\">
                                    <div class=\"form-group\">
                                        <input type=\"hidden\" value=\"disparition\" name=\"action\">
                                        ";
                // line 359
                if (((((twig_get_attribute($this->env, $this->source, $context["action"], "dispo", array()) == 0) || (twig_get_attribute($this->env, $this->source, $context["action"], "etat", array()) == 1)) || ((isset($context["choix_paire"]) || array_key_exists("choix_paire", $context) ? $context["choix_paire"] : (function () { throw new Twig_Error_Runtime('Variable "choix_paire" does not exist.', 359, $this->source); })()) != 0)) || ((isset($context["choix_cadeau"]) || array_key_exists("choix_cadeau", $context) ? $context["choix_cadeau"] : (function () { throw new Twig_Error_Runtime('Variable "choix_cadeau" does not exist.', 359, $this->source); })()) != 0))) {
                    // line 360
                    echo "                                            <input style=\"opacity:0.2;width:4rem;\" src=";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/action/" . twig_get_attribute($this->env, $this->source, $context["action"], "nom", array())) . ".png")), "html", null, true);
                    echo " type=image align=\"middle\" disabled >
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 361
$context["action"], "dispo", array()) == 1)) {
                    // line 362
                    echo "                                            <input id=\"btn-action\" style=\"width:4rem;\" src=";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/action/" . twig_get_attribute($this->env, $this->source, $context["action"], "nom", array())) . ".png")), "html", null, true);
                    echo " type=image align=\"middle\" >
                                        ";
                }
                // line 364
                echo "                                    </div>
                                </form>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 366
$context["action"], "nom", array()) == "cadeau")) {
                // line 367
                echo "                            <br>
                            <form style=\"display:inline-block;\" method=\"post\" action=\"";
                // line 368
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 368, $this->source); })()), "id", array()))), "html", null, true);
                echo "\">
                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"cadeau\" name=\"action\">
                                    ";
                // line 371
                if (((((twig_get_attribute($this->env, $this->source, $context["action"], "dispo", array()) == 0) || (twig_get_attribute($this->env, $this->source, $context["action"], "etat", array()) == 1)) || ((isset($context["choix_paire"]) || array_key_exists("choix_paire", $context) ? $context["choix_paire"] : (function () { throw new Twig_Error_Runtime('Variable "choix_paire" does not exist.', 371, $this->source); })()) != 0)) || ((isset($context["choix_cadeau"]) || array_key_exists("choix_cadeau", $context) ? $context["choix_cadeau"] : (function () { throw new Twig_Error_Runtime('Variable "choix_cadeau" does not exist.', 371, $this->source); })()) != 0))) {
                    // line 372
                    echo "                                        <input style=\"opacity:0.2;width:4rem;\" src=";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/action/" . twig_get_attribute($this->env, $this->source, $context["action"], "nom", array())) . ".png")), "html", null, true);
                    echo " type=image align=\"middle\" disabled >
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 373
$context["action"], "dispo", array()) == 1)) {
                    // line 374
                    echo "                                        <input style=\"width:4rem;\" id=\"btn-action\" src=";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/action/" . twig_get_attribute($this->env, $this->source, $context["action"], "nom", array())) . ".png")), "html", null, true);
                    echo " type=image align=\"middle\" >
                                    ";
                }
                // line 376
                echo "                                </div>
                            </form>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 378
$context["action"], "nom", array()) == "concurrence")) {
                // line 379
                echo "                                <form style=\"display:inline-block;\" method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 379, $this->source); })()), "id", array()))), "html", null, true);
                echo "\">
                                    <div class=\"form-group\">
                                        <input type=\"hidden\" value=\"concurrence\" name=\"action\">
                                        ";
                // line 382
                if (((((twig_get_attribute($this->env, $this->source, $context["action"], "dispo", array()) == 0) || (twig_get_attribute($this->env, $this->source, $context["action"], "etat", array()) == 1)) || ((isset($context["choix_paire"]) || array_key_exists("choix_paire", $context) ? $context["choix_paire"] : (function () { throw new Twig_Error_Runtime('Variable "choix_paire" does not exist.', 382, $this->source); })()) != 0)) || ((isset($context["choix_cadeau"]) || array_key_exists("choix_cadeau", $context) ? $context["choix_cadeau"] : (function () { throw new Twig_Error_Runtime('Variable "choix_cadeau" does not exist.', 382, $this->source); })()) != 0))) {
                    // line 383
                    echo "                                            <input style=\"opacity:0.2;width:4rem;\" src=";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/action/" . twig_get_attribute($this->env, $this->source, $context["action"], "nom", array())) . ".png")), "html", null, true);
                    echo " type=image align=\"middle\" disabled >
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 384
$context["action"], "dispo", array()) == 1)) {
                    // line 385
                    echo "                                            <input style=\"width:4rem;\" id=\"btn-action\" src=";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/action/" . twig_get_attribute($this->env, $this->source, $context["action"], "nom", array())) . ".png")), "html", null, true);
                    echo " type=image align=\"middle\" >
                                        ";
                }
                // line 387
                echo "                                    </div>
                                </form>
                        ";
            }
            // line 390
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 392
        echo "
            </div>
            <div id=\"main\" class=\"col-8\" style=\"text-align:center;\">

                ";
        // line 396
        if (((isset($context["action_choisie"]) || array_key_exists("action_choisie", $context) ? $context["action_choisie"] : (function () { throw new Twig_Error_Runtime('Variable "action_choisie" does not exist.', 396, $this->source); })()) == "dissimulation")) {
            // line 397
            echo "                    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 397, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["main"]) || array_key_exists("main", $context) ? $context["main"] : (function () { throw new Twig_Error_Runtime('Variable "main" does not exist.', 398, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
                // line 399
                echo "                            ";
                // line 400
                echo "                            <input type=\"radio\" id=\"cb";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\" name=\"carte_dissimulee_selectionnee\">
                            <label style=\"display:inline-block;\" for=\"cb";
                // line 401
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\"><img style=\"width:6rem; height:9.5rem;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/objets/" . twig_get_attribute($this->env, $this->source, $context["carte"], "nom", array())) . ".png")), "html", null, true);
                echo "\" /></label>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 403
            echo "                        <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Valider\">
                    </form>
                ";
        } elseif ((        // line 405
(isset($context["action_choisie"]) || array_key_exists("action_choisie", $context) ? $context["action_choisie"] : (function () { throw new Twig_Error_Runtime('Variable "action_choisie" does not exist.', 405, $this->source); })()) == "disparition")) {
            // line 406
            echo "                    <div id=\"disparition\">
                    <form method=\"post\" action=\"";
            // line 407
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 407, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 408
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["main"]) || array_key_exists("main", $context) ? $context["main"] : (function () { throw new Twig_Error_Runtime('Variable "main" does not exist.', 408, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
                // line 409
                echo "                                <input type=\"checkbox\" id=\"cb";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\" name=\"cartes_disparues[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\" />
                                <label style=\"display:inline-block;\" for=\"cb";
                // line 410
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\"><img style=\"width:6rem; height:10rem;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/objets/" . twig_get_attribute($this->env, $this->source, $context["carte"], "nom", array())) . ".png")), "html", null, true);
                echo "\" /></label>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 412
            echo "                        <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Valider\">
                    </form>
                    </div>
                ";
        } elseif ((        // line 415
(isset($context["action_choisie"]) || array_key_exists("action_choisie", $context) ? $context["action_choisie"] : (function () { throw new Twig_Error_Runtime('Variable "action_choisie" does not exist.', 415, $this->source); })()) == "cadeau")) {
            // line 416
            echo "                    <div id=\"cadeau\">
                        <form method=\"post\" action=\"";
            // line 417
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 417, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">
                            ";
            // line 418
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["main"]) || array_key_exists("main", $context) ? $context["main"] : (function () { throw new Twig_Error_Runtime('Variable "main" does not exist.', 418, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
                // line 419
                echo "                                <input id=\"cb";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\" type=\"checkbox\" name=\"cartes_cadeau[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\"/>
                                <label style=\"display:inline-block;\" for=\"cb";
                // line 420
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\"><img style=\"width:6rem; height:10rem;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/objets/" . twig_get_attribute($this->env, $this->source, $context["carte"], "nom", array())) . ".png")), "html", null, true);
                echo "\" /></label>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 422
            echo "                            <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Valider\">
                        </form>
                    </div>
                ";
        } elseif ((        // line 425
(isset($context["action_choisie"]) || array_key_exists("action_choisie", $context) ? $context["action_choisie"] : (function () { throw new Twig_Error_Runtime('Variable "action_choisie" does not exist.', 425, $this->source); })()) == "concurrence")) {
            // line 426
            echo "                    <div id=\"concurrence\">
                        <form method=\"post\" action=\"";
            // line 427
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_partie", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partie"]) || array_key_exists("partie", $context) ? $context["partie"] : (function () { throw new Twig_Error_Runtime('Variable "partie" does not exist.', 427, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">
                            ";
            // line 428
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["main"]) || array_key_exists("main", $context) ? $context["main"] : (function () { throw new Twig_Error_Runtime('Variable "main" does not exist.', 428, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
                // line 429
                echo "                                <span style=\"display:inline-block;color:white; width: 6rem; height:10rem; background: url(";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/objets/" . twig_get_attribute($this->env, $this->source, $context["carte"], "nom", array())) . ".png")), "html", null, true);
                echo "); background-size: 6rem 10rem;\" for=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\">
                                        <p style=\"margin-top:0;\">P1 :<input id=\"";
                // line 430
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\"  class=\"max2\" type=\"checkbox\" name=\"paire1_concurrences[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\"/></p>
                                        <p style=\"margin-bottom:0;\">P2 :<input id=\"";
                // line 431
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\" class=\"max2\" type=\"checkbox\" name=\"paire2_concurrences[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", array()), "html", null, true);
                echo "\"/></p>
                                </span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 434
            echo "                            <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Valider\">
                        </form>

                    </div>
                ";
        } else {
            // line 439
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["main"]) || array_key_exists("main", $context) ? $context["main"] : (function () { throw new Twig_Error_Runtime('Variable "main" does not exist.', 439, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
                // line 440
                echo "                        <span class=\"text-white\" style=\"width:6rem; height:10rem; display:inline-block;background: url(";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/objets/" . twig_get_attribute($this->env, $this->source, $context["carte"], "nom", array())) . ".png")), "html", null, true);
                echo ");background-size: 6rem 10rem;\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 442
            echo "                ";
        }
        // line 443
        echo "            </div>

            <div class=\"col-2\" >
                ";
        // line 446
        if ((isset($context["carte_dissimulee"]) || array_key_exists("carte_dissimulee", $context) ? $context["carte_dissimulee"] : (function () { throw new Twig_Error_Runtime('Variable "carte_dissimulee" does not exist.', 446, $this->source); })())) {
            // line 447
            echo "                    <br>
                    <li>Carte secret</li>
                    <span class=\"text-white\" style=\"width:2.5rem; height:3.5rem; display:inline-block;background: url(";
            // line 449
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/objets/" . (isset($context["carte_dissimulee"]) || array_key_exists("carte_dissimulee", $context) ? $context["carte_dissimulee"] : (function () { throw new Twig_Error_Runtime('Variable "carte_dissimulee" does not exist.', 449, $this->source); })())) . ".png")), "html", null, true);
            echo ");background-size: 2.5rem 3.5rem;\"></span><br>
                ";
        }
        // line 451
        echo "
                ";
        // line 452
        if ((isset($context["cartes_disparues"]) || array_key_exists("cartes_disparues", $context) ? $context["cartes_disparues"] : (function () { throw new Twig_Error_Runtime('Variable "cartes_disparues" does not exist.', 452, $this->source); })())) {
            // line 453
            echo "                    <br>
                    <li>Cartes disparues</li>
                    ";
            // line 455
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cartes_disparues"]) || array_key_exists("cartes_disparues", $context) ? $context["cartes_disparues"] : (function () { throw new Twig_Error_Runtime('Variable "cartes_disparues" does not exist.', 455, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
                // line 456
                echo "                        <span class=\"text-white\" style=\"display: inline-block; width:2.5rem; height:3.5rem;background: url(";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/objets/" . $context["carte"]) . ".png")), "html", null, true);
                echo ");background-size: 2.5rem 3.5rem;\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            echo "                ";
        }
        // line 459
        echo "            </div>

        </div>
    </div>
</div>

   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 466
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jeu/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1127 => 466,  1111 => 459,  1108 => 458,  1099 => 456,  1095 => 455,  1091 => 453,  1089 => 452,  1086 => 451,  1081 => 449,  1077 => 447,  1075 => 446,  1070 => 443,  1067 => 442,  1058 => 440,  1053 => 439,  1046 => 434,  1035 => 431,  1029 => 430,  1022 => 429,  1018 => 428,  1014 => 427,  1011 => 426,  1009 => 425,  1004 => 422,  994 => 420,  987 => 419,  983 => 418,  979 => 417,  976 => 416,  974 => 415,  969 => 412,  959 => 410,  952 => 409,  948 => 408,  944 => 407,  941 => 406,  939 => 405,  935 => 403,  925 => 401,  918 => 400,  916 => 399,  912 => 398,  907 => 397,  905 => 396,  899 => 392,  892 => 390,  887 => 387,  881 => 385,  879 => 384,  874 => 383,  872 => 382,  865 => 379,  863 => 378,  859 => 376,  853 => 374,  851 => 373,  846 => 372,  844 => 371,  838 => 368,  835 => 367,  833 => 366,  829 => 364,  823 => 362,  821 => 361,  816 => 360,  814 => 359,  807 => 356,  805 => 355,  801 => 353,  795 => 351,  793 => 350,  788 => 349,  786 => 348,  779 => 345,  777 => 344,  774 => 343,  770 => 342,  764 => 338,  758 => 337,  752 => 335,  750 => 334,  745 => 333,  742 => 332,  738 => 331,  727 => 323,  722 => 320,  717 => 318,  712 => 316,  707 => 313,  705 => 312,  701 => 311,  696 => 309,  692 => 307,  690 => 306,  686 => 305,  681 => 303,  677 => 301,  675 => 300,  671 => 299,  666 => 297,  662 => 295,  660 => 294,  657 => 293,  645 => 288,  639 => 286,  636 => 285,  632 => 284,  628 => 283,  617 => 279,  611 => 277,  608 => 276,  604 => 275,  600 => 274,  596 => 272,  594 => 271,  591 => 270,  586 => 267,  576 => 265,  569 => 264,  565 => 263,  561 => 262,  557 => 260,  555 => 259,  550 => 256,  547 => 255,  541 => 254,  537 => 252,  535 => 251,  532 => 250,  529 => 249,  524 => 248,  521 => 247,  514 => 243,  508 => 241,  501 => 237,  496 => 236,  493 => 235,  484 => 232,  481 => 231,  479 => 230,  474 => 228,  470 => 226,  464 => 223,  459 => 222,  454 => 220,  449 => 219,  444 => 217,  439 => 216,  437 => 215,  431 => 214,  428 => 213,  426 => 212,  419 => 207,  410 => 203,  407 => 202,  398 => 200,  393 => 199,  391 => 198,  385 => 194,  379 => 192,  377 => 191,  371 => 187,  365 => 185,  363 => 184,  357 => 180,  351 => 178,  349 => 177,  343 => 173,  340 => 172,  331 => 170,  326 => 169,  324 => 168,  317 => 165,  313 => 164,  305 => 160,  296 => 159,  270 => 142,  258 => 132,  254 => 130,  252 => 129,  248 => 127,  242 => 126,  238 => 124,  235 => 123,  231 => 122,  225 => 119,  218 => 115,  209 => 109,  206 => 108,  197 => 107,  92 => 11,  88 => 10,  82 => 7,  77 => 6,  68 => 5,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block title %}Partie {{ partie.nom }} {% endblock %}

{% block stylesheets %}
    <link href=\"{{ asset('dist/css/bootstrap.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('style3.css') }}\" rel=\"stylesheet\">
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



        li{
            list-style-type: none;
        }


        input:hover{
            opacity:0.7;
        }

        input[type=\"checkbox\"][id^=\"cb\"] {
            display: none;
        }

        input[type=\"radio\"][id^=\"cb\"] {
            display: none;
        }

        label {
            border: 1px solid grey;
            padding: 2px;
            display: block;
            position: relative;
            margin: 2px;
            cursor: pointer;
        }

        label:before {
            background-color: white;
            color: white;
            content: \" \";
            display: block;
            border-radius: 50%;
            border: 1px solid goldenrod;
            position: absolute;
            top: -5px;
            left: -5px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 28px;
            transition-duration: 0.4s;
            transform: scale(0);
        }

        label:hover{
            border: 3px solid goldenrod;
            transition-duration: 0.6s;

        }

        label img {
            height: 100px;
            width: 100px;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
        }

        :checked + label {
            border-color: goldenrod;
        }

        :checked + label:before {
            content: \"✓\";
            background-image:linear-gradient(to right, #F5C751, #B4812C, #F5C751 ,#C3882C);
            transform: scale(1);
        }

        :checked + label img {
            transform: scale(0.9);
            box-shadow: 0 0 5px #333;
            opacity:0.5;
            z-index: -1;
        }
    </style>
{% endblock %}

    {% block script %}

        <script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\"></script>

                   <script>
                        setInterval(function(){

                            \$.ajax({
                                url: '{{ path('get_infos', {'id': partie.id }) }}',
                                method : \"POST\",
                                success: function(data) {

                                    var id = '{{ app.user.id }}';

                                    if(data == id){
                                        {% for action in action_dispo %}
                                            {% if action.dispo == 0 and choix_paire == 0 and choix_cadeau ==0 %}
                                            window.location.reload();
                                            {% endif %}
                                        {% endfor %}
                                        console.log(data,id)
                                    }else{
                                        {% if message_fin != 0 and message_fin == \"Aucun vainqueur\" %}
                                        window.location.reload();
                                        {% endif %}
                                        console.log(data,id);
                                    }

                                }
                            })
                        },5000);

                        setInterval(
                            function(){
                                \$.ajax({
                                    url: '{{ path('get_vainqueur', {'id': partie.id }) }}',
                                    method : \"POST\",
                                    success: function(data) {
                                        if(data == true){
                                            window.location.reload();
                                            console.log(data)
                                        }else{
                                            console.log(data);
                                        }

                                    }
                                })
                            }
                            ,5000);
                    </script>
    {% endblock %}

   {% block content %}
<div id=\"fond_jeu\" style=\"background: url({{ asset('img/marbre_vecto.png')}});\">
    <div class=\"social\">
        <div class=\"row\">
            <div id=\"objectifs\" class=\"col\">
                    {% for carte in objectifs %}
                            <span style=\"width:7rem; height:10rem; display:inline-block;background: url({{ asset('img/gods/' ~ carte.nom ~ '.png')}});background-size: 7rem 10rem;\">
                                <div style=\"height:1rem; line-height:1rem;\" class=\"row\">
                                    <div class=\"col-12\">
                                        {% if carte.ja != 0 %}
                                            {% for i in 1..carte.ja %}
                                                <span style=\"background: -webkit-gradient(linear, left top, left bottom, from(#F5C751), to(#B4812C));\" class=\"badge badge-info\">{{ carte.valeur }}</span>
                                            {% endfor %}
                                        {% endif %}
                                    </div>
                                </div>
                                <div style=\"height:2rem;line-height:3rem;\" class=\"row\">
                                    <div class=\"col-12\">
                                        {% if carte.jeton == 'ja' %}
                                            <img style=\"width:2rem;\" src=\"{{ asset('img/pion.png') }}\">
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"row\" style=\"height:3rem;line-height:3rem;\">
                                    <div class=\"col-12\">
                                         {% if carte.jeton == 'autre' %}
                                             <img style=\"width:2rem;\" src=\"{{ asset('img/pion.png') }}\">
                                         {% endif %}
                                    </div>
                                </div>
                                <div class=\"row\" style=\"height:2rem;line-height:-2rem;\">
                                    <div class=\"col-12\">
                                        {% if carte.jeton == 'j'%}
                                            <img style=\"width:2rem;\" src=\"{{ asset('img/pion.png') }}\">
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"row\" style=\"height:1rem;\">
                                    <div class=\"col-12\">
                                         {% if carte.j != 0 %}
                                             {% for i in 1..carte.j %}
                                                 <span style=\"background: -webkit-gradient(linear, left top, left bottom, from(#F5C751), to(#B4812C));\" class=\"badge badge-success\">{{ carte.valeur }}</span>
                                             {% endfor %}
                                         {% endif %}
                                    </div>
                                </div>
                            </span>
                    {% endfor %}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-3\" id=\"infos_partie\">
            {% if j1.username is defined %}
                <ul class=\"promo\" style=\"margin-left:5%;padding:0;margin-top:8.5%;line-height:130%;\">
                    <li>Partie n°{{ partie.id }} : {{ partie.nom }}</li>
                        {% if j1.username == app.user.username %}
                                <li>Contre j2 :  {{ j2.username }}</li>
                                <li>Vous êtes j1 {{ j1.username }}</li>
                            {% else %}
                                <li>Votre adversaire : {{ j1.username }} - j1</li>
                                <li>Vous : {{ j2.username }} - j2</li>
                        {% endif %}
                    <li>Tour : <span id=\"tour\">{{ partie.tour }}</span></li>
                    <li>Manche : {{ partie.manche }}</li>
                </ul>
            {% endif %}
            </div>

            <div id=\"texteaction\" class=\"col-6\" style=\"background:url({{ asset('img/marbre3.png')}})\">

                {% if message_fin != null %}
                    {% if score !=\"\" or score is defined %}
                        <span>Score J1 = {{ score.j1 }} contre </span><span> Score J2 = {{ score.j2 }}</span>
                        <br>
                    {% endif %}
                    {% if message_fin == 'Aucun vainqueur' %}
                        <li>{{ message_fin }}</li>
                        <form method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                            <input type=\"submit\" value=\"Passer à la manche suivante\" name=\"manche_suivante\" class=\"btn btn-primary\">
                        </form>
                    {% else %}
                        <h4>{{ message_fin }}</h4>
                        <br>
                        <form method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                            <input type=\"submit\" value=\"Retour à votre profil\" name=\"valid_fin\" class=\"btn btn-primary\">
                        </form>
                    {% endif %}
                    {% else %}
                        {% for action in action_dispo %}
                            {% if action.nom == \"dissimulation\" and action.dispo==1 %}
                                <li>A vous de jouer</li>
                            {% elseif action.nom == \"dissimulation\" and action.dispo==0 %}
                                <li>Vous n'avez pas la main, patientez le tour de votre adversaire ...</li>
                            {% endif %}
                        {% endfor %}
                {% endif %}



                {% if choix_cadeau != 0 %}
                    <h1>Cadeau</h1>
                <li>Choississez une carte de votre adversaire à placer sur votre plateau</li>
                <form method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                    {% for choix in choix_cadeau %}
                        <input type=\"radio\" id=\"cb{{ choix.id }}\" value=\"{{ choix.id }}\" name=\"carte_cadeau_choisie\">
                        <label style=\"display:inline-block;\" for=\"cb{{ choix.id }}\"><img style=\"width:6rem; height:10rem;\" src=\"{{ asset('img/objets/' ~ choix.nom ~ '.png')}}\" /></label>
                    {% endfor %}
                    <br><input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Valider action\">
                </form>
                {% endif %}

                {% if choix_paire != 0 %}
                    <h1>Concurrence</h1>
                    <li>Choississez une paire l'autre sera attribuée à votre adversaire</li>
                    <form style=\"display:inline-block;\" method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                        {% for choix in choix_paire %}
                            {% if choix.paire == 1 %}
                                <span class=\"text-white\" style=\"width:6rem; height:10rem; display:inline-block;background: url({{ asset('img/objets/' ~ choix.nom ~ '.png')}});background-size: 6rem 10rem;\"></span>
                            {% endif %}
                        {% endfor %}<br>
                        <input type=\"hidden\" value=\"p1\" name=\"choix_paire\">
                        <input type=\"submit\" value=\"Paire1\" class=\"btn btn-sm btn-primary\">
                    </form>
                    <form method=\"post\" style=\"display:inline-block;\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                        {% for choix in choix_paire %}
                            {% if choix.paire == 2 %}
                                <span class=\"text-white\" style=\"width:6rem; height:10rem; display:inline-block;background: url({{ asset('img/objets/' ~ choix.nom ~ '.png')}});background-size: 6rem 10rem;\"></span>
                            {% endif %}
                        {% endfor %}<br>
                        <input type=\"hidden\" value=\"p2\" name=\"choix_paire\">
                        <input type=\"submit\" value=\"Paire 2\" class=\"btn btn-sm btn-primary\">
                    </form>
                {% endif %}

                {% if action_choisie == 'dissimulation' %}
                    <h3 style=\"font-family: 'CAESAR'\"><strong>SECRET</strong> : Choissisez <strong>1</strong> carte</h3>
                    <li id=\"informations\">Elle sera dissimulée et vous sera attribuée en fin de manche</li>
                    <img style=\"width:2rem;border-radius:10%;\" src=\"{{ asset('img/action/dissimulation.png')}}\">
                    <br>
                    <a href=\"{{ path('afficher_partie', {'id': partie.id }) }}\">Retour</a>
                {% elseif action_choisie == 'disparition' %}
                    <h3 style=\"font-family: 'CAESAR'\"><strong>DISPARITION</strong> : Choissisez <strong>2</strong> cartes</h3>
                    <li>Elles seront écartées cette manche</li>
                    <img style=\"width:2rem;border-radius:10%;\" src=\"{{ asset('img/action/disparition.png')}}\">
                    <br>
                    <a href=\"{{ path('afficher_partie', {'id': partie.id }) }}\">Retour</a>
                {% elseif action_choisie == 'cadeau' %}
                    <h3 style=\"font-family: 'CAESAR'\"><strong>CADEAU</strong> : Choissisez <strong>3</strong> cartes</h3>
                    <li>L'adversaire choisira une des cartes, les autres vous seront attribuées</li>
                    <img style=\"width:2rem;border-radius:10%;\" src=\"{{ asset('img/action/cadeau.png')}}\">
                    <br>
                    <a href=\"{{ path('afficher_partie', {'id': partie.id }) }}\">Retour</a>
                {% elseif action_choisie == 'concurrence' %}
                    <h3 style=\"font-family: 'CAESAR'\"><strong>CONCURRENCE</strong> : Choissisez <strong>2 paires</strong> de cartes</h3>
                    <li>L'adversaire choisit une paire qui lui sera attribuée, l'autre vous sera attribuée</li>
                    <li>Séléctionnez bien <strong>4</strong> cartes différentes, 2 pour P1 et 2 pour P2</li>
                    <img style=\"width:2rem;border-radius:10%;\" src=\"{{ asset('img/action/concurrence.png')}}\">
                    <br>
                    <a href=\"{{ path('afficher_partie', {'id': partie.id }) }}\">Retour</a>
                {% endif %}
            </div>

            <div class=\"col-3\" id=\"pioche\">
                <div style=\"width:7rem; height:10rem; display:inline-block;text-align:center;background: url({{ asset('img/carte_verso.png')}});background-size: 7rem 10rem;border-radius:5px;\">
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-2\" id=\"actions_dispos\">
                    <li>Actions adverses</li>
                    {% for action in action_dispo_adverse %}
                        {% if action.etat ==1 %}
                            <img style=\"margin:0;opacity:0.2;width:2rem;\" src=\"{{ asset('img/action/' ~ action.nom ~ '.png')}}\">
                        {% elseif action.etat ==0 %}
                            <img style=\"margin:0;width:2rem;\" src=\"{{ asset('img/action/' ~ action.nom ~ '.png')}}\">
                        {% endif %}
                    {% endfor %}

                <hr style=\"margin-top:1rem; margin-bottom:1rem;margin-left:25%;\">

                <li>Vos actions</li>
                    {% for action in action_dispo %}

                        {% if action.nom == 'dissimulation' %}
                                <form style=\"display:inline-block;\" method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                                    <div class=\"form-group\">
                                        <input type=\"hidden\" value=\"dissimulation\" name=\"action\">
                                        {% if action.dispo == 0 or action.etat == 1 or choix_paire != 0 or choix_cadeau !=0 %}
                                            <input style=\"opacity:0.2;width:4rem;\" src={{ asset('img/action/' ~ action.nom ~ '.png')}} type=image align=\"middle\" disabled >
                                        {% elseif action.dispo == 1  %}
                                            <input id=\"btn-action\" style=\"width:4rem;\" src={{ asset('img/action/' ~ action.nom ~ '.png')}} type=image align=\"middle\" >
                                        {% endif %}
                                    </div>
                                </form>
                        {% elseif action.nom == 'disparition' %}
                                <form style=\"display:inline-block;\" method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                                    <div class=\"form-group\">
                                        <input type=\"hidden\" value=\"disparition\" name=\"action\">
                                        {% if action.dispo == 0 or action.etat == 1 or choix_paire != 0 or choix_cadeau !=0 %}
                                            <input style=\"opacity:0.2;width:4rem;\" src={{ asset('img/action/' ~ action.nom ~ '.png')}} type=image align=\"middle\" disabled >
                                        {% elseif action.dispo == 1 %}
                                            <input id=\"btn-action\" style=\"width:4rem;\" src={{ asset('img/action/' ~ action.nom ~ '.png')}} type=image align=\"middle\" >
                                        {% endif %}
                                    </div>
                                </form>
                        {% elseif action.nom == 'cadeau' %}
                            <br>
                            <form style=\"display:inline-block;\" method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"cadeau\" name=\"action\">
                                    {% if action.dispo == 0 or action.etat == 1 or choix_paire != 0 or choix_cadeau !=0 %}
                                        <input style=\"opacity:0.2;width:4rem;\" src={{ asset('img/action/' ~ action.nom ~ '.png')}} type=image align=\"middle\" disabled >
                                    {% elseif action.dispo == 1 %}
                                        <input style=\"width:4rem;\" id=\"btn-action\" src={{ asset('img/action/' ~ action.nom ~ '.png')}} type=image align=\"middle\" >
                                    {% endif %}
                                </div>
                            </form>
                        {% elseif action.nom == 'concurrence' %}
                                <form style=\"display:inline-block;\" method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                                    <div class=\"form-group\">
                                        <input type=\"hidden\" value=\"concurrence\" name=\"action\">
                                        {% if action.dispo == 0 or action.etat == 1 or choix_paire != 0 or choix_cadeau !=0 %}
                                            <input style=\"opacity:0.2;width:4rem;\" src={{ asset('img/action/' ~ action.nom ~ '.png')}} type=image align=\"middle\" disabled >
                                        {% elseif action.dispo == 1 %}
                                            <input style=\"width:4rem;\" id=\"btn-action\" src={{ asset('img/action/' ~ action.nom ~ '.png')}} type=image align=\"middle\" >
                                        {% endif %}
                                    </div>
                                </form>
                        {% endif %}

                    {% endfor %}

            </div>
            <div id=\"main\" class=\"col-8\" style=\"text-align:center;\">

                {% if action_choisie=='dissimulation' %}
                    <form method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                        {% for carte in main %}
                            {# {{ carte.nom }} #}
                            <input type=\"radio\" id=\"cb{{ carte.id }}\" value=\"{{ carte.id }}\" name=\"carte_dissimulee_selectionnee\">
                            <label style=\"display:inline-block;\" for=\"cb{{ carte.id }}\"><img style=\"width:6rem; height:9.5rem;\" src=\"{{ asset('img/objets/' ~ carte.nom ~ '.png')}}\" /></label>
                        {% endfor %}
                        <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Valider\">
                    </form>
                {% elseif action_choisie=='disparition' %}
                    <div id=\"disparition\">
                    <form method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                        {% for carte in main %}
                                <input type=\"checkbox\" id=\"cb{{ carte.id }}\" name=\"cartes_disparues[]\" value=\"{{ carte.id }}\" />
                                <label style=\"display:inline-block;\" for=\"cb{{ carte.id }}\"><img style=\"width:6rem; height:10rem;\" src=\"{{ asset('img/objets/' ~ carte.nom ~ '.png')}}\" /></label>
                        {% endfor %}
                        <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Valider\">
                    </form>
                    </div>
                {% elseif action_choisie=='cadeau' %}
                    <div id=\"cadeau\">
                        <form method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                            {% for carte in main %}
                                <input id=\"cb{{ carte.id }}\" type=\"checkbox\" name=\"cartes_cadeau[]\" value=\"{{ carte.id }}\"/>
                                <label style=\"display:inline-block;\" for=\"cb{{ carte.id }}\"><img style=\"width:6rem; height:10rem;\" src=\"{{ asset('img/objets/' ~ carte.nom ~ '.png')}}\" /></label>
                            {% endfor %}
                            <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Valider\">
                        </form>
                    </div>
                {% elseif action_choisie=='concurrence' %}
                    <div id=\"concurrence\">
                        <form method=\"post\" action=\"{{ path('afficher_partie', {'id': partie.id }) }}\">
                            {% for carte in main %}
                                <span style=\"display:inline-block;color:white; width: 6rem; height:10rem; background: url({{ asset('img/objets/' ~ carte.nom ~ '.png')}}); background-size: 6rem 10rem;\" for=\"{{ carte.id }}\">
                                        <p style=\"margin-top:0;\">P1 :<input id=\"{{ carte.id }}\"  class=\"max2\" type=\"checkbox\" name=\"paire1_concurrences[]\" value=\"{{ carte.id }}\"/></p>
                                        <p style=\"margin-bottom:0;\">P2 :<input id=\"{{ carte.id }}\" class=\"max2\" type=\"checkbox\" name=\"paire2_concurrences[]\" value=\"{{ carte.id }}\"/></p>
                                </span>
                            {% endfor %}
                            <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Valider\">
                        </form>

                    </div>
                {% else %}
                    {% for carte in main %}
                        <span class=\"text-white\" style=\"width:6rem; height:10rem; display:inline-block;background: url({{ asset('img/objets/' ~ carte.nom ~ '.png')}});background-size: 6rem 10rem;\"></span>
                    {% endfor %}
                {% endif %}
            </div>

            <div class=\"col-2\" >
                {% if carte_dissimulee %}
                    <br>
                    <li>Carte secret</li>
                    <span class=\"text-white\" style=\"width:2.5rem; height:3.5rem; display:inline-block;background: url({{ asset('img/objets/' ~ carte_dissimulee ~ '.png')}});background-size: 2.5rem 3.5rem;\"></span><br>
                {% endif %}

                {% if cartes_disparues %}
                    <br>
                    <li>Cartes disparues</li>
                    {% for carte in cartes_disparues %}
                        <span class=\"text-white\" style=\"display: inline-block; width:2.5rem; height:3.5rem;background: url({{ asset('img/objets/' ~ carte ~ '.png')}});background-size: 2.5rem 3.5rem;\"></span>
                    {% endfor %}
                {% endif %}
            </div>

        </div>
    </div>
</div>

   {% endblock %}
{% block footer %}
{% endblock %}", "jeu/afficher.html.twig", "C:\\wamp64\\www\\www\\jeu\\templates\\jeu\\afficher.html.twig");
    }
}
