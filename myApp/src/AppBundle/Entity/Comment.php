<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Createt_at", type="datetime")
     */
    private $createtAt;
    
    /**
     * @var 
     *
     * @ORM\ManyToOne(targetEntity="Post" , inversedBy="comments")
     */
    private $post;
    
    /**
     * @var 
     *
     * @ORM\ManyToOne(targetEntity="User" , inversedBy="comments")
     * @ORM\JoinColumn(name="user_id", nullable=true)
     */
    private $user;
    
    public function __construct() {
        $this->createtAt = new\DateTime('now');
        
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
     * Set content
     *
     * @param string $content
     * @return Comment
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
     * Set createtAt
     *
     * @param \DateTime $createtAt
     * @return Comment
     */
    public function setCreatetAt($createtAt)
    {
        $this->createtAt = $createtAt;

        return $this;
    }

    /**
     * Get createtAt
     *
     * @return \DateTime 
     */
    public function getCreatetAt()
    {
        return $this->createtAt;
    }

    /**
     * Set post
     *
     * @param \AppBundle\Entity\Post $post
     * @return Comment
     */
    public function setPost(\AppBundle\Entity\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AppBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Comment
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
