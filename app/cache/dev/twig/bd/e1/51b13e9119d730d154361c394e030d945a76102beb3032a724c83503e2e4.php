<?php

/* ZeroZeroBundle:Site:parts/page_head_style.html.twig */
class __TwigTemplate_bde151b13e9119d730d154361c394e030d945a76102beb3032a724c83503e2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "    <link href=\"http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zerozero/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    public function getTemplateName()
    {
        return "ZeroZeroBundle:Site:parts/page_head_style.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,  77 => 11,  74 => 10,  71 => 9,  64 => 7,  61 => 6,  55 => 5,  50 => 17,  48 => 16,  46 => 15,  39 => 12,  34 => 6,  24 => 1,  98 => 32,  91 => 30,  87 => 16,  83 => 26,  81 => 15,  76 => 23,  72 => 22,  67 => 8,  63 => 19,  60 => 18,  56 => 17,  45 => 8,  42 => 7,  36 => 9,  30 => 5,);
    }
}
