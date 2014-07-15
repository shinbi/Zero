<?php

/* ZeroZeroBundle:Default:sidebar.html.twig */
class __TwigTemplate_55ded7c6b7da4f5771884fa8fb4337e4559bb198040d5ef87e8c2a093c292a1c extends Twig_Template
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
        return "ZeroZeroBundle:Default:sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  35 => 4,  32 => 3,  25 => 9,  23 => 2,  29 => 2,  26 => 2,  20 => 1,  87 => 16,  81 => 15,  71 => 9,  67 => 8,  64 => 7,  61 => 6,  55 => 5,  48 => 16,  46 => 15,  39 => 5,  36 => 9,  34 => 6,  24 => 1,  234 => 79,  228 => 77,  226 => 76,  221 => 73,  215 => 71,  212 => 70,  206 => 68,  203 => 67,  197 => 65,  194 => 64,  188 => 62,  186 => 61,  181 => 58,  175 => 56,  172 => 55,  166 => 53,  163 => 52,  157 => 50,  154 => 49,  148 => 47,  146 => 46,  141 => 43,  135 => 41,  132 => 40,  126 => 38,  123 => 37,  117 => 35,  115 => 34,  110 => 31,  104 => 29,  101 => 28,  95 => 26,  92 => 25,  86 => 23,  83 => 22,  77 => 11,  74 => 10,  68 => 17,  65 => 16,  59 => 14,  57 => 13,  50 => 17,  47 => 8,  44 => 7,  38 => 5,  30 => 5,);
    }
}
