<?php

namespace Github\Model;

class ScimUserMeta extends \ArrayObject
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
        $this->initialized['resourceType'] = true;
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
        $this->initialized['created'] = true;
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
        $this->initialized['lastModified'] = true;
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
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
}