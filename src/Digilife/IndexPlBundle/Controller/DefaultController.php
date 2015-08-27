<?php

namespace Digilife\IndexPlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IndexPlBundle:Default:index.html.twig', array('name' => $name));
    }
}
