<?php

namespace Github\Model;

class ProjectCard
{
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
        $this->projectUrl = $projectUrl;
        return $this;
    }
}