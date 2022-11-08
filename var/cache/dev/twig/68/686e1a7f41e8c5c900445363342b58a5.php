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

/* exchange/view.html.twig */
class __TwigTemplate_608287a91b69df57fc7c33f22e060762 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exchange/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exchange/view.html.twig", 1);
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
\tview

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

\t\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t\t<th scope=\"col\">Currency</th>
\t\t\t\t\t<th scope=\"col\">Amount</th>
\t\t\t\t\t<th scope=\"col\">Delete</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 25
            echo "
\t\t\t\t<tr>

\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "currency", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "amount", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><a href=\"/xe/exchange/delete/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a></td>
\t\t\t\t</tr>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "exchange/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  97 => 25,  93 => 24,  77 => 10,  70 => 9,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"base.html.twig\" %}

{% block title   %}

\tview

{% endblock %}

{% block body    %}
\t<div class=\"container\" style=\"width:500px;\">
\t\t<div class=\"table-container\">

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t<tr>

\t\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t\t<th scope=\"col\">Currency</th>
\t\t\t\t\t<th scope=\"col\">Amount</th>
\t\t\t\t\t<th scope=\"col\">Delete</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t{% for info in data %}

\t\t\t\t<tr>

\t\t\t\t\t<td>{{ info.id }}</td>
\t\t\t\t\t<td>{{ info.currency }}</td>
\t\t\t\t\t<td>{{ info.amount }}</td>
\t\t\t\t\t<td><a href=\"/xe/exchange/delete/{{ info.id }}\" class=\"btn btn-danger\">Delete</a></td>
\t\t\t\t</tr>

\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t</div>
{% endblock %}

", "exchange/view.html.twig", "/Users/ibrahym/Desktop/workspace/xe/templates/exchange/view.html.twig");
    }
}
