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

/* exchange/alert.html.twig */
class __TwigTemplate_b4533a7890aad1945a27e80d93fecce3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exchange/alert.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exchange/alert.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
\tAlert

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div class=\"container\" style=\"width:500px;\">
\t\t<div class=\"table-container\">

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t<tr>

\t\t\t\t\t<th scope=\"col\">Curreny from</th>
\t\t\t\t\t<th scope=\"col\">Currency to</th>
\t\t\t\t\t<th scope=\"col\">Function</th>
\t\t\t\t\t<th scope=\"col\">Result</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 25
            echo "
\t\t\t\t\t<tr>

\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "cur1", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "cur2", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "func", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "result", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a href=\"/xe/exchange/deletealert/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a></td>


\t\t\t\t\t</tr>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "exchange/alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  97 => 25,  93 => 24,  77 => 10,  70 => 9,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"base.html.twig\" %}

{% block title   %}

\tAlert

{% endblock %}

{% block body    %}
\t<div class=\"container\" style=\"width:500px;\">
\t\t<div class=\"table-container\">

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t<tr>

\t\t\t\t\t<th scope=\"col\">Curreny from</th>
\t\t\t\t\t<th scope=\"col\">Currency to</th>
\t\t\t\t\t<th scope=\"col\">Function</th>
\t\t\t\t\t<th scope=\"col\">Result</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t{% for data in alert %}

\t\t\t\t\t<tr>

\t\t\t\t\t\t<td>{{ data.cur1 }}</td>
\t\t\t\t\t\t<td>{{ data.cur2 }}</td>
\t\t\t\t\t\t<td>{{ data.func }}</td>
\t\t\t\t\t\t<td>{{ data.result }}</td>
\t\t\t\t\t\t<td><a href=\"/xe/exchange/deletealert/{{ data.id }}\" class=\"btn btn-danger\">Delete</a></td>


\t\t\t\t\t</tr>

\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t</div>
{% endblock %}

", "exchange/alert.html.twig", "/Users/ibrahym/Desktop/workspace/xe/templates/exchange/alert.html.twig");
    }
}
