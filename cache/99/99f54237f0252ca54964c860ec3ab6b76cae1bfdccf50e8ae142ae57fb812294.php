<?php

/* todo_addeditSubject.html.twig */
class __TwigTemplate_79de76067b3885fa301126658520e792b42026fe38ffdc335880df5998635e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "todo_addeditSubject.html.twig", 1);
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
        echo "Add Subject";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form method=\"post\" enctype=\"multipart/form-data\">
        Name: <input type=\"text\" name=\"name\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "name", array()), "html", null, true);
        echo "\"><br>
        Description: <input type=\"text\" name=\"description\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "description", array()), "html", null, true);
        echo "\"><br>
        
        <input type=\"submit\" value=\"Add Subject\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "todo_addeditSubject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Add Subject{% endblock %}

{% block content %}
    <form method=\"post\" enctype=\"multipart/form-data\">
        Name: <input type=\"text\" name=\"name\" value=\"{{v.name}}\"><br>
        Description: <input type=\"text\" name=\"description\" value=\"{{v.description}}\"><br>
        
        <input type=\"submit\" value=\"Add Subject\">
    </form>
{% endblock %}", "todo_addeditSubject.html.twig", "C:\\xampp\\htdocs\\slimTodo\\templates\\todo_addeditSubject.html.twig");
    }
}
