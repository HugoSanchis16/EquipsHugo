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

/* dades_equip.html.twig */
class __TwigTemplate_6f627f23a0f5a208cf9e1d95ee90ffe8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dades_equip.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dades_equip.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dades_equip.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Datos de equipo ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/css/estilsEquip.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <h1 id=\"titolEquip\">Equipo ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equip"]) || array_key_exists("equip", $context) ? $context["equip"] : (function () { throw new RuntimeError('Variable "equip" does not exist.', 12, $this->source); })()), "codi", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>

    <p class=\"paragrafEquip\">Proyecto 2n DAW<br><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("Impact/assets/img/" . twig_get_attribute($this->env, $this->source, (isset($context["equip"]) || array_key_exists("equip", $context) ? $context["equip"] : (function () { throw new RuntimeError('Variable "equip" does not exist.', 14, $this->source); })()), "codi", [], "any", false, false, false, 14)) . ".png")), "html", null, true);
        echo "\" alt=\"Imagen del Equipo\" class=\"imatgeEquip\" style=\"width:250px; height:250px;\"></p>

    <div class=\"paragrafEquip\">
        <div class=\"line\"><span class=\"bold\"> Codi: </span> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equip"]) || array_key_exists("equip", $context) ? $context["equip"] : (function () { throw new RuntimeError('Variable "equip" does not exist.', 17, $this->source); })()), "codi", [], "any", false, false, false, 17), "html", null, true);
        echo " </div>
        <div class=\"line\"><span class=\"bold\"> Nombre: </span> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equip"]) || array_key_exists("equip", $context) ? $context["equip"] : (function () { throw new RuntimeError('Variable "equip" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo " </div>
        <div class=\"line\"><span class=\"bold\"> Ciclo: </span> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equip"]) || array_key_exists("equip", $context) ? $context["equip"] : (function () { throw new RuntimeError('Variable "equip" does not exist.', 19, $this->source); })()), "cicle", [], "any", false, false, false, 19), "html", null, true);
        echo " </div>
        <div class=\"line\"><span class=\"bold\"> Curs: </span> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equip"]) || array_key_exists("equip", $context) ? $context["equip"] : (function () { throw new RuntimeError('Variable "equip" does not exist.', 20, $this->source); })()), "curs", [], "any", false, false, false, 20), "html", null, true);
        echo " </div>
        <div class=\"line\"><span class=\"bold\"> Miembros: </span> ";
        // line 21
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["equip"]) || array_key_exists("equip", $context) ? $context["equip"] : (function () { throw new RuntimeError('Variable "equip" does not exist.', 21, $this->source); })()), "membres", [], "any", false, false, false, 21), ", "), "html", null, true);
        echo " </div>
    </div>

    <div class=\"paragrafEquip\">
        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inici");
        echo "\">
    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/img/home-page.png"), "html", null, true);
        echo "\" alt=\"Home\" style=\"width=50px; height=50px; border-radius:5px;\"></a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dades_equip.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  155 => 26,  151 => 25,  144 => 21,  140 => 20,  136 => 19,  132 => 18,  128 => 17,  122 => 14,  116 => 12,  106 => 11,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Datos de equipo {% endblock %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('Impact/assets/css/estilsEquip.css') }}\">
{% endblock %}


{% block body %}
    <h1 id=\"titolEquip\">Equipo {{ equip.codi }}</h1>

    <p class=\"paragrafEquip\">Proyecto 2n DAW<br><img src=\"{{ asset('Impact/assets/img/' ~ equip.codi ~ '.png') }}\" alt=\"Imagen del Equipo\" class=\"imatgeEquip\" style=\"width:250px; height:250px;\"></p>

    <div class=\"paragrafEquip\">
        <div class=\"line\"><span class=\"bold\"> Codi: </span> {{ equip.codi }} </div>
        <div class=\"line\"><span class=\"bold\"> Nombre: </span> {{ equip.nom }} </div>
        <div class=\"line\"><span class=\"bold\"> Ciclo: </span> {{ equip.cicle }} </div>
        <div class=\"line\"><span class=\"bold\"> Curs: </span> {{ equip.curs }} </div>
        <div class=\"line\"><span class=\"bold\"> Miembros: </span> {{ equip.membres | join(', ') }} </div>
    </div>

    <div class=\"paragrafEquip\">
        <a href=\"{{ path('inici') }}\">
    <img src=\"{{ asset('Impact/assets/img/home-page.png') }}\" alt=\"Home\" style=\"width=50px; height=50px; border-radius:5px;\"></a>
    </div>
{% endblock %}
", "dades_equip.html.twig", "/var/www/html/symfony/equipsHugo/templates/dades_equip.html.twig");
    }
}
