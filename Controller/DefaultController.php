<?php

namespace DaveFX\Bundle\PHPlotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DaveFXPHPlotBundle:Default:index.html.twig', array('name' => $name));
    }
}
