<?php

/* ExperimentsBlogBundle:Administration:listPosts.html.twig */
class __TwigTemplate_c71a665aa553a4ef39984ddfc1b151c94552a510b377438daa7b3648a7b4f4e3 extends Twig_Template
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
        echo "View Posts";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
    <nav class=\"sidebar col-lg-3\">
        <ul class=\"nav nav-pills nav-stacked\">
            <li class=\"active\">
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_admin_list_posts");
        echo "\">Posts</a>
            </li>
            <li>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("_admin_categories");
        echo "\">Categories</a>
            </li>
        </ul>
    </nav>

    <div class=\"col-lg-9\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("_admin_edit_post");
        echo "\" type=\"button\" class=\"btn btn-default\">Add New Pots</a>
            <a href=\"admin-list-news.html\" type=\"button\" class=\"btn btn-default\">Delete</a>
        </div>


        <table class=\"news-list table table-hover table-bordered\">
            <thead>
                <tr>
                    <th>
                        <input type=\"checkbox\" name=\"post_select\" value=\"all\" />
                    </th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"post_select\" value=\"1\" />
                    </td>
                    <td>1</td>
                    <td>
                        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("_admin_edit_post", array("slug" => "post-slug"));
        echo "\" title=\"Lorem Ipsulum\">Lorem Ipsulum</a>
                    </td>
                    <td>02/03/2013</td>
                </tr>
                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"post_select\" value=\"2\" />
                    </td>
                    <td>2</td>
                    <td>
                        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("_admin_edit_post", array("slug" => "post-slug"));
        echo "\" title=\"Lorem Ipsulum\">Lorem Ipsulum</a>
                    </td>
                    <td>02/03/2013</td>
                </tr>
                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"post_select\" value=\"3\" />
                    </td>
                    <td>3</td>
                    <td>
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("_admin_edit_post", array("slug" => "post-slug"));
        echo "\" title=\"Lorem Ipsulum\">Lorem Ipsulum</a>
                    </td>
                    <td>02/03/2013</td>
                </tr>
                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"post_select\" value=\"4\" />
                    </td>
                    <td>4</td>
                    <td>
                        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("_admin_edit_post", array("slug" => "post-slug"));
        echo "\" title=\"Lorem Ipsulum\">Lorem Ipsulum</a>
                    </td>
                    <td>02/03/2013</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ExperimentsBlogBundle:Administration:listPosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 73,  112 => 63,  99 => 53,  86 => 43,  60 => 20,  50 => 13,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
