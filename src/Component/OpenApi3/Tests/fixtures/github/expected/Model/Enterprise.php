<?php

namespace Github\Model;

class Enterprise extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A short description of the enterprise.
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * The enterprise's website URL.
     *
     * @var string|null
     */
    protected $websiteUrl;
    /**
     * Unique identifier of the enterprise
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
     * The name of the enterprise.
     *
     * @var string
     */
    protected $name;
    /**
     * The slug url identifier for the enterprise.
     *
     * @var string
     */
    protected $slug;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string
     */
    protected $avatarUrl;
    /**
     * A short description of the enterprise.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * A short description of the enterprise.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->initialized['htmlUrl'] = true;
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * The enterprise's website URL.
     *
     * @return string|null
     */
    public function getWebsiteUrl() : ?string
    {
        return $this->websiteUrl;
    }
    /**
     * The enterprise's website URL.
     *
     * @param string|null $websiteUrl
     *
     * @return self
     */
    public function setWebsiteUrl(?string $websiteUrl) : self
    {
        $this->initialized['websiteUrl'] = true;
        $this->websiteUrl = $websiteUrl;
        return $this;
    }
    /**
     * Unique identifier of the enterprise
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique identifier of the enterprise
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
     * The name of the enterprise.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the enterprise.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The slug url identifier for the enterprise.
     *
     * @return string
     */
    public function getSlug() : string
    {
        return $this->slug;
    }
    /**
     * The slug url identifier for the enterprise.
     *
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug) : self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvatarUrl() : string
    {
        return $this->avatarUrl;
    }
    /**
     * 
     *
     * @param string $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(string $avatarUrl) : self
    {
        $this->initialized['avatarUrl'] = true;
        $this->avatarUrl = $avatarUrl;
        return $this;
    }
}