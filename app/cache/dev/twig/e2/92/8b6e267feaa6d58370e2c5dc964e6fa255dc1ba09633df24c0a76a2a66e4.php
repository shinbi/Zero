<?php

/* ZeroZeroBundle:Site:viewCharacter.html.twig */
class __TwigTemplate_e2928b6e267feaa6d58370e2c5dc964e6fa255dc1ba09633df24c0a76a2a66e4 extends Twig_Template
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
        echo "Personnages : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "getNom", array(), "method"), "html", null, true);
        echo ")";
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
        echo "    <p>
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/zerozero/images/" . $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "getId", array(), "method")) . ".png")), "html", null, true);
        echo "\" />
    </p>
    <div id=\"profil_title\"><h2>Profil</h2></div>
    <div class=\"profil\">
        ";
        // line 13
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "nom")))) {
            // line 14
            echo "            <strong>Nom :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "nom"), "html", null, true);
            echo "<br />
        ";
        }
        // line 16
        echo "        ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "prononciation")))) {
            // line 17
            echo "            <strong>Prononciation :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "prononciation"), "html", null, true);
            echo "<br />
        ";
        }
        // line 19
        echo "        ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "signification")))) {
            // line 20
            echo "            <strong>Signification :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "signification"), "html", null, true);
            echo "<br />
        ";
        }
        // line 22
        echo "        ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "age")))) {
            // line 23
            echo "            <strong>Age :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "age"), "html", null, true);
            echo "<br />
        ";
        }
        // line 25
        echo "        ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "taille")))) {
            // line 26
            echo "            <strong>Taille :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "taille"), "html", null, true);
            echo "<br />
        ";
        }
        // line 28
        echo "        ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "anniversaire")))) {
            // line 29
            echo "            <strong>Anniversaire :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "anniversaire"), "html", null, true);
            echo "<br />
        ";
        }
        // line 31
        echo "    </div>
    <div id=\"physique_title\"><h2>Physique</h2></div>
    <div class=\"physique\">
        ";
        // line 34
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "yeux")))) {
            // line 35
            echo "            <strong>Yeux :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "yeux"), "html", null, true);
            echo "<br />
        ";
        }
        // line 37
        echo "        ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "cheveux")))) {
            // line 38
            echo "            <strong>Cheveux :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "cheveux"), "html", null, true);
            echo "<br />
        ";
        }
        // line 40
        echo "        ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "poils")))) {
            // line 41
            echo "            <strong>Poils :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "poils"), "html", null, true);
            echo "<br />
        ";
        }
        // line 43
        echo "    </div>
    <div id=\"personnalite_title\"><h2>Personnalité</h2></div>
    <div class=\"personnalite\">
    ";
        // line 46
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "caractere")))) {
            // line 47
            echo "        <strong>Caractère :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "caractere"), "html", null, true);
            echo "<br />
    ";
        }
        // line 49
        echo "    ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "qualites")))) {
            // line 50
            echo "        <strong>Qualités :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "qualites"), "html", null, true);
            echo "<br />
    ";
        }
        // line 52
        echo "    ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "defauts")))) {
            // line 53
            echo "        <strong>Défauts :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "defauts"), "html", null, true);
            echo "<br />
    ";
        }
        // line 55
        echo "    ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "ambitions")))) {
            // line 56
            echo "        <strong>Ambitions :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "ambitions"), "html", null, true);
            echo "<br />
    ";
        }
        // line 58
        echo "    </div>
    <div id=\"competences_title\"><h2>Compétences</h2></div>
    <div class=\"competences\">
    ";
        // line 61
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "statut")))) {
            // line 62
            echo "        <strong>Statut :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "statut"), "html", null, true);
            echo "<br />
    ";
        }
        // line 64
        echo "    ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "getMatiereForte", array(), "method")))) {
            // line 65
            echo "        <strong>Matières fortes :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "getMatiereForte", array(), "method"), "html", null, true);
            echo "<br />
    ";
        }
        // line 67
        echo "    ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "getMatiereAvecDesDifficultes", array(), "method")))) {
            // line 68
            echo "        <strong>Matières avec des difficultés :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "getMatiereAvecDesDifficultes", array(), "method"), "html", null, true);
            echo "<br />
    ";
        }
        // line 70
        echo "    ";
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "aptitude")))) {
            // line 71
            echo "        <strong>Aptitudes :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "aptitude"), "html", null, true);
            echo "<br />
    ";
        }
        // line 73
        echo "    </div>
    <div id=\"histoire_title\"> <h2>Histoire</h2></div>
    <div class=\"histoire\">
    ";
        // line 76
        if ((!twig_test_empty($this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "histoire")))) {
            // line 77
            echo "        <strong>Histoire :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnage"]) ? $context["personnage"] : $this->getContext($context, "personnage")), "histoire"), "html", null, true);
            echo "<br />
    ";
        }
        // line 79
        echo "    </div>








";
    }

    public function getTemplateName()
    {
        return "ZeroZeroBundle:Site:viewCharacter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 79,  228 => 77,  226 => 76,  221 => 73,  215 => 71,  212 => 70,  206 => 68,  203 => 67,  197 => 65,  194 => 64,  188 => 62,  186 => 61,  181 => 58,  175 => 56,  172 => 55,  166 => 53,  163 => 52,  157 => 50,  154 => 49,  148 => 47,  146 => 46,  141 => 43,  135 => 41,  132 => 40,  126 => 38,  123 => 37,  117 => 35,  115 => 34,  110 => 31,  104 => 29,  101 => 28,  95 => 26,  92 => 25,  86 => 23,  83 => 22,  77 => 20,  74 => 19,  68 => 17,  65 => 16,  59 => 14,  57 => 13,  50 => 9,  47 => 8,  44 => 7,  38 => 5,  30 => 3,);
    }
}
