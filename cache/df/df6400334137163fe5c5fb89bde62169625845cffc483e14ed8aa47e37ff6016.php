<?php

/* todo_addedit.html.twig */
class __TwigTemplate_48e0a97bfa5af125472eb682a1f9b8cd6ab5d5143acae06a0dfa7e6c3936eecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "todo_addedit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Add student";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form method=\"post\" enctype=\"multipart/form-data\">
        First Name: <input type=\"text\" name=\"firstName\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "firstName", array()), "html", null, true);
        echo "\"><br>
        Last Name: <input type=\"text\" name=\"lastName\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "lastName", array()), "html", null, true);
        echo "\"><br>
        Email: <input type=\"email\" name=\"email\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "email", array()), "html", null, true);
        echo "\"><br>
        Gender: <input type=\"checkbox\" name=\"gender\" ";
        // line 10
        echo "><br>
        Image: <input type=\"file\" name=\"image\"><br>
        ";
        // line 12
        if ($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "imagePath", array())) {
            // line 13
            echo "            <img width=\"50\" src=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "imagePath", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 15
        echo "        <input type=\"submit\" value=\"add student\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "todo_addedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  59 => 13,  57 => 12,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}

{% block title %}Add student{% endblock %}

{% block content %}
    <form method=\"post\" enctype=\"multipart/form-data\">
        First Name: <input type=\"text\" name=\"firstName\" value=\"{{v.firstName}}\"><br>
        Last Name: <input type=\"text\" name=\"lastName\" value=\"{{v.lastName}}\"><br>
        Email: <input type=\"email\" name=\"email\" value=\"{{v.email}}\"><br>
        Gender: <input type=\"checkbox\" name=\"gender\" {# TODO checked #}><br>
        Image: <input type=\"file\" name=\"image\"><br>
        {% if v.imagePath %}
            <img width=\"50\" src=\"/{{v.imagePath}}\">
        {% endif %}
        <input type=\"submit\" value=\"add student\">
    </form>
{% endblock %}
", "todo_addedit.html.twig", "C:\\xampp\\htdocs\\slimTodo\\templates\\todo_addedit.html.twig");
    }
}
