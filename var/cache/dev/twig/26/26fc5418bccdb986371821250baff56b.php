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

/* reclamation/pdf.html.twig */
class __TwigTemplate_bdf160a8477ae2c3ced02bab44a0915f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf.html.twig"));

        // line 1
        echo "<h1 class=\"align-center\">Bienvenue dans votre application E-fit </h1>

<p>Voila la liste de tout les reclamations en attentes</p>
<table class=\"table\" border=\"5\" >
    <thead>
    <tr>
            <th>id</th>
            <th>user</th>
            <th>titre</th>
            <th>type</th>
            <th>description</th>
            <th>date</th>
            <th >Status</th>
            <th >traitement</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 19
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 19) == "En attente")) {
                // line 20
                echo "        <tr>
            <td> ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
            <td> ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 22), "html", null, true);
                echo " </td>
            <td> ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "TitreR", [], "any", false, false, false, 23), "html", null, true);
                echo " </td>
            <td> ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "genre", [], "any", false, false, false, 24), "html", null, true);
                echo " </td>
            <td> ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "DescriptionR", [], "any", false, false, false, 25), "html", null, true);
                echo " </td>
            <td> ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "DateR", [], "any", false, false, false, 26), "format", [0 => "j-m-y"], "method", false, false, false, 26), "html", null, true);
                echo " </td>
            <td> ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
             <td> ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "traitement", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            // line 31
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
</table>
<br>
<br>
<br>
<br>

<p>Voila la liste de tout les reclamations en cours de préparation</p>
<table class=\"table\" border=\"5\" >
    <thead>
    <tr>
            <th>id</th>
            <th>user</th>
            <th>titre</th>
            <th>type</th>
            <th>description</th>
            <th>date</th>
            <th >Status</th>
            <th >traitement</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 59
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 59) == "En cours de preparation")) {
                // line 60
                echo "        <tr>
            <td> ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
            <td> ";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 62), "html", null, true);
                echo " </td>
            <td> ";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "TitreR", [], "any", false, false, false, 63), "html", null, true);
                echo " </td>
            <td> ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "genre", [], "any", false, false, false, 64), "html", null, true);
                echo " </td>
            <td> ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "DescriptionR", [], "any", false, false, false, 65), "html", null, true);
                echo " </td>
            <td> ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "DateR", [], "any", false, false, false, 66), "format", [0 => "j-m-y"], "method", false, false, false, 66), "html", null, true);
                echo " </td>
            <td> ";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
             <td> ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "traitement", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            // line 71
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </tbody>
</table>
<br>
<br>
<br>
<br>

<p>Voila la liste de tout les reclamations confirmées</p>
<table class=\"table\" border=\"5\" >
    <thead>
    <tr>
            <th>id</th>
            <th>user</th>
            <th>titre</th>
            <th>type</th>
            <th>description</th>
            <th>date</th>
            <th >Status</th>
            <th >traitement</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 98, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 99
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 99) == "Confirmée")) {
                // line 100
                echo "        <tr>
            <td> ";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "</td>
            <td> ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 102), "html", null, true);
                echo " </td>
            <td> ";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "TitreR", [], "any", false, false, false, 103), "html", null, true);
                echo " </td>
            <td> ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "genre", [], "any", false, false, false, 104), "html", null, true);
                echo " </td>
            <td> ";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "DescriptionR", [], "any", false, false, false, 105), "html", null, true);
                echo " </td>
            <td> ";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "DateR", [], "any", false, false, false, 106), "format", [0 => "j-m-y"], "method", false, false, false, 106), "html", null, true);
                echo " </td>
            <td> ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "StatusR", [], "any", false, false, false, 107), "html", null, true);
                echo "</td>
            <td> ";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "traitement", [], "any", false, false, false, 108), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            // line 111
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            echo "        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "    </tbody>
</table>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 116,  278 => 112,  273 => 111,  267 => 108,  263 => 107,  259 => 106,  255 => 105,  251 => 104,  247 => 103,  243 => 102,  239 => 101,  236 => 100,  233 => 99,  228 => 98,  204 => 76,  195 => 72,  190 => 71,  184 => 68,  180 => 67,  176 => 66,  172 => 65,  168 => 64,  164 => 63,  160 => 62,  156 => 61,  153 => 60,  150 => 59,  145 => 58,  121 => 36,  112 => 32,  107 => 31,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  70 => 20,  67 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1 class=\"align-center\">Bienvenue dans votre application E-fit </h1>

<p>Voila la liste de tout les reclamations en attentes</p>
<table class=\"table\" border=\"5\" >
    <thead>
    <tr>
            <th>id</th>
            <th>user</th>
            <th>titre</th>
            <th>type</th>
            <th>description</th>
            <th>date</th>
            <th >Status</th>
            <th >traitement</th>
    </tr>
    </thead>
    <tbody>
    {% for a in reclamations %}
    {% if a.StatusR == \"En attente\" %}
        <tr>
            <td> {{a.id }}</td>
            <td> {{a.user }} </td>
            <td> {{a.TitreR}} </td>
            <td> {{a.genre}} </td>
            <td> {{a.DescriptionR  }} </td>
            <td> {{a.DateR.format('j-m-y')}} </td>
            <td> {{a.StatusR}}</td>
             <td> {{a.traitement}}</td>
            </tr>
            {% endif %}
    {% else %}
        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
<br>
<br>
<br>
<br>

<p>Voila la liste de tout les reclamations en cours de préparation</p>
<table class=\"table\" border=\"5\" >
    <thead>
    <tr>
            <th>id</th>
            <th>user</th>
            <th>titre</th>
            <th>type</th>
            <th>description</th>
            <th>date</th>
            <th >Status</th>
            <th >traitement</th>
    </tr>
    </thead>
    <tbody>
    {% for a in reclamations %}
    {% if a.StatusR == \"En cours de preparation\" %}
        <tr>
            <td> {{a.id }}</td>
            <td> {{a.user }} </td>
            <td> {{a.TitreR}} </td>
            <td> {{a.genre}} </td>
            <td> {{a.DescriptionR  }} </td>
            <td> {{a.DateR.format('j-m-y')}} </td>
            <td> {{a.StatusR}}</td>
             <td> {{a.traitement}}</td>
            </tr>
            {% endif %}
    {% else %}
        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
<br>
<br>
<br>
<br>

<p>Voila la liste de tout les reclamations confirmées</p>
<table class=\"table\" border=\"5\" >
    <thead>
    <tr>
            <th>id</th>
            <th>user</th>
            <th>titre</th>
            <th>type</th>
            <th>description</th>
            <th>date</th>
            <th >Status</th>
            <th >traitement</th>
    </tr>
    </thead>
    <tbody>
    {% for a in reclamations %}
    {% if a.StatusR == \"Confirmée\" %}
        <tr>
            <td> {{a.id }}</td>
            <td> {{a.user }} </td>
            <td> {{a.TitreR}} </td>
            <td> {{a.genre}} </td>
            <td> {{a.DescriptionR  }} </td>
            <td> {{a.DateR.format('j-m-y')}} </td>
            <td> {{a.StatusR}}</td>
            <td> {{a.traitement}}</td>
            </tr>
            {% endif %}
    {% else %}
        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
</div>", "reclamation/pdf.html.twig", "C:\\Users\\hiba5\\OneDrive\\Desktop\\PIDEV-335ded4854a4b31a154cbdd78e8307fb40522458\\templates\\reclamation\\pdf.html.twig");
    }
}
