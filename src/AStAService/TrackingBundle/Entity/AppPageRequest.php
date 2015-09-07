<?php

namespace AStAService\TrackingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Request
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AppPageRequest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetimetz")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="userAgent", type="string", length=255)
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="remoteAddr", type="string", length=255)
     */
    private $remoteAddr;


    /**
     * @ORM\ManyToOne(targetEntity="AStAService\AppBundle\Entity\AppPage")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id")
     **/
    private $page;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Request
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     * @return Request
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string 
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set remoteAddr
     *
     * @param string $remoteAddr
     * @return Request
     */
    public function setRemoteAddr($remoteAddr)
    {
        $this->remoteAddr = $remoteAddr;

        return $this;
    }

    /**
     * Get remoteAddr
     *
     * @return string 
     */
    public function getRemoteAddr()
    {
        return $this->remoteAddr;
    }

    /**
     * Set page
     *
     * @param \AStAService\AppBundle\Entity\AppPage $page
     * @return AppPageRequest
     */
    public function setPage(\AStAService\AppBundle\Entity\AppPage $page = null)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return \AStAService\AppBundle\Entity\AppPage 
     */
    public function getPage()
    {
        return $this->page;
    }
}
