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

/* reclamation/afficherfront.html.twig */
class __TwigTemplate_1d63df28bf5a4cd854f19d372bb64954 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/afficherfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/afficherfront.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "reclamation/afficherfront.html.twig", 1);
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

    // line 4
    public function block_topheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topheader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topheader"));

        // line 5
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

    // line 19
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "
<nav id=\"navigation\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- responsive-nav -->
\t\t\t\t<div id=\"responsive-nav\">
\t\t\t\t\t<!-- NAV -->
\t\t\t\t\t<ul class=\"main-nav nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"/reclamation1\">Home</a></li>
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
        echo "<!--
<script>
setTimeout(() => {
  const box = document.getElementById('box');

  // 👇️ hides element (still takes up space on the page)
  box.style.visibility = 'hidden';
}, 500);

</script>
-->
<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
                    <div class=\"row\">
                      <input id=\"ajax-search-input\" type=\"text\" name=\"search\" placeholder=\"Rechercher...\" class=\"input\">

                      <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
                      <script>
                          \$(document).ready(function() {
                              \$(\"#ajax-search-input\").on(\"keyup\", function() {
                                  var value = \$(this).val().toLowerCase();
                                  \$(\"table tr\").each(function() {
                                      if (\$(this).text().toLowerCase().indexOf(value) > -1) {
                                          \$(this).show();
                                      } else {
                                          \$(this).hide();
                                      }
                                  });
                              });
                          });
                      </script>
\t\t\t\t\t<div class=\"col-md-17\">
                <div class=\"card\">
                  <div class=\"card-body\">
                  <br>
                    <h4 class=\"card-title\">Table des Reclamation</h4>
                    
                    </p>
                    <div class=\"table-responsive\">
                    <br>
                    
                      <table class=\"table\">
                        <thead>
                          <tr>
                            
                            <th>titre</th>
                            <th>type</th>
                            <th>description</th>
                            <th>date</th>
                            <th >Status</th>
                            <th>traitement</th>
                            <th >Modifier</th>
                            <th>supprimer</th>
                          </tr>
                        </thead>
                        <tbody>
                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recl"]) || array_key_exists("recl", $context) ? $context["recl"] : (function () { throw new RuntimeError('Variable "recl" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 106
            echo "                          <tr>
                            
                            <td> ";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "TitreR", [], "any", false, false, false, 108), "html", null, true);
            echo " </td>
                            <td> ";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "genre", [], "any", false, false, false, 109), "html", null, true);
            echo " </td>
                            <td> ";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "DescriptionR", [], "any", false, false, false, 110), "html", null, true);
            echo " </td>
                            <td> ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "DateR", [], "any", false, false, false, 111), "format", [0 => "j-m-y"], "method", false, false, false, 111), "html", null, true);
            echo " </td>
                            
                            <td> ";
            // line 113
            if ((twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 113) == "En attente")) {
                // line 114
                echo "                            <span class=\"badge badge-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 114), "html", null, true);
                echo "</span>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 115
$context["a"], "StatusR", [], "any", false, false, false, 115) == "Confirmée")) {
                // line 116
                echo "                            <span class=\"badge badge-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 116), "html", null, true);
                echo "</span>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 117
$context["a"], "StatusR", [], "any", false, false, false, 117) == "En cours de preparation")) {
                // line 118
                echo "                             <span class=\"badge badge-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 118), "html", null, true);
                echo "</span>
                            ";
            }
            // line 119
            echo "</td>
                            <td> ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "traitement", [], "any", false, false, false, 120), "html", null, true);
            echo " </td>
                            
                            
                            <td > 
                            

                             ";
            // line 126
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 126), [0 => "En cours de preparation", 1 => "Confirmée"])) {
                // line 127
                echo "                        <a class=\"primary-btn order-submit\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updater", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 127)]), "html", null, true);
                echo "\">Modifier</a>
                              ";
            }
            // line 129
            echo "                            


                            
                            
                            </td>
                            <td><a href=\"removerecfront/";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 135), "html", null, true);
            echo "\" class=\"primary-btn2 order-submit\">supprimer</a></td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                        </tbody>
                      </table>                     
                      <a href=\"/addreclamation\" class=\"primary-btn order-submit\" >Ajouter</a>
                      
                       <br>
                    </div>
                  </div>
                </div>
                 </div>
                  </div>
                </div>
                </div>
           


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/afficherfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 138,  302 => 135,  294 => 129,  288 => 127,  286 => 126,  277 => 120,  274 => 119,  268 => 118,  266 => 117,  261 => 116,  259 => 115,  254 => 114,  252 => 113,  247 => 111,  243 => 110,  239 => 109,  235 => 108,  231 => 106,  227 => 105,  167 => 47,  157 => 46,  123 => 20,  113 => 19,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
\t\t\t{% endblock %}
{% block header %}

