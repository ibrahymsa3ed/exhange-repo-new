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

/* exchange/today.html.twig */
class __TwigTemplate_791753d4c298f47ee0188d2d57fb8e51 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exchange/today.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exchange/today.html.twig", 1);
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
\ttoday

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

\t\t\t<table id=\"tbstyle\">
\t\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Currency</th>
\t\t\t\t\t<th>rates</th>
\t\t\t\t</tr>

\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["curr"] => $context["rate"]) {
            // line 21
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new RuntimeError('Variable "currencies" does not exist.', 22, $this->source); })()), $context["curr"], [], "array", false, false, false, 22), "html", null, true);
            echo " </td>
\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $context["rate"], "html", null, true);
            echo "  </td>


\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['curr'], $context['rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "exchange/today.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 28,  100 => 23,  96 => 22,  93 => 21,  89 => 20,  77 => 10,  70 => 9,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"base.html.twig\" %}

{% block title   %}

\ttoday

{% endblock %}

{% block body    %}
\t<div class=\"container\" style=\"width:500px;\">
\t\t<div class=\"table-container\">

\t\t\t<table id=\"tbstyle\">
\t\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Currency</th>
\t\t\t\t\t<th>rates</th>
\t\t\t\t</tr>

\t\t\t\t{% for curr,rate in currency %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ currencies[curr] }} </td>
\t\t\t\t\t\t<td>{{ rate }}  </td>


\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t</div>
{% endblock %}

", "exchange/today.html.twig", "/Users/ibrahym/Desktop/workspace/xe/templates/exchange/today.html.twig");
    }
}
