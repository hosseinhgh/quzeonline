<?php

/* todo_delete.html.twig */
class __TwigTemplate_04df560a1b408fa2e6303d9dd51b4d3f84bacf9ca19625ba265844e34d0b2fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "todo_delete.html.twig", 1);
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
        echo "Confirm delete";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p><b>Are you sure you want to delete this student?</b></p>
    <button onclick=\"window.location.href='/'\">Cancel</button>
    ";
        // line 10
        echo "    <form method=\"post\"  style=\"display: inline;\">
        <input type=\"hidden\" name=\"confirmed\" value=\"true\">
        <input type=\"submit\" value=\"Delete\">
    </form>
    <div>
        <p>First Name: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : null), "task", array()), "html", null, true);
        echo "</p>
        <p>Last Name: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : null), "dueDate", array()), "html", null, true);
        echo "</p>
        <p>Email: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : null), "isDone", array()), "html", null, true);
        echo "</p>
        <p>Gender: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : null), "isDone", array()), "html", null, true);
        echo "</p>
        <p>Photo: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : null), "imagePath", array()), "html", null, true);
        echo "</p>
    </div>


";
    }

    public function getTemplateName()
    {
        return "todo_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  42 => 10,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Confirm delete{% endblock %}

{% block content %}
    <p><b>Are you sure you want to delete this student?</b></p>
    <button onclick=\"window.location.href='/'\">Cancel</button>
    {# action not requried since we're already on URL looking like
        action=\"/admin/products/delete/{{p.id}}\" #}
    <form method=\"post\"  style=\"display: inline;\">
        <input type=\"hidden\" name=\"confirmed\" value=\"true\">
        <input type=\"submit\" value=\"Delete\">
    </form>
    <div>
        <p>First Name: {{todo.task}}</p>
        <p>Last Name: {{todo.dueDate}}</p>
        <p>Email: {{todo.isDone}}</p>
        <p>Gender: {{todo.isDone}}</p>
        <p>Photo: {{todo.imagePath}}</p>
    </div>


{% endblock %}
", "todo_delete.html.twig", "C:\\xampp\\htdocs\\slimTodo\\templates\\todo_delete.html.twig");
    }
}
