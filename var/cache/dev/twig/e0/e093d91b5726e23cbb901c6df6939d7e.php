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

/* basefront.html.twig */
class __TwigTemplate_d0d2d5235d7e11e49c413eda25d6b987 extends Template
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
            'css' => [$this, 'block_css'],
            'topheader' => [$this, 'block_topheader'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

\t\t<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 30
        echo "    </head>
\t<body>
\t\t<!-- HEADER -->
\t\t<header>
\t\t";
        // line 34
        $this->displayBlock('topheader', $context, $blocks);
        // line 49
        echo "\t\t\t<!-- /TOP HEADER -->

\t\t\t<!-- MAIN HEADER -->
          
\t\t\t<div id=\"header\">
\t\t\t\t<!-- container -->
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- LOGO -->
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"header-logo\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/LOGO.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /LOGO -->

\t\t\t\t\t\t<!-- SEARCH BAR -->
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"header-search\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<select class=\"input-select\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">All Categories</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Category 01</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Category 02</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<input class=\"input\" placeholder=\"Search here\">
\t\t\t\t\t\t\t\t\t<button class=\"search-btn\">Recherche</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /SEARCH BAR -->

\t\t\t\t\t\t<!-- ACCOUNT -->
\t\t\t\t\t\t<div class=\"col-md-3 clearfix\">
\t\t\t\t\t\t\t<div class=\"header-ctn\">
\t\t\t\t\t\t\t\t<!-- Wishlist -->
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Mes Favoris</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"qty\">2</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /Wishlist -->

\t\t\t\t\t\t\t\t<!-- Cart -->
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Mon panier</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"qty\">3</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"cart-dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart-list\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product01.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\"><span class=\"qty\">1x</span>\$980.00</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"delete\"><i class=\"fa fa-close\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product02.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\"><span class=\"qty\">3x</span>\$980.00</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"delete\"><i class=\"fa fa-close\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart-summary\">
\t\t\t\t\t\t\t\t\t\t\t<small>3 Item(s) selected</small>
\t\t\t\t\t\t\t\t\t\t\t<h5>SUBTOTAL: \$2940.00</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart-btns\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View Cart</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Checkout  <i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /Cart -->

\t\t\t\t\t\t\t\t<!-- Menu Toogle -->
\t\t\t\t\t\t\t\t<div class=\"menu-toggle\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Menu</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /Menu Toogle -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /ACCOUNT -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- row -->
\t\t\t\t</div>
\t\t\t\t<!-- container -->
\t\t\t</div>
\t\t\t<!-- /MAIN HEADER -->
\t\t</header>
\t\t<!-- /HEADER -->
";
        // line 159
        $this->displayBlock('header', $context, $blocks);
        // line 183
        echo "\t\t<!-- /NAVIGATION -->
  ";
        // line 184
        $this->displayBlock('body', $context, $blocks);
        // line 993
        echo "\t\t<!-- FOOTER -->
\t\t<footer id=\"footer\">
\t\t\t<!-- top footer -->
\t\t\t<div class=\"section\">
\t\t\t\t<!-- container -->
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-title\">About Us</h3>
\t\t\t\t\t\t\t\t<p>E-FIT est une application multiplateforme qui aide les gens à deviner la meilleur 
version d'eux-mêmes.</p>
\t\t\t\t\t\t\t\t<ul class=\"footer-links\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-map-marker\"></i>Ariana soghra</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i>29 757 417</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i>E_Fit@email.com</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"clearfix visible-xs\"></div>

\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-title\">Information</h3>
\t\t\t\t\t\t\t\t<ul class=\"footer-links\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-title\">Service</h3>
\t\t\t\t\t\t\t\t<ul class=\"footer-links\">
\t\t\t\t\t\t\t\t\t<li><a href=\"/addgenre\">My Account</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Wishlist</a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Help</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /row -->
\t\t\t\t</div>
\t\t\t\t<!-- /container -->
\t\t\t</div>
\t\t\t<!-- /top footer -->

\t\t\t<!-- bottom footer -->
\t\t\t<div id=\"bottom-footer\" class=\"section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t\t<ul class=\"footer-payments\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-cc-visa\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-credit-card\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-cc-paypal\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-cc-mastercard\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-cc-discover\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-cc-amex\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<span class=\"copyright\">
\t\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t\tCopyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"";
        // line 1066
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://colorlib.com"), "html", null, true);
        echo "\" target=\"_blank\">Colorlib</a>
\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /row -->
\t\t\t\t</div>
\t\t\t\t<!-- /container -->
\t\t\t</div>
\t\t\t<!-- /bottom footer -->
\t\t</footer>
\t\t<!-- /FOOTER -->

";
        // line 1079
        $this->displayBlock('js', $context, $blocks);
        // line 1089
        echo "\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "E-FIT - HTML Ecommerce Template ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Montserrat:400,500,700"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Bootstrap -->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>

\t\t<!-- Slick -->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\"/>
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick-theme.css"), "html", null, true);
        echo "\"/>

\t\t<!-- nouislider -->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nouislider.min.css"), "html", null, true);
        echo "\"/>

\t\t<!-- Font Awesome Icon -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">

\t\t<!-- Custom stlylesheet -->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_topheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topheader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topheader"));

        // line 35
        echo "\t\t\t<!-- TOP HEADER -->
\t\t\t<div id=\"top-header\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"header-links pull-left\">
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i>29 757 417</a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> E-FIT@gmail.com</a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-map-marker\"></i>La petite ariana </a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"header-links pull-right\">
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-user-o\"></i>Mon compte</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 159
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 160
        echo "\t\t<!-- NAVIGATION -->
\t\t<nav id=\"navigation\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- responsive-nav -->
\t\t\t\t<div id=\"responsive-nav\">
\t\t\t\t\t<!-- NAV -->
\t\t\t\t\t<ul class=\"main-nav nav navbar-nav\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Produit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Categories</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Evénement</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Coaching</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Commande</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Réclamation</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- /NAV -->
\t\t\t\t</div>
\t\t\t\t<!-- /responsive-nav -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</nav>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 184
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 185
        echo "\t\t<!-- SECTION -->
\t\t<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- shop -->
\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"shop\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/shop01.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"shop-body\">
\t\t\t\t\t\t\t\t<h3>Laptop<br>Collection</h3>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"cta-btn\">Shop now <i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /shop -->

\t\t\t\t\t<!-- shop -->
\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"shop\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/shop03.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"shop-body\">
\t\t\t\t\t\t\t\t<h3>Accessories<br>Collection</h3>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"cta-btn\">Shop now <i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /shop -->

\t\t\t\t\t<!-- shop -->
\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"shop\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/shop02.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"shop-body\">
\t\t\t\t\t\t\t\t<h3>Cameras<br>Collection</h3>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"cta-btn\">Shop now <i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /shop -->
\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /SECTION -->

\t\t<!-- SECTION -->
\t\t<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- section title -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h3 class=\"title\">New Products</h3>
\t\t\t\t\t\t\t<div class=\"section-nav\">
\t\t\t\t\t\t\t\t<ul class=\"section-tab-nav tab-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab1\">Laptops</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab1\">Smartphones</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab1\">Cameras</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab1\">Accessories</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /section title -->

\t\t\t\t\t<!-- Products tab & slick -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"products-tabs\">
\t\t\t\t\t\t\t\t<!-- tab -->
\t\t\t\t\t\t\t\t<div id=\"tab1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t\t<div class=\"products-slick\" data-nav=\"#slick-nav-1\">
\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product01.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sale\">-30%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new\">NEW</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product02.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new\">NEW</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product03.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sale\">-30%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product04.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product05.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"slick-nav-1\" class=\"products-slick-nav\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /tab -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Products tab & slick -->
\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /SECTION -->

\t\t<!-- HOT DEAL SECTION -->
\t\t<div id=\"hot-deal\" class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"hot-deal\">
\t\t\t\t\t\t\t<ul class=\"hot-deal-countdown\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>02</h3>
\t\t\t\t\t\t\t\t\t\t<span>Days</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>10</h3>
\t\t\t\t\t\t\t\t\t\t<span>Hours</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>34</h3>
\t\t\t\t\t\t\t\t\t\t<span>Mins</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>60</h3>
\t\t\t\t\t\t\t\t\t\t<span>Secs</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">hot deal this week</h2>
\t\t\t\t\t\t\t<p>New Collection Up to 50% OFF</p>
\t\t\t\t\t\t\t<a class=\"primary-btn cta-btn\" href=\"#\">Shop now</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /HOT DEAL SECTION -->

\t\t<!-- SECTION -->
\t\t<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- section title -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h3 class=\"title\">Top selling</h3>
\t\t\t\t\t\t\t<div class=\"section-nav\">
\t\t\t\t\t\t\t\t<ul class=\"section-tab-nav tab-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab2\">Laptops</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab2\">Smartphones</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab2\">Cameras</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab2\">Accessories</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /section title -->

\t\t\t\t\t<!-- Products tab & slick -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"products-tabs\">
\t\t\t\t\t\t\t\t<!-- tab -->
\t\t\t\t\t\t\t\t<div id=\"tab2\" class=\"tab-pane fade in active\">
\t\t\t\t\t\t\t\t\t<div class=\"products-slick\" data-nav=\"#slick-nav-2\">
\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product06.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sale\">-30%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new\">NEW</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product07.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new\">NEW</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 570
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product08.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sale\">-30%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product09.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product01.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"slick-nav-2\" class=\"products-slick-nav\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /tab -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Products tab & slick -->
\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /SECTION -->

\t\t<!-- SECTION -->
\t\t<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h4 class=\"title\">Top selling</h4>
\t\t\t\t\t\t\t<div class=\"section-nav\">
\t\t\t\t\t\t\t\t<div id=\"slick-nav-3\" class=\"products-slick-nav\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"products-widget-slick\" data-nav=\"#slick-nav-3\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product07.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product08.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product09.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/product01.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product02.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product03.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h4 class=\"title\">Top selling</h4>
\t\t\t\t\t\t\t<div class=\"section-nav\">
\t\t\t\t\t\t\t\t<div id=\"slick-nav-4\" class=\"products-slick-nav\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"products-widget-slick\" data-nav=\"#slick-nav-4\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product04.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product05.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product06.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product07.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product08.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product09.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix visible-sm visible-xs\"></div>

\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h4 class=\"title\">Top selling</h4>
\t\t\t\t\t\t\t<div class=\"section-nav\">
\t\t\t\t\t\t\t\t<div id=\"slick-nav-5\" class=\"products-slick-nav\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"products-widget-slick\" data-nav=\"#slick-nav-5\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product01.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product02.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product03.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product04.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product05.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product06.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /SECTION -->

\t\t<!-- NEWSLETTER -->
\t\t<div id=\"newsletter\" class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"newsletter\">
\t\t\t\t\t\t\t<p>Sign Up for the <strong>NEWSLETTER</strong></p>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input class=\"input\" type=\"email\" placeholder=\"Enter Your Email\">
\t\t\t\t\t\t\t\t<button class=\"newsletter-btn\"><i class=\"fa fa-envelope\"></i> Subscribe</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<ul class=\"newsletter-follow\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /NEWSLETTER -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1079
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 1080
        echo "\t\t<!-- jQuery Plugins -->
\t\t<script src=\"";
        // line 1081
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1082
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1083
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1084
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nouislider.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1085
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.zoom.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1086
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1087
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "basefront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1373 => 1087,  1369 => 1086,  1365 => 1085,  1361 => 1084,  1357 => 1083,  1353 => 1082,  1349 => 1081,  1346 => 1080,  1336 => 1079,  1056 => 723,  1038 => 708,  1022 => 695,  1006 => 682,  945 => 624,  914 => 596,  885 => 570,  851 => 539,  816 => 507,  695 => 389,  664 => 361,  635 => 335,  601 => 304,  566 => 272,  514 => 223,  497 => 209,  480 => 195,  468 => 185,  458 => 184,  426 => 160,  416 => 159,  393 => 35,  383 => 34,  371 => 28,  365 => 25,  359 => 22,  353 => 19,  349 => 18,  343 => 15,  336 => 12,  326 => 11,  307 => 10,  295 => 1089,  293 => 1079,  277 => 1066,  202 => 993,  200 => 184,  197 => 183,  195 => 159,  152 => 119,  138 => 108,  89 => 62,  74 => 49,  72 => 34,  66 => 30,  64 => 11,  60 => 10,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

\t\t<title>{% block title %}E-FIT - HTML Ecommerce Template {% endblock %}</title>
{% block css%}
\t\t<link href=\"{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,500,700')}}\" rel=\"stylesheet\">

\t\t<!-- Bootstrap -->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\"/>

\t\t<!-- Slick -->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{asset('css/slick.css')}}\"/>
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{asset('css/slick-theme.css')}}\"/>

