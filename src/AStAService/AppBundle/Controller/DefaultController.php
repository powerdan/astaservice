<?php

namespace AStAService\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($pageId)
    {
        // Giving Information to App

        $page = $this->getDoctrine()->getEntityManager()->getRepository("AStAServiceAppBundle:AppPage")->findOneBy(array('id' => $pageId, 'enabled' => true));



        $ip = $this->container->get('request')->getClientIp();
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        $this->get('astaservice.tracking')->trackAppRequest($userAgent, $ip, $page);


        return $this->render('AStAServiceAppBundle:Default:index.html.twig', array('page' => $page));
    }
}
