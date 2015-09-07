<?php
namespace AStAService\TrackingBundle\Services;

use AStAService\TrackingBundle\Entity\AppPageRequest;

class TrackingService {

    // EntitityManager
    private $em;
    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
    }

    public function trackAppRequest($userAgent, $remoteAddr, $page)
    {
        $apr = new AppPageRequest();
        $apr->setTime(new \DateTime());
        $apr->setUserAgent($userAgent);
        $apr->setRemoteAddr($remoteAddr);
        $apr->setPage($page);

        $this->em->persist($apr);
        $this->em->flush();
    }
}