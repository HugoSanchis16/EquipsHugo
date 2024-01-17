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
class __TwigTemplate_1ec61a52c847095cfef431f9ad115586 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ca\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/img/apoyar.png"), "html", null, true);
        echo "\" />

  <!-- Google Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
  <!-- =======================================================
  * Template Name: Impact
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <header id=\"header\" class=\"header d-flex align-items-center\">

    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">
      <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inici");
        echo "\" class=\"logo d-flex align-items-center\">
        <!-- Descomenta la línea siguiente si también deseas usar un logo de imagen -->
        <!-- <img src=";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/img/logo.png"), "html", null, true);
        echo "\"alt=\"\"> -->
        <h1>Impact<span>.</span></h1>
      </a>
      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inici");
        echo "\">Inici</a></li>
          <li><a href=\"#about\">Sobre nosaltres</a></li>
          <li><a href=\"#services\">Serveis</a></li>
          <li><a href=\"#portfolio\">Portafoli</a></li>
          <li><a href=\"#team\">Equip</a></li>
          <li><a href=\"blog.html\">Blog</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Desplegable</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
            <ul>
              <li><a href=\"#\">Desplegable 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Desplegable profund</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
                <ul>
                  <li><a href=\"#\">Desplegable profund 1</a></li>
                  <li><a href=\"#\">Desplegable profund 2</a></li>
                  <li><a href=\"#\">Desplegable profund 3</a></li>
                  <li><a href=\"#\">Desplegable profund 4</a></li>
                  <li><a href=\"#\">Desplegable profund 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Desplegable 2</a></li>
              <li><a href=\"#\">Desplegable 3</a></li>
              <li><a href=\"#\">Desplegable 4</a></li>
            </ul>
          </li>
          <li><a href=\"#contact\">Contacte</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
      <i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>

    </div>
  </header>
  ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 98
        $this->displayBlock('footer', $context, $blocks);
        // line 105
        echo "
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Impact Plantilla Bootstrap - Index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/css/estilsEquip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Impact/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

      <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 99
        echo "  <footer id=\"footer\">
    <div class=\"container\">
      <p>Projecte Symfony 2n DAW</p>
    </div>
  </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  313 => 99,  303 => 98,  291 => 95,  286 => 93,  282 => 92,  278 => 91,  274 => 90,  270 => 89,  266 => 88,  261 => 87,  251 => 86,  241 => 97,  238 => 86,  228 => 85,  214 => 28,  210 => 27,  206 => 26,  202 => 25,  198 => 24,  194 => 23,  189 => 22,  179 => 21,  160 => 8,  146 => 105,  144 => 98,  142 => 85,  107 => 53,  99 => 48,  94 => 46,  78 => 32,  76 => 21,  65 => 13,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ca\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>{% block title %}Impact Plantilla Bootstrap - Index{% endblock %}</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('Impact/assets/img/apoyar.png') }}\" />

  <!-- Google Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  {% block stylesheets %}
  <link href=\"{{ asset('Impact/assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('Impact/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('Impact/assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('Impact/assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('Impact/assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('Impact/assets/css/main.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('Impact/assets/css/estilsEquip.css') }}\" rel=\"stylesheet\">


  {% endblock %}

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <header id=\"header\" class=\"header d-flex align-items-center\">

    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">
      <a href=\"{{ path('inici') }}\" class=\"logo d-flex align-items-center\">
        <!-- Descomenta la línea siguiente si también deseas usar un logo de imagen -->
        <!-- <img src={{ asset('Impact/assets/img/logo.png') }}\"alt=\"\"> -->
        <h1>Impact<span>.</span></h1>
      </a>
      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a href=\"{{ path('inici') }}\">Inici</a></li>
          <li><a href=\"#about\">Sobre nosaltres</a></li>
          <li><a href=\"#services\">Serveis</a></li>
          <li><a href=\"#portfolio\">Portafoli</a></li>
          <li><a href=\"#team\">Equip</a></li>
          <li><a href=\"blog.html\">Blog</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Desplegable</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
            <ul>
              <li><a href=\"#\">Desplegable 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Desplegable profund</span> <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>
                <ul>
                  <li><a href=\"#\">Desplegable profund 1</a></li>
                  <li><a href=\"#\">Desplegable profund 2</a></li>
                  <li><a href=\"#\">Desplegable profund 3</a></li>
                  <li><a href=\"#\">Desplegable profund 4</a></li>
                  <li><a href=\"#\">Desplegable profund 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Desplegable 2</a></li>
              <li><a href=\"#\">Desplegable 3</a></li>
              <li><a href=\"#\">Desplegable 4</a></li>
            </ul>
          </li>
          <li><a href=\"#contact\">Contacte</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
      <i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>

    </div>
  </header>
  {% block body %}
    {% block javascripts %}
      <script src=\"{{ asset('Impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
      <script src=\"{{ asset('Impact/assets/vendor/aos/aos.js') }}\"></script>
      <script src=\"{{ asset('Impact/assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
      <script src=\"{{asset('Impact/assets/vendor/purecounter/purecounter_vanilla.js')}}\"></script>
      <script src=\"{{asset('Impact/assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>
      <script src=\"{{asset('Impact/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
      <script src=\"{{asset('Impact/assets/vendor/php-email-form/validate.js')}}\"></script>

      <script src=\"{{asset('js/main.js')}}\"></script>
    {% endblock %}
  {% endblock %}
{% block footer %}
  <footer id=\"footer\">
    <div class=\"container\">
      <p>Projecte Symfony 2n DAW</p>
    </div>
  </footer>
{% endblock %}

</body>

</html>
", "base.html.twig", "/var/www/html/symfony/equipsHugo/templates/base.html.twig");
    }
}