\t\t<!-- nouislider -->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{asset('css/nouislider.min.css')}}\"/>

\t\t<!-- Font Awesome Icon -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.min.css')}}\">

\t\t<!-- Custom stlylesheet -->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\"/>
{% endblock %}
    </head>
\t<body>
\t\t<!-- HEADER -->
\t\t<header>
\t\t{% block topheader %}
\t\t\t<!-- TOP HEADER -->
\t\t\t<div id=\"top-header\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"header-links pull-left\">
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i>29 757 417</a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> E-FIT@gmail.com</a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-map-marker\"></i>La petite ariana </a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"header-links pull-right\">
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-user-o\"></i>Mon compte</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endblock  %}
\t\t\t<!-- /TOP HEADER -->

\t\t\t<!-- MAIN HEADER -->
          
\t\t\t<div id=\"header\">
\t\t\t\t<!-- container -->
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- LOGO -->
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"header-logo\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/LOGO.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /LOGO -->

\t\t\t\t\t\t<!-- SEARCH BAR -->
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"header-search\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<select class=\"input-select\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">All Categories</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Category 01</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Category 02</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<input class=\"input\" placeholder=\"Search here\">
\t\t\t\t\t\t\t\t\t<button class=\"search-btn\">Recherche</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /SEARCH BAR -->

