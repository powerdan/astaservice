<?php

namespace AStAService\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AStAServiceCoreBundle:Default:index.html.twig');
    }
}
