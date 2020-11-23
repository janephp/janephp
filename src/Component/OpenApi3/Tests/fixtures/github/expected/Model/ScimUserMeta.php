<?php

namespace Github\Model;

class ScimUserMeta
{
    /**
     * 
     *
     * @var string
     */
    protected $resourceType;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $created;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $lastModified;
    /**
     * 
     *
     * @var string
     */
    protected $location;
    /**
     * 
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * 
     *
     * @param string $resourceType
     *
     * @return self
     */
    public function setResourceType(string $resourceType) : self
    {
        $this->resourceType = $resourceType;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreated() : \DateTime
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param \DateTime $created
     *
     * @return self
     */
    public function setCreated(\DateTime $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getLastModified() : \DateTime
    {
        return $this->lastModified;
    }
    /**
     * 
     *
     * @param \DateTime $lastModified
     *
     * @return self
     */
    public function setLastModified(\DateTime $lastModified) : self
    {
        $this->lastModified = $lastModified;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->location = $location;
        return $this;
    }
}