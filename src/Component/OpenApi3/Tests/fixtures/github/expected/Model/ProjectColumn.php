<?php

namespace Github\Model;

class ProjectColumn extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $projectUrl;
    /**
     * 
     *
     * @var string
     */
    protected $cardsUrl;
    /**
     * The unique identifier of the project column
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * Name of the project column
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProjectUrl() : string
    {
        return $this->projectUrl;
    }
    /**
     * 
     *
     * @param string $projectUrl
     *
     * @return self
     */
    public function setProjectUrl(string $projectUrl) : self
    {
        $this->projectUrl = $projectUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCardsUrl() : string
    {
        return $this->cardsUrl;
    }
    /**
     * 
     *
     * @param string $cardsUrl
     *
     * @return self
     */
    public function setCardsUrl(string $cardsUrl) : self
    {
        $this->cardsUrl = $cardsUrl;
        return $this;
    }
    /**
     * The unique identifier of the project column
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The unique identifier of the project column
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * Name of the project column
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the project column
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}