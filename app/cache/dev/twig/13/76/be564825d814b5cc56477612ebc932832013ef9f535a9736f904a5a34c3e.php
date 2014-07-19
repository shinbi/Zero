<?php

/* ZeroZeroBundle:Site:base.html.twig */
class __TwigTemplate_1376be564825d814b5cc56477612ebc932832013ef9f535a9736f904a5a34c3e extends Twig_Template
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
        $this->env->loadTemplate("ZeroZeroBundle:Site:parts/page_head_style.html.twig")->display($context);
        // line 8
        echo "    ";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        $this->env->loadTemplate("ZeroZeroBundle:Site:parts/page_head_script.html.twig")->display($context);
        // line 11
        echo "    ";
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $this->env->loadTemplate("ZeroZeroBundle:Site:parts/sidebar.html.twig")->display($context);
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ZeroZeroBundle:Site:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  74 => 10,  71 => 9,  64 => 7,  61 => 6,  55 => 5,  50 => 17,  48 => 16,  46 => 15,  39 => 12,  34 => 6,  24 => 1,  98 => 32,  91 => 30,  87 => 16,  83 => 26,  81 => 15,  76 => 23,  72 => 22,  67 => 8,  63 => 19,  60 => 18,  56 => 17,  45 => 8,  42 => 7,  36 => 9,  30 => 5,);
    }
}
