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

/* reclamation/updateback.html.twig */
class __TwigTemplate_c53521fa86cc41813e228e4897002c41 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/updateback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/updateback.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reclamation/updateback.html.twig", 1);
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
                    <p class=\"card-description\"> Modifier la status de réclamation </p>
                    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <form class=\"forms-sample\">
                      <div class=\"form-group\">
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 13, $this->source); })()), "StatusR", [], "any", false, false, false, 13), 'row', ["label" => "Status", "attr" => ["placeholder" => "status", "class" => "form-control"]]);
        echo "
                      </div>
                      
                      <div class=\"form-group\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 17, $this->source); })()), "traitement", [], "any", false, false, false, 17), 'row', ["label" => "traitement", "attr" => ["placeholder" => "traitement", "class" => "form-control"]]);
        echo "
                      </div>
                      
                      <button type=\"submit\" class=\"btn btn-primary mr-2\" >sauvegarder</button>
                      ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
                      <br>
                      <br>
                      <br>
                      <a href=\"/affichergenre\" class=\"btn btn-dark\">Afficher les Types</a>
                      <a href=\"/affichreclamation1\" class=\"btn btn-dark\">Afficher les Réclamations</a>
                    </form>
                    

                    </div>
                </div>
            </div>

            
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/updateback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  89 => 17,  82 => 13,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}

<div class=\"col-12 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title\">Basic form elements</h4>
                    <p class=\"card-description\"> Modifier la status de réclamation </p>
                    {{ form_start(form2 , {'attr': {'novalidate':'novalidate'}} ) }}
                    <form class=\"forms-sample\">
                      <div class=\"form-group\">
                        {{ form_row(form2.StatusR, {'label':'Status' ,'attr':{'placeholder': 'status', 'class':'form-control'}}) }}
                      </div>
                      
                      <div class=\"form-group\">
                        {{ form_row(form2.traitement, {'label':'traitement' ,'attr':{'placeholder': 'traitement', 'class':'form-control'}}) }}
                      </div>
                      
                      <button type=\"submit\" class=\"btn btn-primary mr-2\" >sauvegarder</button>
                      {{ form_end(form2 ) }}
                      <br>
                      <br>
                      <br>
                      <a href=\"/affichergenre\" class=\"btn btn-dark\">Afficher les Types</a>
                      <a href=\"/affichreclamation1\" class=\"btn btn-dark\">Afficher les Réclamations</a>
                    </form>
                    

                    </div>
                </div>
            </div>

            
{% endblock %}", "reclamation/updateback.html.twig", "C:\\Users\\hiba5\\OneDrive\\Desktop\\PIDEV-335ded4854a4b31a154cbdd78e8307fb40522458\\templates\\reclamation\\updateback.html.twig");
    }
}