\t\t\t\t\t\t<!-- ACCOUNT -->
\t\t\t\t\t\t<div class=\"col-md-3 clearfix\">
\t\t\t\t\t\t\t<div class=\"header-ctn\">
\t\t\t\t\t\t\t\t<!-- Wishlist -->
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Mes Favoris</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"qty\">2</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /Wishlist -->

\t\t\t\t\t\t\t\t<!-- Cart -->
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Mon panier</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"qty\">3</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"cart-dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart-list\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product01.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\"><span class=\"qty\">1x</span>\$980.00</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"delete\"><i class=\"fa fa-close\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product02.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\"><span class=\"qty\">3x</span>\$980.00</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"delete\"><i class=\"fa fa-close\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart-summary\">
\t\t\t\t\t\t\t\t\t\t\t<small>3 Item(s) selected</small>
\t\t\t\t\t\t\t\t\t\t\t<h5>SUBTOTAL: \$2940.00</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart-btns\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View Cart</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Checkout  <i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /Cart -->

\t\t\t\t\t\t\t\t<!-- Menu Toogle -->
\t\t\t\t\t\t\t\t<div class=\"menu-toggle\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Menu</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /Menu Toogle -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /ACCOUNT -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- row -->
\t\t\t\t</div>
\t\t\t\t<!-- container -->
\t\t\t</div>
\t\t\t<!-- /MAIN HEADER -->
\t\t</header>
\t\t<!-- /HEADER -->
{% block header %}
\t\t<!-- NAVIGATION -->
\t\t<nav id=\"navigation\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- responsive-nav -->
\t\t\t\t<div id=\"responsive-nav\">
\t\t\t\t\t<!-- NAV -->
\t\t\t\t\t<ul class=\"main-nav nav navbar-nav\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Produit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Categories</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Evénement</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Coaching</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Commande</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Réclamation</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- /NAV -->
\t\t\t\t</div>
\t\t\t\t<!-- /responsive-nav -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</nav>
\t{% endblock%}
\t\t<!-- /NAVIGATION -->
  {% block body %}
