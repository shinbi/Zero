<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_5a91a3f5267ffaea7d81ec696865009ceab3bb40e44907ce20d7e7953b281131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 79,  228 => 77,  226 => 76,  215 => 71,  212 => 70,  206 => 68,  197 => 65,  194 => 64,  188 => 62,  186 => 61,  181 => 58,  175 => 56,  172 => 55,  148 => 47,  146 => 46,  126 => 38,  110 => 31,  104 => 29,  65 => 16,  23 => 2,  20 => 1,  76 => 23,  81 => 25,  77 => 20,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 40,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 41,  119 => 42,  102 => 32,  71 => 9,  67 => 20,  63 => 19,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 17,  56 => 17,  87 => 28,  21 => 2,  26 => 2,  93 => 28,  88 => 6,  78 => 21,  46 => 15,  27 => 4,  44 => 7,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 53,  163 => 52,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 35,  105 => 40,  91 => 30,  62 => 23,  49 => 19,  24 => 1,  25 => 9,  19 => 1,  79 => 18,  72 => 22,  69 => 25,  47 => 8,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 50,  145 => 46,  139 => 45,  131 => 52,  123 => 37,  120 => 40,  115 => 34,  111 => 37,  108 => 36,  101 => 28,  98 => 32,  96 => 31,  83 => 22,  74 => 19,  66 => 15,  55 => 5,  52 => 10,  50 => 9,  43 => 7,  41 => 7,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 67,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 49,  149 => 51,  147 => 58,  144 => 49,  141 => 43,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 26,  92 => 25,  86 => 23,  82 => 22,  80 => 19,  73 => 19,  64 => 7,  60 => 18,  57 => 12,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 3,);
    }
}
