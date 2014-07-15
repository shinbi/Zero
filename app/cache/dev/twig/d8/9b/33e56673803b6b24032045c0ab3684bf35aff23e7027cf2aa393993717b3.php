<?php

/* ZeroZeroBundle:Default:page_head_style.html.twig */
class __TwigTemplate_d89b33e56673803b6b24032045c0ab3684bf35aff23e7027cf2aa393993717b3 extends Twig_Template
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
        return "ZeroZeroBundle:Default:page_head_style.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
    }
}
