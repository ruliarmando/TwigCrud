<?php

/* article/index.twig */
class __TwigTemplate_8768cc87bcae713ef7cf30e010d9640a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
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
        echo "    <table class=\"table table-condensed table-striped table-bordered\" id=\"datagrid\">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Summary</th>
                <th>Author</th>
                <th>Timestamp</th>
                <th>Viewed</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 18
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_articles_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 19
            echo "                <tr>
                    <td>";
            // line 20
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_a_, "title"), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_a_, "summary"), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_a_, "author"), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_a_, "timestamp"), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_a_, "view"), "html", null, true);
            echo " times</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "        </tbody>
    </table>
    <hr>
";
    }

    public function getTemplateName()
    {
        return "article/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 28,  101 => 25,  96 => 24,  91 => 23,  86 => 22,  81 => 21,  76 => 20,  73 => 19,  55 => 18,  41 => 6,  38 => 5,  29 => 3,);
    }
}
