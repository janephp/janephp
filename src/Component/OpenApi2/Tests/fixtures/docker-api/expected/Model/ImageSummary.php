<?php

namespace Docker\Api\Model;

class ImageSummary
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
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $parentId;
    /**
     * 
     *
     * @var string[]
     */
    protected $repoTags;
    /**
     * 
     *
     * @var string[]
     */
    protected $repoDigests;
    /**
     * 
     *
     * @var int
     */
    protected $created;
    /**
     * 
     *
     * @var int
     */
    protected $size;
    /**
     * 
     *
     * @var int
     */
    protected $sharedSize;
    /**
     * 
     *
     * @var int
     */
    protected $virtualSize;
    /**
     * 
     *
     * @var string[]
     */
    protected $labels;
    /**
     * 
     *
     * @var int
     */
    protected $containers;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
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
    public function getParentId() : string
    {
        return $this->parentId;
    }
    /**
     * 
     *
     * @param string $parentId
     *
     * @return self
     */
    public function setParentId(string $parentId) : self
    {
        $this->initialized['parentId'] = true;
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getRepoTags() : array
    {
        return $this->repoTags;
    }
    /**
     * 
     *
     * @param string[] $repoTags
     *
     * @return self
     */
    public function setRepoTags(array $repoTags) : self
    {
        $this->initialized['repoTags'] = true;
        $this->repoTags = $repoTags;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getRepoDigests() : array
    {
        return $this->repoDigests;
    }
    /**
     * 
     *
     * @param string[] $repoDigests
     *
     * @return self
     */
    public function setRepoDigests(array $repoDigests) : self
    {
        $this->initialized['repoDigests'] = true;
        $this->repoDigests = $repoDigests;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreated() : int
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(int $created) : self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSharedSize() : int
    {
        return $this->sharedSize;
    }
    /**
     * 
     *
     * @param int $sharedSize
     *
     * @return self
     */
    public function setSharedSize(int $sharedSize) : self
    {
        $this->initialized['sharedSize'] = true;
        $this->sharedSize = $sharedSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVirtualSize() : int
    {
        return $this->virtualSize;
    }
    /**
     * 
     *
     * @param int $virtualSize
     *
     * @return self
     */
    public function setVirtualSize(int $virtualSize) : self
    {
        $this->initialized['virtualSize'] = true;
        $this->virtualSize = $virtualSize;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getContainers() : int
    {
        return $this->containers;
    }
    /**
     * 
     *
     * @param int $containers
     *
     * @return self
     */
    public function setContainers(int $containers) : self
    {
        $this->initialized['containers'] = true;
        $this->containers = $containers;
        return $this;
    }
}