<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_a44191cf7cd814704d6c896cefef98ab7b6fbfae8649ff643ba4a89aaf511d60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>ITtools | ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
</head>
<body>
<header>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\"><img class=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"></a>
    <nav class=\"topnav\">
        <a class=\"active left\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\"><i class=\"fa fa-home\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("symfony.home"), "html", null, true);
        echo "</a>

        ";
        // line 15
        $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "locale", [], "any", false, false, false, 15);
        // line 16
        echo "        ";
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", [0 => "_route"], "method", false, false, false, 16);
        // line 17
        echo "
        ";
        // line 18
        if (0 !== twig_compare((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 18, $this->source); })()), "en")) {
            // line 19
            echo "            <a class=\"right\" style=\"background-color: gray \" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("localeSwitcher", ["route" => (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), "locale" => "en"]), "html", null, true);
            echo "\">EN</a>
        ";
        } else {
            // line 21
            echo "            <a class=\"right\" style=\"background-color: gray \" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("localeSwitcher", ["route" => (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 21, $this->source); })()), "locale" => "fr"]), "html", null, true);
            echo "\">FR</a>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            echo "            <a class=\"right\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logout"), "html", null, true);
            echo "</a>
            <div class=\"daddy right\">
                <a class=\"daddyBtn\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "firstname", [], "any", false, false, false, 27), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo " <i class=\"fa fa-caret-down\"></i></a>
                <div class=\"child\">
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.account"), "html", null, true);
            echo "</a>
                </div>
            </div>
        ";
        } else {
            // line 33
            echo "            <a class=\"active right\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.login"), "html", null, true);
            echo "</a>
            <a class=\"right\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.signup"), "html", null, true);
            echo "</a>
        ";
        }
        // line 36
        echo "    </nav>
</header>
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            echo "    <script type=\"text/javascript\">
        alert('";
            // line 40
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "')
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "
<footer>
    <h3>&copy; CopyRight 2019-";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "<h3>
            <h3>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("symfony.joinus"), "html", null, true);
        echo ":
                <i class=\"fa fa-facebook-square\"></i>
                <i class=\"fa fa-skype\"></i>
                <i class=\"fa fa-twitter\"></i>
                <i class=\"fa fa-instagram\"></i>
            </h3>

</footer>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  214 => 43,  196 => 5,  174 => 47,  170 => 46,  166 => 44,  164 => 43,  155 => 40,  152 => 39,  148 => 38,  144 => 36,  137 => 34,  130 => 33,  121 => 29,  112 => 27,  104 => 25,  102 => 24,  99 => 23,  93 => 21,  87 => 19,  85 => 18,  82 => 17,  79 => 16,  77 => 15,  70 => 13,  63 => 11,  55 => 6,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>ITtools | {% block title %}{% endblock %}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
</head>
<body>
<header>
    <a href=\"{{ path('default') }}\"><img class=\"logo\" src=\"{{ asset('images/logo.png') }}\"></a>
    <nav class=\"topnav\">
        <a class=\"active left\" href=\"{{ path('default') }}\"><i class=\"fa fa-home\"></i> {{ 'symfony.home'|trans }}</a>

        {% set locale = app.request.locale %}
        {% set route = app.request.attributes.get('_route') %}

        {% if locale != 'en' %}
            <a class=\"right\" style=\"background-color: gray \" href=\"{{ path('localeSwitcher', {'route': route, 'locale': 'en'}) }}\">EN</a>
        {% else %}
            <a class=\"right\" style=\"background-color: gray \" href=\"{{ path('localeSwitcher', {'route': route, 'locale': 'fr'}) }}\">FR</a>
        {% endif %}

        {% if app.user  %}
            <a class=\"right\" href=\"{{ path('app_logout') }}\">{{ 'user.logout'|trans }}</a>
            <div class=\"daddy right\">
                <a class=\"daddyBtn\" href=\"{{ path('app_profile', {'id': app.user.id}) }}\">{{ app.user.firstname }} {{ app.user.name }} <i class=\"fa fa-caret-down\"></i></a>
                <div class=\"child\">
                    <a href=\"{{ path('app_profile', {'id': app.user.id}) }}\">{{ 'user.account'|trans }}</a>
                </div>
            </div>
        {% else %}
            <a class=\"active right\" href=\"{{ path('app_login') }}\">{{ 'user.login'|trans }}</a>
            <a class=\"right\" href=\"{{ path('app_register') }}\">{{ 'user.signup'|trans }}</a>
        {% endif %}
    </nav>
</header>
{% for message in app.flashes('notice') %}
    <script type=\"text/javascript\">
        alert('{{ message }}')
    </script>
{% endfor %}
{% block body %}{% endblock %}

<footer>
    <h3>&copy; CopyRight 2019-{{ \"now\"|date('Y') }}<h3>
            <h3>{{ 'symfony.joinus'|trans }}:
                <i class=\"fa fa-facebook-square\"></i>
                <i class=\"fa fa-skype\"></i>
                <i class=\"fa fa-twitter\"></i>
                <i class=\"fa fa-instagram\"></i>
            </h3>

</footer>

</body>
</html>
", "base.html.twig", "/mnt/d/GoogleDrive-ble01/Licence-info-univ-lr/S4-2019-2020/Framework/Project/ITtools/templates/base.html.twig");
    }
}
