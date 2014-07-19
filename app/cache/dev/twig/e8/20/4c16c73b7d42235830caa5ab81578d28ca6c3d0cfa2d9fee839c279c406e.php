<?php

/* ZeroZeroBundle:Site:books.html.twig */
class __TwigTemplate_e8204c16c73b7d42235830caa5ab81578d28ca6c3d0cfa2d9fee839c279c406e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ZeroZeroBundle:Site:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZeroZeroBundle:Site:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Romans";
    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        $this->env->loadTemplate("ZeroZeroBundle:Site:parts/sidebar.html.twig")->display($context);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <ul>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "titre"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "ZeroZeroBundle:Site:books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  52 => 10,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
