<?php

/* ExperimentsBlogBundle:Administration:post.html.twig */
class __TwigTemplate_86e82dcd1ccf1eac87013881202b63009f99ac1c53d2e2d0e38aca5e83302f65 extends Twig_Template
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
        echo "Edit N";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<form method=\"POST\" action=\"/\" class=\"jumbotron login-form content\">
    <div class=\"btn-group\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_admin_list_posts");
        echo "\" class=\"btn btn-default\">&laquo; Back</a>
        <a href=\"admin-list-news.html\" type=\"button\" class=\"btn btn-default\">Delete</a>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("experiments_blog_single_post", array("postSlug" => "post-slug"));
        echo "\" type=\"button\" class=\"btn btn-default\" target=\"_blank\">View Post</a>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"article-title\">Title</label>
                <input type=\"text\" class=\"form-control\" id=\"article-title\" placeholder=\"Enter Title\">
            </div>
            <div class=\"form-group\">
                <label for=\"article-content\">Content</label>
                <textarea id=\"article-content\" class=\"form-control\"></textarea>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                <label for=\"article-category\">Category</label>
                <select id=\"article-category\" class=\"form-control\">
                    <option value=\"\">---</option>
                    <option value=\"1\">Category 1</option>
                    <option value=\"2\">Category 2</option>
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"article-image\">Image</label>
                <input type=\"file\" id=\"article-image\" name=\"article-image\" />
            </div>
        </div>
    </div>
    <div class=\"form-group\">
        <input type=\"submit\" class=\"btn btn-primary\" title=\"Submit\">
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "ExperimentsBlogBundle:Administration:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