<nav id=\"navigation\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- responsive-nav -->
\t\t\t\t<div id=\"responsive-nav\">
\t\t\t\t\t<!-- NAV -->
\t\t\t\t\t<ul class=\"main-nav nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"/reclamation1\">Home</a></li>
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
<!--
<script>
setTimeout(() => {
  const box = document.getElementById('box');

  // 👇️ hides element (still takes up space on the page)
  box.style.visibility = 'hidden';
}, 500);

</script>
-->
<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- row -->
                    <div class=\"row\">
                      <input id=\"ajax-search-input\" type=\"text\" name=\"search\" placeholder=\"Rechercher...\" class=\"input\">

                      <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
                      <script>
                          \$(document).ready(function() {
                              \$(\"#ajax-search-input\").on(\"keyup\", function() {
                                  var value = \$(this).val().toLowerCase();
                                  \$(\"table tr\").each(function() {
                                      if (\$(this).text().toLowerCase().indexOf(value) > -1) {
                                          \$(this).show();
                                      } else {
                                          \$(this).hide();
                                      }
                                  });
                              });
                          });
                      </script>
\t\t\t\t\t<div class=\"col-md-17\">
                <div class=\"card\">
                  <div class=\"card-body\">
                  <br>
                    <h4 class=\"card-title\">Table des Reclamation</h4>
                    
                    </p>
                    <div class=\"table-responsive\">
                    <br>
                    
                      <table class=\"table\">
                        <thead>
                          <tr>
                            
                            <th>titre</th>
                            <th>type</th>
                            <th>description</th>
                            <th>date</th>
                            <th >Status</th>
                            <th>traitement</th>
                            <th >Modifier</th>
                            <th>supprimer</th>
                          </tr>
                        </thead>
                        <tbody>
                        {% for a in recl %}
                          <tr>
                            
                            <td> {{a.TitreR}} </td>
                            <td> {{a.genre}} </td>
                            <td> {{a.DescriptionR  }} </td>
                            <td> {{a.DateR.format('j-m-y')}} </td>
                            
                            <td> {% if a.StatusR == \"En attente\" %}
                            <span class=\"badge badge-warning\">{{ a.StatusR }}</span>
                            {% elseif a.StatusR == \"Confirmée\" %}
                            <span class=\"badge badge-success\">{{ a.StatusR }}</span>
                            {% elseif a.StatusR == \"En cours de preparation\" %}
                             <span class=\"badge badge-info\">{{ a.StatusR }}</span>
                            {% endif %}</td>
                            <td> {{a.traitement}} </td>
                            
                            
                            <td > 
                            

                             {% if a.StatusR not in ['En cours de preparation', 'Confirmée']  %}
                        <a class=\"primary-btn order-submit\" href=\"{{ path('app_updater', {'id': a.id}) }}\">Modifier</a>
                              {% endif %}
                            


                            
                            
                            </td>
                            <td><a href=\"removerecfront/{{a.id}}\" class=\"primary-btn2 order-submit\">supprimer</a></td>
                          </tr>
                          {% endfor %}
                        </tbody>
                      </table>                     
                      <a href=\"/addreclamation\" class=\"primary-btn order-submit\" >Ajouter</a>
                      
                       <br>
                    </div>
                  </div>
                </div>
                 </div>
                  </div>
                </div>
                </div>
           


{% endblock %}", "reclamation/afficherfront.html.twig", "C:\\Users\\hiba5\\OneDrive\\Desktop\\PIDEV-335ded4854a4b31a154cbdd78e8307fb40522458\\templates\\reclamation\\afficherfront.html.twig");
    }
}