\t\t<!-- SECTION -->
\t\t<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- shop -->
\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"shop\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/shop01.png')}}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"shop-body\">
\t\t\t\t\t\t\t\t<h3>Laptop<br>Collection</h3>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"cta-btn\">Shop now <i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /shop -->

\t\t\t\t\t<!-- shop -->
\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"shop\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/shop03.png')}}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"shop-body\">
\t\t\t\t\t\t\t\t<h3>Accessories<br>Collection</h3>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"cta-btn\">Shop now <i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /shop -->

\t\t\t\t\t<!-- shop -->
\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"shop\">
\t\t\t\t\t\t\t<div class=\"shop-img\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/shop02.png')}}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"shop-body\">
\t\t\t\t\t\t\t\t<h3>Cameras<br>Collection</h3>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"cta-btn\">Shop now <i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /shop -->
\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /SECTION -->

\t\t<!-- SECTION -->
\t\t<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- section title -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h3 class=\"title\">New Products</h3>
\t\t\t\t\t\t\t<div class=\"section-nav\">
\t\t\t\t\t\t\t\t<ul class=\"section-tab-nav tab-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab1\">Laptops</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab1\">Smartphones</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab1\">Cameras</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab1\">Accessories</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /section title -->

\t\t\t\t\t<!-- Products tab & slick -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"products-tabs\">
\t\t\t\t\t\t\t\t<!-- tab -->
\t\t\t\t\t\t\t\t<div id=\"tab1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t\t<div class=\"products-slick\" data-nav=\"#slick-nav-1\">
\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product01.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sale\">-30%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new\">NEW</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product02.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new\">NEW</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product03.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sale\">-30%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product04.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product05.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"slick-nav-1\" class=\"products-slick-nav\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /tab -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Products tab & slick -->
\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /SECTION -->

