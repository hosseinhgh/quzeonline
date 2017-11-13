<?php

/* master.html.twig */
class __TwigTemplate_87a86df006dd2202e643b264156f3e573238b8b43873d898258852522591c01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <link href=\"./css/styles.css\" rel=\"stylesheet\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"test your knowledge\">
        <meta name=\"author\" content=\"roberto rubio\">
        <meta name=\"keywords\" content=\"test,online,affordable\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('headextra', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <div id=\"brand\">
                    <img src=\"images/horoLogo.png\" alt=\"\" />
                </div>
                <nav>
                    <ul>
                        <li><a href=\"index.php\">Home</a></li>
                        <li><a href=\"/addSubject\">Services</a></li>
                        <li><a href=\"about.php\">About</a></li>
                        
                    </ul>
                </nav>
            </div>
        </header><!--end of header-->
        <div id=\"centeredContent\">
            ";
        // line 31
        if ((isset($context["userSession"]) ? $context["userSession"] : null)) {
            // line 32
            echo "                <p>You're logged in as ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "name", array()), "html", null, true);
            echo ".
                    You may <a href=\"/logout\">logout</a></p>
            ";
        } else {
            // line 35
            echo "                <p>You're not logged in. You may <a href=\"/register\">Register</a>
                or <a href=\"/login\">Login</a>.</p>
            ";
        }
        // line 38
        echo "                
            ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "        </div>
        <footer>
            <p>Created by <a href=\"#\">WebSpawn</a>, Copyright Online Examination &copy; 2017</p>
        </footer>
    </body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Default";
    }

    // line 12
    public function block_headextra($context, array $blocks = array())
    {
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  94 => 12,  88 => 11,  79 => 40,  77 => 39,  74 => 38,  69 => 35,  62 => 32,  60 => 31,  40 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <link href=\"./css/styles.css\" rel=\"stylesheet\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"test your knowledge\">
        <meta name=\"author\" content=\"roberto rubio\">
        <meta name=\"keywords\" content=\"test,online,affordable\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}Default{% endblock %}</title>
        {% block headextra %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <div id=\"brand\">
                    <img src=\"images/horoLogo.png\" alt=\"\" />
                </div>
                <nav>
                    <ul>
                        <li><a href=\"index.php\">Home</a></li>
                        <li><a href=\"/addSubject\">Services</a></li>
                        <li><a href=\"about.php\">About</a></li>
                        
                    </ul>
                </nav>
            </div>
        </header><!--end of header-->
        <div id=\"centeredContent\">
            {% if userSession %}
                <p>You're logged in as {{ userSession.name }}.
                    You may <a href=\"/logout\">logout</a></p>
            {% else %}
                <p>You're not logged in. You may <a href=\"/register\">Register</a>
                or <a href=\"/login\">Login</a>.</p>
            {% endif %}
                
            {% block content %}{% endblock %}
        </div>
        <footer>
            <p>Created by <a href=\"#\">WebSpawn</a>, Copyright Online Examination &copy; 2017</p>
        </footer>
    </body>
</html>", "master.html.twig", "C:\\xampp\\htdocs\\slimTodo\\templates\\master.html.twig");
    }
}
