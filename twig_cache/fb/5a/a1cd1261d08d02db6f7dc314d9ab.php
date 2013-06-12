<?php

/* index.twig */
class __TwigTemplate_fb5aa1cd1261d08d02db6f7dc314d9ab extends Twig_Template
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
<html>
<head>
    <title>";
        // line 4
        if (isset($context["pageTitle"])) { $_pageTitle_ = $context["pageTitle"]; } else { $_pageTitle_ = null; }
        echo twig_escape_filter($this->env, $_pageTitle_, "html", null, true);
        echo "</title>
</head>
<body>
    hello ";
        // line 7
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  24 => 4,  19 => 1,);
    }
}
