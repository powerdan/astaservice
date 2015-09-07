<?php

namespace AStAService\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * AppPage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AppPage
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="asPopup", type="boolean", nullable=true)
     */
    private $asPopup;



    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="rawContent", type="text")
     */
    private $rawContent;

    /**
     * @var string
     *
     * @ORM\Column(name="contentFormatter", type="text")
     */
    private $contentFormatter;



    /**
     * @var string
     *
     * @ORM\Column(name="internalComment", type="text", nullable=true)
     */
    private $internalComment;

    /**
     * @ORM\ManyToMany(targetEntity="AppPage", mappedBy="links")
     **/
    private $linkedToMe;

    /**
     * @ORM\ManyToMany(targetEntity="AppPage", inversedBy="linkedToMe")
     * @ORM\JoinTable(name="Links",
     *      joinColumns={@ORM\JoinColumn(name="page_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="linked_id", referencedColumnName="id")}
     *      )
     **/
    private $links;


    public function __construct() {
        $this->linkedToMe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->links = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString() {

        return ($this->title." (ID: ".$this->id.")");
    }
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
     * Set title
     *
     * @param string $title
     * @return AppPage
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }



    /**
     * Set content
     *
     * @param string $content
     * @return AppPage
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set internalComment
     *
     * @param string $internalComment
     * @return AppPage
     */
    public function setInternalComment($internalComment)
    {
        $this->internalComment = $internalComment;

        return $this;
    }

    /**
     * Get internalComment
     *
     * @return string 
     */
    public function getInternalComment()
    {
        return $this->internalComment;
    }

    /**
     * Set asPopup
     *
     * @param boolean $asPopup
     * @return AppPage
     */
    public function setAsPopup($asPopup)
    {
        $this->asPopup = $asPopup;

        return $this;
    }

    /**
     * Get asPopup
     *
     * @return boolean 
     */
    public function getAsPopup()
    {
        return $this->asPopup;
    }


    /**
     * Add linkedToMe
     *
     * @param \AStAService\AppBundle\Entity\AppPage $linkedToMe
     * @return AppPage
     */
    public function addLinkedToMe(\AStAService\AppBundle\Entity\AppPage $linkedToMe)
    {
        $this->linkedToMe[] = $linkedToMe;

        return $this;
    }

    /**
     * Remove linkedToMe
     *
     * @param \AStAService\AppBundle\Entity\AppPage $linkedToMe
     */
    public function removeLinkedToMe(\AStAService\AppBundle\Entity\AppPage $linkedToMe)
    {
        $this->linkedToMe->removeElement($linkedToMe);
    }

    /**
     * Get linkedToMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLinkedToMe()
    {
        return $this->linkedToMe;
    }

    /**
     * Add links
     *
     * @param \AStAService\AppBundle\Entity\AppPage $links
     * @return AppPage
     */
    public function addLink(\AStAService\AppBundle\Entity\AppPage $links)
    {
        $this->links[] = $links;

        return $this;
    }

    /**
     * Remove links
     *
     * @param \AStAService\AppBundle\Entity\AppPage $links
     */
    public function removeLink(\AStAService\AppBundle\Entity\AppPage $links)
    {
        $this->links->removeElement($links);
    }

    /**
     * Get links
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLinks()
    {
        return $this->links;
    }



    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return AppPage
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set rawContent
     *
     * @param string $rawContent
     * @return AppPage
     */
    public function setRawContent($rawContent)
    {
        $this->rawContent = $rawContent;

        return $this;
    }

    /**
     * Get rawContent
     *
     * @return string 
     */
    public function getRawContent()
    {
        return $this->rawContent;
    }

    /**
     * Set contentFormatter
     *
     * @param string $contentFormatter
     * @return AppPage
     */
    public function setContentFormatter($contentFormatter)
    {
        $this->contentFormatter = $contentFormatter;

        return $this;
    }

    /**
     * Get contentFormatter
     *
     * @return string 
     */
    public function getContentFormatter()
    {
        return $this->contentFormatter;
    }
}
