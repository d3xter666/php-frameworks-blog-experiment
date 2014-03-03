<?php

/* ExperimentsBlogBundle::admin-layout.html.twig */
class __TwigTemplate_913d0870c99cd2531bd51b146933084abe6c5c53c3161f22199f9bd49aa778c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'content' => array($this, 'block_content'),
            'adminFoot' => array($this, 'block_adminFoot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\">
<!--<![endif]-->

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 15
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/experimentsblog/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/experimentsblog/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/experimentsblog/css/styles.css"), "html", null, true);
        echo "\">
</head>

<body>
    <!--[if lt IE 7]>
<p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade
    your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

    <div id=\"content\">
        ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "    </div>

    ";
        // line 36
        $this->displayBlock('adminFoot', $context, $blocks);
        // line 48
        echo "</body>

</html>";
    }

    // line 15
    public function block_pageTitle($context, array $blocks = array())
    {
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        echo " 
        ";
    }

    // line 36
    public function block_adminFoot($context, array $blocks = array())
    {
        echo " 
    <nav class=\"navbar navbar-default navbar-fixed-bottom\" role=\"navigation\">
        <ul>
            <li class=\"btn navbar-btn\">
                <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("experiments_blog_homepage");
        echo "\">Go To Frontend</a>
            </li>
            <li class=\"btn navbar-btn\">
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("experiments_blog_homepage");
        echo "\">Logout</a>
            </li>
        </ul>
    </nav>
    ";
    }

    public function getTemplateName()
    {
        return "ExperimentsBlogBundle::admin-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 43,  101 => 40,  93 => 36,  86 => 32,  81 => 15,  75 => 48,  73 => 36,  69 => 34,  67 => 32,  53 => 21,  49 => 20,  45 => 19,  38 => 15,  22 => 1,);
    }
}
