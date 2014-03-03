<?php

/* ExperimentsBlogBundle:Index:category.html.twig */
class __TwigTemplate_319f0949c5bf930d304942d4ee6b1c76a457e5977cecdd00eef9656df1a519d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ExperimentsBlogBundle::layout.html.twig");

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ExperimentsBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        echo " Category N posts ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "jajlkha;lkh
";
    }

    public function getTemplateName()
    {
        return "ExperimentsBlogBundle:Index:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  35 => 7,  29 => 4,);
    }
}
