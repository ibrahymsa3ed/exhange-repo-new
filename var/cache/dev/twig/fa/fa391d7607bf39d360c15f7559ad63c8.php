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

/* exchange/home.html.twig */
class __TwigTemplate_b6fb3ed3c8a1ab657a98d964bab0735b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exchange/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exchange/home.html.twig", 1);
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
        echo "\t";
        if ((twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            echo "
\t\t<button type=\"button\" class=\"btn btn-danger\"  data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
\t\t\tNotifications <span class=\"badge bg-secondary\">";
            // line 13
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 13, $this->source); })())), "html", null, true);
            echo "</span>
\t\t</button>
\t";
        }
        // line 16
        echo "
\t<hr>
\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allAmounts"]) || array_key_exists("allAmounts", $context) ? $context["allAmounts"] : (function () { throw new RuntimeError('Variable "allAmounts" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["currency"]) {
            // line 19
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<label for=\"inputCity\" class=\"form-label\">Amount in ";
            // line 21
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputCity\" disabled value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "amount", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<label for=\"inputCity\" class=\"form-label\">Amount in LE</label>
\t\t\t\t<input type=\"text\" disabled class=\"form-control\" id=\"inputCity\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "egpValue", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "






\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">ALERT</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 47
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t<hr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "exchange/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 50,  145 => 47,  141 => 46,  123 => 30,  113 => 26,  106 => 22,  102 => 21,  98 => 19,  94 => 18,  90 => 16,  84 => 13,  80 => 11,  77 => 10,  70 => 9,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}

\ttoday

{% endblock %}

{% block body %}
\t{% if messages|length > 0 %}

\t\t<button type=\"button\" class=\"btn btn-danger\"  data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
\t\t\tNotifications <span class=\"badge bg-secondary\">{{ messages|length }}</span>
\t\t</button>
\t{% endif %}

\t<hr>
\t{% for key, currency in allAmounts %}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<label for=\"inputCity\" class=\"form-label\">Amount in {{ key }}</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputCity\" disabled value=\"{{ currency.amount }}\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<label for=\"inputCity\" class=\"form-label\">Amount in LE</label>
\t\t\t\t<input type=\"text\" disabled class=\"form-control\" id=\"inputCity\" value=\"{{ currency.egpValue }}\">
\t\t\t</div>
\t\t</div>
\t{% endfor %}







\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">ALERT</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t<hr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", "exchange/home.html.twig", "/Users/ibrahym/Desktop/workspace/xe/templates/exchange/home.html.twig");
    }
}
