<?php

/* ExperimentsBlogBundle::layout.html.twig */
class __TwigTemplate_052303d6489050cb98b4735065d0633f9e5b7d275e19ad2394433ed62a25081a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'content' => array($this, 'block_content'),
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

    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <ul>
            <li class=\"btn navbar-btn\">
                <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("experiments_blog_homepage");
        echo "\">Home</a>
            </li>
            <li class=\"btn navbar-btn\">
                <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("_admin_login");
        echo "\">Administration</a>
            </li>
        </ul>
    </nav>

    <div id=\"content\" class=\"container\">
        <div class=\"row\">
            <nav class=\"sidebar col-lg-3\">
                <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"active\">
                        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("experiments_blog_homepage");
        echo "\">
                            <span class=\"badge pull-right\">42</span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("experiments_blog_category", array("categorySlug" => "category-1"));
        echo "\">
                            <span class=\"badge pull-right\">0</span>
                            Category 1
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("experiments_blog_category", array("categorySlug" => "category-2"));
        echo "\">
                            <span class=\"badge pull-right\">0</span>
                            Category 2
                        </a>
                    </li>
                </ul>

            </nav>
            <section class=\"articles col-lg-9\">
            ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "            </section>
        </div>
        <!-- End .row -->
    </div>
    <!-- End #content -->

</body>

</html>";
    }

    // line 15
    public function block_pageTitle($context, array $blocks = array())
    {
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
        // line 69
        echo "            ";
    }

    public function getTemplateName()
    {
        return "ExperimentsBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 69,  136 => 68,  131 => 15,  119 => 70,  117 => 68,  105 => 59,  96 => 53,  87 => 47,  74 => 37,  68 => 34,  52 => 21,  48 => 20,  44 => 19,  37 => 15,  21 => 1,);
    }
}
