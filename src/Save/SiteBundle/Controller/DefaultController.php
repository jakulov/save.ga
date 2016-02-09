<?php

namespace Save\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @package Save\SiteBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        if($this->getParameter('coming_soon')) {
            return $this->render('SiteBundle:Site:coming.html.twig');
        }

        return $this->render('SiteBundle:Site:page/index.html.twig');
    }
}