\t\t<!-- HOT DEAL SECTION -->
\t\t<div id=\"hot-deal\" class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"hot-deal\">
\t\t\t\t\t\t\t<ul class=\"hot-deal-countdown\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>02</h3>
\t\t\t\t\t\t\t\t\t\t<span>Days</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>10</h3>
\t\t\t\t\t\t\t\t\t\t<span>Hours</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>34</h3>
\t\t\t\t\t\t\t\t\t\t<span>Mins</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>60</h3>
\t\t\t\t\t\t\t\t\t\t<span>Secs</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">hot deal this week</h2>
\t\t\t\t\t\t\t<p>New Collection Up to 50% OFF</p>
\t\t\t\t\t\t\t<a class=\"primary-btn cta-btn\" href=\"#\">Shop now</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /HOT DEAL SECTION -->

\t\t<!-- SECTION -->
\t\t<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- section title -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h3 class=\"title\">Top selling</h3>
\t\t\t\t\t\t\t<div class=\"section-nav\">
\t\t\t\t\t\t\t\t<ul class=\"section-tab-nav tab-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab2\">Laptops</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab2\">Smartphones</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab2\">Cameras</a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab2\">Accessories</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /section title -->

\t\t\t\t\t<!-- Products tab & slick -->
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"products-tabs\">
\t\t\t\t\t\t\t\t<!-- tab -->
\t\t\t\t\t\t\t\t<div id=\"tab2\" class=\"tab-pane fade in active\">
\t\t\t\t\t\t\t\t\t<div class=\"products-slick\" data-nav=\"#slick-nav-2\">
\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product06.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sale\">-30%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new\">NEW</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product07.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new\">NEW</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product08.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sale\">-30%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product09.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->

\t\t\t\t\t\t\t\t\t\t<!-- product -->
\t\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product01.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-btns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-wishlist\"><i class=\"fa fa-heart-o\"></i><span class=\"tooltipp\">add to wishlist</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-compare\"><i class=\"fa fa-exchange\"></i><span class=\"tooltipp\">add to compare</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"quick-view\"><i class=\"fa fa-eye\"></i><span class=\"tooltipp\">quick view</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /product -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"slick-nav-2\" class=\"products-slick-nav\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /tab -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Products tab & slick -->
\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /SECTION -->

