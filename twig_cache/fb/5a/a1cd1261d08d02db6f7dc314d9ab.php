<?php

/* index.html */
class __TwigTemplate_fb5aa1cd1261d08d02db6f7dc314d9ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        if (isset($context["pageTitle"])) { $_pageTitle_ = $context["pageTitle"]; } else { $_pageTitle_ = null; }
        echo twig_escape_filter($this->env, $_pageTitle_, "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"hero-unit\">
        <h1>Twig CRUD</h1>
        <p>
            Aplikasi ini bertujuan untuk menunjukkan cara penggunaan template engine Twig dengan native PHP.
        </p>
    </div>
    <hr>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  38 => 5,  29 => 3,);
    }
}
