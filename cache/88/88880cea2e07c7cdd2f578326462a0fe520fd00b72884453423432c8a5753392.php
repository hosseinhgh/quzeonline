<?php

/* todo_deleteSubject.html.twig */
class __TwigTemplate_dbbf05f1636678c4d5480d24c53112e5f0c9031854232e1cea16771bbab09410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "todo_deleteSubject.html.twig", 1);
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
        echo "    <p><b>Are you sure you want to delete this subject?</b></p>
    <button onclick=\"window.location.href='/'\">Cancel</button>
    ";
        // line 10
        echo "    <form method=\"post\"  style=\"display: inline;\">
        <input type=\"hidden\" name=\"confirmed\" value=\"true\">
        <input type=\"submit\" value=\"Delete\">
    </form>
    <div>
        <p>Name: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subject"]) ? $context["subject"] : null), "task", array()), "html", null, true);
        echo "</p>
        <p>Description: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subject"]) ? $context["subject"] : null), "dueDate", array()), "html", null, true);
        echo "</p>
        
    </div>


";
    }

    public function getTemplateName()
    {
        return "todo_deleteSubject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  49 => 15,  42 => 10,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
    <p><b>Are you sure you want to delete this subject?</b></p>
    <button onclick=\"window.location.href='/'\">Cancel</button>
    {# action not requried since we're already on URL looking like
        action=\"/admin/products/delete/{{p.id}}\" #}
    <form method=\"post\"  style=\"display: inline;\">
        <input type=\"hidden\" name=\"confirmed\" value=\"true\">
        <input type=\"submit\" value=\"Delete\">
    </form>
    <div>
        <p>Name: {{subject.task}}</p>
        <p>Description: {{subject.dueDate}}</p>
        
    </div>


{% endblock %}
", "todo_deleteSubject.html.twig", "C:\\xampp\\htdocs\\slimTodo\\templates\\todo_deleteSubject.html.twig");
    }
}
