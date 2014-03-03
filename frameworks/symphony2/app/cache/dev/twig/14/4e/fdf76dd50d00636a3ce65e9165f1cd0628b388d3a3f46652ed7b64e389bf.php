<?php

/* ExperimentsBlogBundle:Administration:categories.html.twig */
class __TwigTemplate_144efdf76dd50d00636a3ce65e9165f1cd0628b388d3a3f46652ed7b64e389bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ExperimentsBlogBundle::admin-layout.html.twig");

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'content' => array($this, 'block_content'),
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
        echo "Add/Edit Category";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
    <nav class=\"sidebar col-lg-3\">
        <ul class=\"nav nav-pills nav-stacked\">
            <li>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_admin_list_posts");
        echo "\">Posts</a>
            </li>
            <li class=\"active\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("_admin_categories");
        echo "\">Categories</a>
            </li>
        </ul>
    </nav>

    <div class=\"col-lg-9\">
        <form method=\"post\" class=\"form-inline clearfix\" role=\"form\">
            <input type=\"text\" name=\"categroy_name\" placeholder=\"Category Name\" class=\"form-control\" />

            <input type=\"submit\" class=\"btn pull-right\" value=\"Submit\" />
        </form>


        <table class=\"news-list table table-hover table-bordered\">
            <tbody>
                <tr>
                    <td>Category Name 1</td>
                    <td>
                        <a href=\"#\">
                            <i class=\"glyphicon glyphicon-pencil\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"glyphicon glyphicon-trash\"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Category Name 2</td>
                    <td>
                        <a href=\"#\">
                            <i class=\"glyphicon glyphicon-pencil\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"glyphicon glyphicon-trash\"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ExperimentsBlogBundle:Administration:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