\t\t<!-- SECTION -->
\t\t<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h4 class=\"title\">Top selling</h4>
\t\t\t\t\t\t\t<div class=\"section-nav\">
\t\t\t\t\t\t\t\t<div id=\"slick-nav-3\" class=\"products-slick-nav\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"products-widget-slick\" data-nav=\"#slick-nav-3\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product07.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product08.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product09.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('./img/product01.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product02.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product03.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h4 class=\"title\">Top selling</h4>
\t\t\t\t\t\t\t<div class=\"section-nav\">
\t\t\t\t\t\t\t\t<div id=\"slick-nav-4\" class=\"products-slick-nav\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"products-widget-slick\" data-nav=\"#slick-nav-4\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product04.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product05.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product06.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product07.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product08.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product09.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix visible-sm visible-xs\"></div>

\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<h4 class=\"title\">Top selling</h4>
\t\t\t\t\t\t\t<div class=\"section-nav\">
\t\t\t\t\t\t\t\t<div id=\"slick-nav-5\" class=\"products-slick-nav\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"products-widget-slick\" data-nav=\"#slick-nav-5\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product01.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product02.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product03.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product04.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product05.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /product widget -->

\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t\t<div class=\"product-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./img/product06.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"product-category\">Category</p>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">product name goes here</a></h3>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-price\">\$980.00 <del class=\"product-old-price\">\$990.00</del></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- product widget -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /SECTION -->

\t\t<!-- NEWSLETTER -->
\t\t<div id=\"newsletter\" class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"newsletter\">
\t\t\t\t\t\t\t<p>Sign Up for the <strong>NEWSLETTER</strong></p>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input class=\"input\" type=\"email\" placeholder=\"Enter Your Email\">
\t\t\t\t\t\t\t\t<button class=\"newsletter-btn\"><i class=\"fa fa-envelope\"></i> Subscribe</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<ul class=\"newsletter-follow\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /NEWSLETTER -->
{% endblock %}
\t\t<!-- FOOTER -->
\t\t<footer id=\"footer\">
\t\t\t<!-- top footer -->
\t\t\t<div class=\"section\">
\t\t\t\t<!-- container -->
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-title\">About Us</h3>
\t\t\t\t\t\t\t\t<p>E-FIT est une application multiplateforme qui aide les gens à deviner la meilleur 
version d'eux-mêmes.</p>
\t\t\t\t\t\t\t\t<ul class=\"footer-links\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-map-marker\"></i>Ariana soghra</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i>29 757 417</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i>E_Fit@email.com</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"clearfix visible-xs\"></div>

\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-title\">Information</h3>
\t\t\t\t\t\t\t\t<ul class=\"footer-links\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-title\">Service</h3>
\t\t\t\t\t\t\t\t<ul class=\"footer-links\">
\t\t\t\t\t\t\t\t\t<li><a href=\"/addgenre\">My Account</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Wishlist</a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Help</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /row -->
\t\t\t\t</div>
\t\t\t\t<!-- /container -->
\t\t\t</div>
\t\t\t<!-- /top footer -->

\t\t\t<!-- bottom footer -->
\t\t\t<div id=\"bottom-footer\" class=\"section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t\t<ul class=\"footer-payments\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-cc-visa\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-credit-card\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-cc-paypal\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-cc-mastercard\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-cc-discover\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-cc-amex\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<span class=\"copyright\">
\t\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t\tCopyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"{{asset('https://colorlib.com')}}\" target=\"_blank\">Colorlib</a>
\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /row -->
\t\t\t\t</div>
\t\t\t\t<!-- /container -->
\t\t\t</div>
\t\t\t<!-- /bottom footer -->
\t\t</footer>
\t\t<!-- /FOOTER -->

{% block js%}
\t\t<!-- jQuery Plugins -->
\t\t<script src=\"{{asset('js/jquery.min.js')}}\"></script>
\t\t<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
\t\t<script src=\"{{asset('js/slick.min.js')}}\"></script>
\t\t<script src=\"{{asset('js/nouislider.min.js')}}\"></script>
\t\t<script src=\"{{asset('js/jquery.zoom.min.js')}}\"></script>
\t\t<script src=\"{{asset('js/main.js')}}\"></script>
\t\t<script src=\"{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}\"></script>
{% endblock %}
\t</body>
</html>
", "basefront.html.twig", "C:\\Users\\hiba5\\OneDrive\\Desktop\\PIDEV-335ded4854a4b31a154cbdd78e8307fb40522458\\templates\\basefront.html.twig");
    }
}
