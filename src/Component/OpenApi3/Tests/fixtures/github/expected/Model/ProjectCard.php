<?php

namespace Github\Model;

class ProjectCard extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * The project card's ID
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
     * 
     *
     * @var string|null
     */
    protected $note;
    /**
     * 
     *
     * @var ProjectCardCreator|null
     */
    protected $creator;
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
     * Whether or not the card is archived
     *
     * @var bool
     */
    protected $archived;
    /**
     * 
     *
     * @var string
     */
    protected $columnUrl;
    /**
     * 
     *
     * @var string
     */
    protected $contentUrl;
    /**
     * 
     *
     * @var string
     */
    protected $projectUrl;
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
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * The project card's ID
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The project card's ID
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
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
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNote() : ?string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note) : self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * 
     *
     * @return ProjectCardCreator|null
     */
    public function getCreator() : ?ProjectCardCreator
    {
        return $this->creator;
    }
    /**
     * 
     *
     * @param ProjectCardCreator|null $creator
     *
     * @return self
     */
    public function setCreator(?ProjectCardCreator $creator) : self
    {
        $this->initialized['creator'] = true;
        $this->creator = $creator;
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
        $this->initialized['createdAt'] = true;
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
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Whether or not the card is archived
     *
     * @return bool
     */
    public function getArchived() : bool
    {
        return $this->archived;
    }
    /**
     * Whether or not the card is archived
     *
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(bool $archived) : self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getColumnUrl() : string
    {
        return $this->columnUrl;
    }
    /**
     * 
     *
     * @param string $columnUrl
     *
     * @return self
     */
    public function setColumnUrl(string $columnUrl) : self
    {
        $this->initialized['columnUrl'] = true;
        $this->columnUrl = $columnUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContentUrl() : string
    {
        return $this->contentUrl;
    }
    /**
     * 
     *
     * @param string $contentUrl
     *
     * @return self
     */
    public function setContentUrl(string $contentUrl) : self
    {
        $this->initialized['contentUrl'] = true;
        $this->contentUrl = $contentUrl;
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
        $this->initialized['projectUrl'] = true;
        $this->projectUrl = $projectUrl;
        return $this;
    }
}