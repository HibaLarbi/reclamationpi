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

/* reclamation/afficherback.html.twig */
class __TwigTemplate_f90e5485595046a2c7baa0e0272f3369 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/afficherback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/afficherback.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reclamation/afficherback.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"col-lg-12 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title\">Basic Table</h4>
                    <p class=\"card-description\"> table<code>des Reclamations</code>
                    </p>
                    <div class=\"table-responsive\">
                      <table class=\"table\">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>user</th>
                            <th>titre</th>
                            <th>type</th>
                            <th>description</th>
                            <th>date</th>
                            <th>Status</th>
                            <th>traitement</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 26
            echo "                          <tr>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 28), "html", null, true);
            echo " </td>
                            <td> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "TitreR", [], "any", false, false, false, 29), "html", null, true);
            echo " </td>
                            <td> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "genre", [], "any", false, false, false, 30), "html", null, true);
            echo " </td>
                            <td> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "DescriptionR", [], "any", false, false, false, 31), "html", null, true);
            echo " </td>
                            <td> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "DateR", [], "any", false, false, false, 32), "format", [0 => "j-m-y"], "method", false, false, false, 32), "html", null, true);
            echo " </td>
                            <td> ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 33) == "En attente")) {
                // line 34
                echo "                            <span class=\"badge badge-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 34), "html", null, true);
                echo "</span>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 35
$context["a"], "StatusR", [], "any", false, false, false, 35) == "Confirmée")) {
                // line 36
                echo "                            <span class=\"badge badge-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 36), "html", null, true);
                echo "</span>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 37
$context["a"], "StatusR", [], "any", false, false, false, 37) == "En cours de preparation")) {
                // line 38
                echo "                             <span class=\"badge badge-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 38), "html", null, true);
                echo "</span>
                            ";
            }
            // line 39
            echo "</td>
                            <td> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "traitement", [], "any", false, false, false, 40), "html", null, true);
            echo " </td>
                            <td>
                            ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 42) != "Confirmée")) {
                // line 43
                echo "            
                               <a href=\"updaterb/";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\" class=\"btn btn-primary mr-2\" >modifier</a>
                            ";
            }
            // line 46
            echo "                            </td>
                            <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_removerecback", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-dark\" >supprimer</a></td>
                            
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        </tbody>
                      </table>
                      <br>
                      <br>
                        <a class=\"btn btn-success\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PDF_Reclamation");
        echo "\">  PDF </a>
                        <script type=\"text/javascript\">
                            function imprimer_page(){
                                window.print();
                            }
                        </script>
                    
                      <a href=\"/addgenre\" class=\"btn btn-dark\">Retour</a>
                    </div>
                  </div>
                </div>
                
              
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/afficherback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 55,  176 => 51,  166 => 47,  163 => 46,  158 => 44,  155 => 43,  153 => 42,  148 => 40,  145 => 39,  139 => 38,  137 => 37,  132 => 36,  130 => 35,  125 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  96 => 26,  92 => 25,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block body %}
<div class=\"col-lg-12 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title\">Basic Table</h4>
                    <p class=\"card-description\"> table<code>des Reclamations</code>
                    </p>
                    <div class=\"table-responsive\">
                      <table class=\"table\">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>user</th>
                            <th>titre</th>
                            <th>type</th>
                            <th>description</th>
                            <th>date</th>
                            <th>Status</th>
                            <th>traitement</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        {% for a in rec %}
                          <tr>
                            <td>{{a.id }}</td>
                            <td> {{a.user }} </td>
                            <td> {{a.TitreR}} </td>
                            <td> {{a.genre}} </td>
                            <td> {{a.DescriptionR}} </td>
                            <td> {{a.DateR.format('j-m-y') }} </td>
                            <td> {% if a.StatusR == \"En attente\" %}
                            <span class=\"badge badge-warning\">{{ a.StatusR }}</span>
                            {% elseif a.StatusR == \"Confirmée\" %}
                            <span class=\"badge badge-success\">{{ a.StatusR }}</span>
                            {% elseif a.StatusR == \"En cours de preparation\" %}
                             <span class=\"badge badge-info\">{{ a.StatusR }}</span>
                            {% endif %}</td>
                            <td> {{a.traitement}} </td>
                            <td>
                            {% if a.StatusR !='Confirmée' %}
            
                               <a href=\"updaterb/{{a.id}}\" class=\"btn btn-primary mr-2\" >modifier</a>
                            {% endif %}
                            </td>
                            <td><a href=\"{{ path('app_removerecback', {id:a.id}) }}\" class=\"btn btn-dark\" >supprimer</a></td>
                            
                          </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                      <br>
                      <br>
                        <a class=\"btn btn-success\" href=\"{{path('PDF_Reclamation') }}\">  PDF </a>
                        <script type=\"text/javascript\">
                            function imprimer_page(){
                                window.print();
                            }
                        </script>
                    
                      <a href=\"/addgenre\" class=\"btn btn-dark\">Retour</a>
                    </div>
                  </div>
                </div>
                
              
{% endblock %}", "reclamation/afficherback.html.twig", "C:\\Users\\hiba5\\OneDrive\\Desktop\\PIDEV-335ded4854a4b31a154cbdd78e8307fb40522458\\templates\\reclamation\\afficherback.html.twig");
    }
}
