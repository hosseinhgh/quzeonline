<?php

/* listSubject.html.twig */
class __TwigTemplate_3f9b5f3e87493c052764a9da40361137af648f0675ea78e460db3a52ae7bd941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "listSubject.html.twig", 1);
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
        echo "subject list";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["userSession"]) ? $context["userSession"] : null)) {
            // line 7
            echo "        <table border=\"1\">
            
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subjectList"]) ? $context["subjectList"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 17
                echo "                <tr>
                    <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "description", array()), "html", null, true);
                echo "</td>
                    
                    <td>
                        <a href=\"/edit/";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
                echo "\">EDIT</a>
                        <a href=\"/deleteSubject/";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
                echo "\">DELETE</a>
                    </td>
                    
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            
        </table>
    ";
        } else {
            // line 32
            echo "        <p>you must register or login to view data</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "listSubject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  109 => 29,  90 => 24,  86 => 23,  80 => 20,  76 => 19,  72 => 18,  69 => 17,  52 => 16,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}subject list{% endblock %}

{% block content %}
    {% if userSession %}
        <table border=\"1\">
            
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            
            {% for t in subjectList %}
                <tr>
                    <td>{{loop.index}}</td>
                    <td>{{t.name}}</td>
                    <td>{{t.description}}</td>
                    
                    <td>
                        <a href=\"/edit/{{t.id}}\">EDIT</a>
                        <a href=\"/deleteSubject/{{t.id}}\">DELETE</a>
                    </td>
                    
                </tr>
            {% endfor %}
            
        </table>
    {% else %}
        <p>you must register or login to view data</p>
    {% endif %}
{% endblock %}", "listSubject.html.twig", "C:\\xampp\\htdocs\\slimTodo\\templates\\listSubject.html.twig");
    }
}
