<?php

namespace Olix\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OlixTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
