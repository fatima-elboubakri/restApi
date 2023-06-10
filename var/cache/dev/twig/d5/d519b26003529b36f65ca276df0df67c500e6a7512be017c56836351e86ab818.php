<?php

/* :document:show.html.twig */
class __TwigTemplate_9a1a1837f3b8fc38801082a8be389b62de6228b16a158c99572e684cf6c951bf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":document:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":document:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Document</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new Twig_Error_Runtime('Variable "document" does not exist.', 10, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomdocument</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new Twig_Error_Runtime('Variable "document" does not exist.', 14, $this->source); })()), "nomDocument", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomdest</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new Twig_Error_Runtime('Variable "document" does not exist.', 18, $this->source); })()), "nomDest", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedoc</th>
                <td>";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new Twig_Error_Runtime('Variable "document" does not exist.', 22, $this->source); })()), "dateDoc", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new Twig_Error_Runtime('Variable "document" does not exist.', 22, $this->source); })()), "dateDoc", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Objetdoc</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new Twig_Error_Runtime('Variable "document" does not exist.', 26, $this->source); })()), "objetDoc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenudoc</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new Twig_Error_Runtime('Variable "document" does not exist.', 30, $this->source); })()), "contenuDoc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Orandoc</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new Twig_Error_Runtime('Variable "document" does not exist.', 34, $this->source); })()), "oranDoc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Logodoc</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new Twig_Error_Runtime('Variable "document" does not exist.', 38, $this->source); })()), "logoDoc", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new Twig_Error_Runtime('Variable "document" does not exist.', 48, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 51, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":document:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  125 => 51,  119 => 48,  113 => 45,  103 => 38,  96 => 34,  89 => 30,  82 => 26,  73 => 22,  66 => 18,  59 => 14,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Document</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ document.id }}</td>
            </tr>
            <tr>
                <th>Nomdocument</th>
                <td>{{ document.nomDocument }}</td>
            </tr>
            <tr>
                <th>Nomdest</th>
                <td>{{ document.nomDest }}</td>
            </tr>
            <tr>
                <th>Datedoc</th>
                <td>{% if document.dateDoc %}{{ document.dateDoc|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Objetdoc</th>
                <td>{{ document.objetDoc }}</td>
            </tr>
            <tr>
                <th>Contenudoc</th>
                <td>{{ document.contenuDoc }}</td>
            </tr>
            <tr>
                <th>Orandoc</th>
                <td>{{ document.oranDoc }}</td>
            </tr>
            <tr>
                <th>Logodoc</th>
                <td>{{ document.logoDoc }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('document_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('document_edit', { 'id': document.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":document:show.html.twig", "C:\\xampp\\htdocs\\rest_api\\app/Resources\\views/document/show.html.twig");
    }
}
