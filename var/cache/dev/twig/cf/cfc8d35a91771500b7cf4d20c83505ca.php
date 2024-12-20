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

/* genre/index.html.twig */
class __TwigTemplate_313fb261aae07f1c44d2a260487c7c40 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genre/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "genre/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"col-12 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title\">Basic form elements</h4>
                    <p class=\"card-description\"> Ajouter un Type </p>
                    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <form class=\"forms-sample\">
                      <div class=\"form-group\">
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 13, $this->source); })()), "libelle", [], "any", false, false, false, 13), 'row', ["label" => "Votre libelle", "attr" => ["placeholder" => "libelle...", "class" => "form-control"]]);
        echo "
                      </div>
                     
                      ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 16, $this->source); })()), "ajouter", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "btn btn-primary mr-2"]]);
        echo "
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
                      </form>
                      
                      
                      <br>
                      <a href=\"/affichergenre\" class=\"btn btn-dark\">Afficher les Types</a>
                      <a href=\"/affichreclamation1\" class=\"btn btn-dark\">Afficher les Réclamations</a>
                    
                    
                     
                    </div>
                </div>
            </div>

            
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "genre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 17,  88 => 16,  82 => 13,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}

<div class=\"col-12 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title\">Basic form elements</h4>
                    <p class=\"card-description\"> Ajouter un Type </p>
                    {{ form_start(form1 , {'attr': {'novalidate':'novalidate'}} ) }}
                    <form class=\"forms-sample\">
                      <div class=\"form-group\">
                        {{ form_row(form1.libelle, {'label':'Votre libelle' ,'attr':{'placeholder': 'libelle...', 'class':'form-control'}}) }}
                      </div>
                     
                      {{ form_widget(form1.ajouter , {'attr': {'class':'btn btn-primary mr-2'}} ) }}
{{ form_end(form1) }}
                      </form>
                      
                      
                      <br>
                      <a href=\"/affichergenre\" class=\"btn btn-dark\">Afficher les Types</a>
                      <a href=\"/affichreclamation1\" class=\"btn btn-dark\">Afficher les Réclamations</a>
                    
                    
                     
                    </div>
                </div>
            </div>

            
{% endblock %}", "genre/index.html.twig", "C:\\Users\\hiba5\\OneDrive\\Desktop\\PIDEV-335ded4854a4b31a154cbdd78e8307fb40522458\\templates\\genre\\index.html.twig");
    }
}
