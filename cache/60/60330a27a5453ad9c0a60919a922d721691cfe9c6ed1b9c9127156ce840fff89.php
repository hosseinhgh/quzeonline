<?php

/* login.html.twig */
class __TwigTemplate_3fcd2ffa7ce8d183f52ff72e39155077eb20417b958de82a602bdbe789ca920d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
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
        echo "LOGIN";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "        <p>Login invalid. Try again or <a href=\"/register\">register</a>.</p>
    ";
        }
        // line 9
        echo "
    <form method=\"post\">
        email:<input type=\"email\" name=\"email\"><br>
        password:<input type=\"password\" name=\"pass\"><br>
        <input type=\"submit\" value=\"Login\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}LOGIN{% endblock %}

{% block content %}
    {% if error %}
        <p>Login invalid. Try again or <a href=\"/register\">register</a>.</p>
    {% endif %}

    <form method=\"post\">
        email:<input type=\"email\" name=\"email\"><br>
        password:<input type=\"password\" name=\"pass\"><br>
        <input type=\"submit\" value=\"Login\">
    </form>

{% endblock %}", "login.html.twig", "C:\\xampp\\htdocs\\slimTodo\\templates\\login.html.twig");
    }
}
