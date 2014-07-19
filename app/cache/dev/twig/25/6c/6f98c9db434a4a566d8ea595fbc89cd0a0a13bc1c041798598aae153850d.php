<?php

/* ZeroZeroBundle:Site:parts/sidebar.html.twig */
class __TwigTemplate_256c6f98c9db434a4a566d8ea595fbc89cd0a0a13bc1c041798598aae153850d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sidebar\">
    ";
        // line 2
        $this->displayBlock('sidebar', $context, $blocks);
        // line 9
        echo "</div>";
    }

    // line 2
    public function block_sidebar($context, array $blocks = array())
    {
        // line 3
        echo "        <ul>
            <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("zero_zero_homepage");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("zero_zero_characters");
        echo "\">Personnages</a></li>
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("zero_zero_books");
        echo "\">Romans</a></li>
        </ul>
    ";
    }

    public function getTemplateName()
    {
        return "ZeroZeroBundle:Site:parts/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  35 => 4,  32 => 3,  25 => 9,  23 => 2,  29 => 2,  26 => 2,  20 => 1,  77 => 11,  74 => 10,  71 => 9,  64 => 7,  61 => 6,  55 => 5,  50 => 17,  48 => 16,  46 => 15,  39 => 5,  34 => 6,  24 => 1,  98 => 32,  91 => 30,  87 => 16,  83 => 26,  81 => 15,  76 => 23,  72 => 22,  67 => 8,  63 => 19,  60 => 18,  56 => 17,  45 => 8,  42 => 7,  36 => 9,  30 => 5,);
    }
}
