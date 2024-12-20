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

/* reclamation/index.html.twig */
class __TwigTemplate_5d5356a7048fafec9183d9466fbb1323 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'topheader' => [$this, 'block_topheader'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "reclamation/index.html.twig", 1);
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

        echo "Reclamation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_topheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topheader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topheader"));

        // line 6
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "<nav id=\"navigation\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- responsive-nav -->
\t\t\t\t<div id=\"responsive-nav\">
\t\t\t\t\t<!-- NAV -->
\t\t\t\t\t<ul class=\"main-nav nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"/fit\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Produit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Categories</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Evénement</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Coaching</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Commande</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"/addreclamation\">Réclamation</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- /NAV -->
\t\t\t\t</div>
\t\t\t\t<!-- /responsive-nav -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "
<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
                    

\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<!-- Billing Details -->
\t\t\t\t\t\t<div class=\"billing-details\">
\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t\t<h3 class=\"title\">Ajouter reclamation</h3>
\t\t\t\t\t\t\t</div>
                            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 60, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t\t<div class=\"form-group\">
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 62, $this->source); })()), "TitreR", [], "any", false, false, false, 62), 'row', ["label" => "Titre", "attr" => ["placeholder" => "Titre ...", "class" => "input"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 66, $this->source); })()), "genre", [], "any", false, false, false, 66), 'row', ["label" => "Type", "attr" => ["placeholder" => "Type ...", "class" => "input"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 69, $this->source); })()), "DescriptionR", [], "any", false, false, false, 69), 'row', ["label" => "Description", "attr" => ["placeholder" => "Description ...", "class" => "input"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t       <button type=\"submit\" class=\"primary-btn order-submit\"  >reclamer</button>
\t\t\t\t\t\t   <a href=\"/affichreclamation2\" class=\"primary-btn2 order-submit\"  >Afficher reclamation</a>
                           
\t\t\t\t\t\t   ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t
             </div>
             </div>
             </div>

\t\t\t\t\t<!-- Order Details -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 76,  197 => 69,  191 => 66,  184 => 62,  179 => 60,  164 => 47,  154 => 46,  123 => 22,  113 => 21,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}

{% block title %}Reclamation{% endblock %}

{% block topheader %}
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
{% endblock %}

{% block header %}
<nav id=\"navigation\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- responsive-nav -->
\t\t\t\t<div id=\"responsive-nav\">
\t\t\t\t\t<!-- NAV -->
\t\t\t\t\t<ul class=\"main-nav nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"/fit\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Produit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Categories</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Evénement</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Coaching</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Commande</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"/addreclamation\">Réclamation</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- /NAV -->
\t\t\t\t</div>
\t\t\t\t<!-- /responsive-nav -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</nav>
{% endblock %}


{% block body %}

<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
                    

\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<!-- Billing Details -->
\t\t\t\t\t\t<div class=\"billing-details\">
\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t\t<h3 class=\"title\">Ajouter reclamation</h3>
\t\t\t\t\t\t\t</div>
                            {{ form_start(form2 , {'attr': {'novalidate':'novalidate'}} ) }}
\t\t\t\t\t\t\t<div class=\"form-group\">
                                {{ form_row(form2.TitreR, {'label':'Titre','attr':{'placeholder': 'Titre ...','class':'input'}})}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t{{ form_row(form2.genre , {'label':'Type','attr':{'placeholder':'Type ...' , 'class':'input'}})}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t{{ form_row(form2.DescriptionR , {'label':'Description','attr':{'placeholder': 'Description ...','class':'input'}})}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t       <button type=\"submit\" class=\"primary-btn order-submit\"  >reclamer</button>
\t\t\t\t\t\t   <a href=\"/affichreclamation2\" class=\"primary-btn2 order-submit\"  >Afficher reclamation</a>
                           
\t\t\t\t\t\t   {{ form_end(form2) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t
             </div>
             </div>
             </div>

\t\t\t\t\t<!-- Order Details -->

{% endblock %}

", "reclamation/index.html.twig", "C:\\Users\\hiba5\\OneDrive\\Desktop\\PIDEV-335ded4854a4b31a154cbdd78e8307fb40522458\\templates\\reclamation\\index.html.twig");
    }
}
