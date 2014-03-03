<?php

namespace Experiments\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller {
    public function indexAction() {
        return $this->render('ExperimentsBlogBundle:Index:index.html.twig');
    }
    
    public function categoryAction($categorySlug) {
        return $this->render('ExperimentsBlogBundle:Index:index.html.twig');
    }
    
    public function postAction($postSlug) {
        return $this->render('ExperimentsBlogBundle:Index:post.html.twig');
    }
}
