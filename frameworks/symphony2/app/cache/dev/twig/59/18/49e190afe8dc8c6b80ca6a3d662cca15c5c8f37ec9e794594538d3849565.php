<?php

/* ExperimentsBlogBundle:Administration:login.html.twig */
class __TwigTemplate_591849e190afe8dc8c6b80ca6a3d662cca15c5c8f37ec9e794594538d3849565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ExperimentsBlogBundle::admin-layout.html.twig");

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'content' => array($this, 'block_content'),
            'adminFoot' => array($this, 'block_adminFoot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ExperimentsBlogBundle::admin-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "Login to Administration";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<form method=\"POST\" action=\"admin-list-news.html\" class=\"jumbotron login-form\">
    <div class=\"form-group\">
        <label for=\"exampleInputEmail\">Email address</label>
        <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail\" placeholder=\"Enter email\">
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputPassword\">Password</label>
        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword\" placeholder=\"Password\">
    </div>
    <div class=\"button-group\">
        <a class=\"btn btn-primary\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_admin_list_posts");
        echo "\">Submit</a>
    </div>
</form>
";
    }

    // line 22
    public function block_adminFoot($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "ExperimentsBlogBundle:Administration:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  51 => 16,  39 => 6,  36 => 5,  30 => 3,);
    }
}
