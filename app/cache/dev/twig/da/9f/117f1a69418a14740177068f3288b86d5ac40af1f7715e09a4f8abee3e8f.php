<?php

/* ZeroZeroBundle:Default:base.html.twig */
class __TwigTemplate_da9f117f1a69418a14740177068f3288b86d5ac40af1f7715e09a4f8abee3e8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('css', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 15
        $this->displayBlock('sidebar', $context, $blocks);
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Zero";
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        // line 7
        echo "        ";
        $this->env->loadTemplate("ZeroZeroBundle:Default:page_head_style.html.twig")->display($context);
        // line 8
        echo "    ";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        $this->env->loadTemplate("ZeroZeroBundle:Default:page_head_script.html.twig")->display($context);
        // line 11
        echo "    ";
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $this->env->loadTemplate("ZeroZeroBundle:Default:sidebar.html.twig")->display($context);
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ZeroZeroBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  81 => 15,  71 => 9,  67 => 8,  64 => 7,  61 => 6,  55 => 5,  48 => 16,  46 => 15,  39 => 12,  36 => 9,  34 => 6,  24 => 1,  234 => 79,  228 => 77,  226 => 76,  221 => 73,  215 => 71,  212 => 70,  206 => 68,  203 => 67,  197 => 65,  194 => 64,  188 => 62,  186 => 61,  181 => 58,  175 => 56,  172 => 55,  166 => 53,  163 => 52,  157 => 50,  154 => 49,  148 => 47,  146 => 46,  141 => 43,  135 => 41,  132 => 40,  126 => 38,  123 => 37,  117 => 35,  115 => 34,  110 => 31,  104 => 29,  101 => 28,  95 => 26,  92 => 25,  86 => 23,  83 => 22,  77 => 11,  74 => 10,  68 => 17,  65 => 16,  59 => 14,  57 => 13,  50 => 17,  47 => 8,  44 => 7,  38 => 5,  30 => 5,);
    }
}
