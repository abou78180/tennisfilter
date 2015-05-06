<?php

namespace TF\TennisFilterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TFTennisFilterBundle:Default:index.html.twig', array('name' => $name));
    }
}
