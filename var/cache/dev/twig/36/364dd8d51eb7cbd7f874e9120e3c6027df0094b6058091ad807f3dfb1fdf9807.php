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

/* auto/single.html.twig */
class __TwigTemplate_9a4d043011f05fb8e6744e67462b7b699490bcaa6b89b84ed932aa2f4db85b42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auto/single.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auto/single.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auto/single.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auto"]) || array_key_exists("auto", $context) ? $context["auto"] : (function () { throw new RuntimeError('Variable "auto" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"heads-1\">
            <form method=\"LINK\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auto"]) || array_key_exists("auto", $context) ? $context["auto"] : (function () { throw new RuntimeError('Variable "auto" does not exist.', 8, $this->source); })()), "site", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
                <input class=\"head-a\" type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auto"]) || array_key_exists("auto", $context) ? $context["auto"] : (function () { throw new RuntimeError('Variable "auto" does not exist.', 9, $this->source); })()), "site", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
            </form>
        </div>
        <div class=\"heads-2\">
            <form method=\"LINK\" action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auto");
        echo "\">
                <input class=\"head-b\" type=\"submit\" value=\"Назад\">
            </form>
        </div>

        <div class=\"card-body\">
            <div class=\"ha\">
                <h2>Информация о ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auto"]) || array_key_exists("auto", $context) ? $context["auto"] : (function () { throw new RuntimeError('Variable "auto" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</h2>
            </div>
            <div class = \"bl-ob\">
                <img class=\"photo\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->source, (isset($context["auto"]) || array_key_exists("auto", $context) ? $context["auto"] : (function () { throw new RuntimeError('Variable "auto" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23))), "html", null, true);
        echo "\">
                <div>
                    <form method=\"LINK\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_auto", ["auto" => twig_get_attribute($this->env, $this->source, (isset($context["auto"]) || array_key_exists("auto", $context) ? $context["auto"] : (function () { throw new RuntimeError('Variable "auto" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">
                        <input class=\"but-red\" type=\"submit\" value=\"Изменить\">
                    </form>
                </div>
                <div>
                    <form method=\"LINK\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auto_delete", ["auto" => twig_get_attribute($this->env, $this->source, (isset($context["auto"]) || array_key_exists("auto", $context) ? $context["auto"] : (function () { throw new RuntimeError('Variable "auto" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\">
                        <input class=\"but-red\" type=\"submit\" value=\"Удалить\">
                    </form>
                </div>
            </div>
            <div class=\"bl-ob\">
                <div class=\"price\">
                    ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auto"]) || array_key_exists("auto", $context) ? $context["auto"] : (function () { throw new RuntimeError('Variable "auto" does not exist.', 37, $this->source); })()), "price", [], "any", false, false, false, 37), "html", null, true);
        echo " р.
                </div>
                <div class=\"inf\">
                    <div class=\"name\">Описание:</div>
                    ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auto"]) || array_key_exists("auto", $context) ? $context["auto"] : (function () { throw new RuntimeError('Variable "auto" does not exist.', 41, $this->source); })()), "info", [], "any", false, false, false, 41), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "auto/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  142 => 37,  132 => 30,  124 => 25,  119 => 23,  113 => 20,  103 => 13,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ auto.name }}{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"heads-1\">
            <form method=\"LINK\" action=\"{{ auto.site }}\">
                <input class=\"head-a\" type=\"submit\" value=\"{{ auto.site }}\">
            </form>
        </div>
        <div class=\"heads-2\">
            <form method=\"LINK\" action=\"{{ path('auto') }}\">
                <input class=\"head-b\" type=\"submit\" value=\"Назад\">
            </form>
        </div>

        <div class=\"card-body\">
            <div class=\"ha\">
                <h2>Информация о {{ auto.name }}</h2>
            </div>
            <div class = \"bl-ob\">
                <img class=\"photo\" src=\"{{ asset('uploads/image/' ~ auto.image) }}\">
                <div>
                    <form method=\"LINK\" action=\"{{ path('update_auto', {'auto': auto.id }) }}\">
                        <input class=\"but-red\" type=\"submit\" value=\"Изменить\">
                    </form>
                </div>
                <div>
                    <form method=\"LINK\" action=\"{{ path('auto_delete', {'auto': auto.id }) }}\">
                        <input class=\"but-red\" type=\"submit\" value=\"Удалить\">
                    </form>
                </div>
            </div>
            <div class=\"bl-ob\">
                <div class=\"price\">
                    {{ auto.price }} р.
                </div>
                <div class=\"inf\">
                    <div class=\"name\">Описание:</div>
                    {{ auto.info }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "auto/single.html.twig", "/Users/edward/Desktop/Symfony_project/auto-shop/templates/auto/single.html.twig");
    }
}
