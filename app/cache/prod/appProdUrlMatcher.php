<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'TF\\TennisFilterBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        // tf_tennis_filter_login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tf_tennis_filter_login');
            }

            return array (  '_controller' => 'TF\\TennisFilterBundle\\Controller\\SecurityController::loginAction',  '_route' => 'tf_tennis_filter_login',);
        }

        // tf_tennis_filter_homepage
        if ($pathinfo === '/main') {
            return array (  '_controller' => 'TF\\TennisFilterBundle\\Controller\\MainController::indexAction',  '_route' => 'tf_tennis_filter_homepage',);
        }

        // tf_tennis_filter_login2
        if ($pathinfo === '/login2') {
            return array (  '_controller' => 'TF\\TennisFilterBundle\\Controller\\SecurityController::login2Action',  '_route' => 'tf_tennis_filter_login2',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
