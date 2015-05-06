<?php

namespace TF\TennisFilterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('TFTennisFilterBundle:Main:main.html.twig');
    }
}
