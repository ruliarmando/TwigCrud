<?php

/* base.html */
class __TwigTemplate_8944b57466f08564caa53a1988261ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"rully ramanda\">

    <link href=\"";
        // line 10
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/assets/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link href=\"";
        // line 17
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/assets/bootstrap/css/bootstrap-responsive.css\" rel=\"stylesheet\">
</head>

<body>

<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"";
        // line 30
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "\">Twig CRUD</a>
            <div class=\"nav-collapse collapse\">
                <ul class=\"nav\">
                    <li><a href=\"";
        // line 33
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("article")), "html", null, true);
        echo "\">CRUD</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">

    ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "
    <footer>
        <p>&copy; Rully Ramanda 2013</p>
    </footer>

</div>

<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 52
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/assets/jquery.js\"></script>
<script src=\"";
        // line 53
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/assets/bootstrap/js/bootstrap.min.js\"></script>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  113 => 5,  104 => 53,  99 => 52,  89 => 44,  87 => 43,  75 => 34,  70 => 33,  63 => 30,  46 => 17,  35 => 10,  27 => 5,  21 => 1,  41 => 6,  38 => 5,  29 => 3,);
    }
}
