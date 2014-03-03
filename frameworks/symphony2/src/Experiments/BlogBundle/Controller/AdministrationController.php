<?php

namespace Experiments\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * @Route("/admin")
 */
class AdministrationController extends Controller {
    /**
     * @Route("/login", name="_admin_login")
     * @Template()
     */
    public function loginAction() {
        return array();
    }
    
    /**
     * @Route("/categories", name="_admin_categories")
     * @Template()
     */
    public function categoriesAction() {
        return array();
    }
    
    
    /**
     * @Route("/listposts", name="_admin_list_posts")
     * @Template()
     */
    public function listPostsAction() {
        return array();
    }
    
    
    /**
     * @Route("/post/{slug}", name="_admin_edit_post", defaults={"slug" = "__new__"})
     * @Template()
     */
    public function postAction($slug) {
        return array();
    }
    
}
