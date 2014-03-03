<?php

/* ExperimentsBlogBundle:Index:post.html.twig */
class __TwigTemplate_a36a7a92c5056daa934b48f2804aef41c41bb2510c21f8a7c71ee0a46b9cedbe extends Twig_Template
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

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        echo " Post N ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<article>
    <h2>Test title</h2>

    <div class=\"text-body\">
        <img alt=\"140x140\" class=\"img-thumbnail img-responsive pull-left\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAK8AAACvCAYAAACLko51AAADBUlEQVR4nO3ZMW7iQBiA0dz/KO7oaNzRuaT3EbgCW03ksJDsIpHst37FUxRrrB+RT5PBvF0ulysUvf30C4BniZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIla9fxrut6nabpejweH66Z5/k6TdP1dDp9uH48Hq/TNH15/788v27X8Y4AHv3xz+fzeyDbeEZQW/M85+bX7Tbew+Hw5c61XTPiGbvlNE13f6/M/x/sMt4Rxfh5L57T6fRhzYhn7Ibbe8YOej6fr8uyvN93O29ZlpfP/+n39jvtNt5taLfxjN1snuffzpzjnu2/6bFmxDliWpbl7oxXz9+LXcY7PIpnxLeu61PxjPgOh8P7zvmd8/dCvDfxjGsjlmfjGes+i+qV8/dAvA/Oj/fM8/zHZ87tE4FHTwJeOX8PxPuX8Ww/3a/revfT/jawz8J61fy9EO8TXxJ89Zx1nHO3cW2fPrx6/l6I94l4LpfH33CN9ffOpLeBvWL+nuw6XtrES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yRIvWeIlS7xkiZcs8ZIlXrLES5Z4yfoFFFgIDPU+6bMAAAAASUVORK5CYII=\">

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ipsum nisi, blandit ut egestas nec, tempor ut nibh. Quisque laoreet magna ligula, ac pretium tellus tempor sed. Fusce eget vehicula massa. Vivamus in fringilla mi. Mauris nec est dignissim, hendrerit felis in, scelerisque felis. Sed eu eleifend nisi. Aliquam erat volutpat. Nunc nec eros imperdiet, feugiat turpis id, consectetur magna. Aenean vitae ornare felis.</p>

        <p>Nullam nibh tellus, lacinia id justo quis, tincidunt imperdiet mauris. Maecenas ut congue enim. Quisque molestie ipsum id laoreet eleifend. Aenean nec ornare tellus. Mauris facilisis non risus viverra consectetur. Suspendisse egestas non tellus quis volutpat. Curabitur elementum hendrerit aliquam. Proin ac volutpat leo. Pellentesque vulputate viverra augue, et pulvinar dolor dignissim at. Pellentesque id faucibus nunc, sit amet tincidunt nunc. Donec non lacinia massa. Pellentesque nec fringilla lacus, vitae vehicula justo. Nam fermentum lectus sed euismod volutpat. Quisque ac elit diam.</p>

        <p>Nullam nibh tellus, lacinia id justo quis, tincidunt imperdiet mauris. Maecenas ut congue enim. Quisque molestie ipsum id laoreet eleifend. Aenean nec ornare tellus. Mauris facilisis non risus viverra consectetur. Suspendisse egestas non tellus quis volutpat. Curabitur elementum hendrerit aliquam. Proin ac volutpat leo. Pellentesque vulputate viverra augue, et pulvinar dolor dignissim at. Pellentesque id faucibus nunc, sit amet tincidunt nunc. Donec non lacinia massa. Pellentesque nec fringilla lacus, vitae vehicula justo. Nam fermentum lectus sed euismod volutpat. Quisque ac elit diam.</p>

        <p>Nullam nibh tellus, lacinia id justo quis, tincidunt imperdiet mauris. Maecenas ut congue enim. Quisque molestie ipsum id laoreet eleifend. Aenean nec ornare tellus. Mauris facilisis non risus viverra consectetur. Suspendisse egestas non tellus quis volutpat. Curabitur elementum hendrerit aliquam. Proin ac volutpat leo. Pellentesque vulputate viverra augue, et pulvinar dolor dignissim at. Pellentesque id faucibus nunc, sit amet tincidunt nunc. Donec non lacinia massa. Pellentesque nec fringilla lacus, vitae vehicula justo. Nam fermentum lectus sed euismod volutpat. Quisque ac elit diam.</p>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "ExperimentsBlogBundle:Index:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  29 => 3,);
    }
}
