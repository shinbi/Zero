<?php

/* ZeroZeroBundle:Default:characters.html.twig */
class __TwigTemplate_8a0dc4cda836b6b56d156d46b66fb54328eac494e390c9252ca4a2abf1de2883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ZeroZeroBundle:Default:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZeroZeroBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Personnages";
    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        $this->env->loadTemplate("ZeroZeroBundle:Default:sidebar.html.twig")->display($context);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Liste des personnages</h1>
    Cette section peut contenir des spoils. Il est conseillé d'avoir lu le roman avant d'y accéder.
    <form>
        Trier par : <input type=\"radio\" name=\"sort\" value=\"importance\" /> importance
        <input type=\"radio\" name=\"sort\" value=\"nom\" /> nom
        <input type=\"radio\" name=\"sort\" value=\"taille\" /> taille
        <input type=\"radio\" name=\"sort\" value=\"age\" /> age
    </form>
    <ul>
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnages"]) ? $context["personnages"] : $this->getContext($context, "personnages")));
        foreach ($context['_seq'] as $context["_key"] => $context["personnage"]) {
            // line 18
            echo "
       <li><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zero_zero_show_characters", array("id" => $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "getId", array(), "method"))), "html", null, true);
            echo "\">
               <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/zerozero/images/" . $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "getId", array(), "method")) . ".png")), "html", null, true);
            echo "\" width=\"150\"/>
           </a>
            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zero_zero_show_characters", array("id" => $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "getId", array(), "method"))), "html", null, true);
            echo "\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "getNom", array(), "method"), "html", null, true);
            echo "
            </a><br />
                ";
            // line 25
            if ($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "principal")) {
                // line 26
                echo "                    Personnage principal
                ";
            } else {
                // line 28
                echo "                    Personnage secondaire
                ";
            }
            // line 30
            echo "       </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "ZeroZeroBundle:Default:characters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  91 => 30,  87 => 28,  83 => 26,  81 => 25,  76 => 23,  72 => 22,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
