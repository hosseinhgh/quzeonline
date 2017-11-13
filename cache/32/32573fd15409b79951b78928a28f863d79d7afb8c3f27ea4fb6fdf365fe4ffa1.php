<?php

/* summaryQuestions.html.twig */
class __TwigTemplate_d8246f23716fd2df55a21460fb2824e15d3da789c55fad9cd6de8b64bf28c1c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>PHP QUIZZER</title>
        <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1>php quizzer</h1>
            </div>
        </header>
        <main>
            <div class=\"container\">
                <h2>test your php knowledge</h2>
                <p>this is a choice quizz to test your knowledge</p>
                <ul>
                    <li><strong>number of question: </strong>\$total</li>
                    <li><strong>Type: </strong>5</li>
                    <li><strong>Estimated time: </strong><?php echo \$total * .5 ; ?> min</li>
                </ul>
                <a href=\"question.php?num=1\" class=\"start\">Start quizz</a>
            </div>
        </main>
        <footer>
             <div class=\"container\">
                 <h2>copyright &copy; 2014, php quizzer</h2>
            </div>
        </footer>
        <?php
        // put your code here
        ?>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "summaryQuestions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>PHP QUIZZER</title>
        <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1>php quizzer</h1>
            </div>
        </header>
        <main>
            <div class=\"container\">
                <h2>test your php knowledge</h2>
                <p>this is a choice quizz to test your knowledge</p>
                <ul>
                    <li><strong>number of question: </strong>\$total</li>
                    <li><strong>Type: </strong>5</li>
                    <li><strong>Estimated time: </strong><?php echo \$total * .5 ; ?> min</li>
                </ul>
                <a href=\"question.php?num=1\" class=\"start\">Start quizz</a>
            </div>
        </main>
        <footer>
             <div class=\"container\">
                 <h2>copyright &copy; 2014, php quizzer</h2>
            </div>
        </footer>
        <?php
        // put your code here
        ?>
    </body>
</html>", "summaryQuestions.html.twig", "C:\\xampp\\htdocs\\slimTodo\\templates\\summaryQuestions.html.twig");
    }
}
