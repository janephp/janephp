<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiDeployment extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $status = 'STATUS_UNKNOWN';
    /**
     * Last modified
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Access your deployed agent here
     *
     * @var string
     */
    protected $url;
    /**
     * Unique id
     *
     * @var string
     */
    protected $uuid;
    /**
     * - VISIBILITY_UNKNOWN: The status of the deployment is unknown
     *  - VISIBILITY_DISABLED: The deployment is disabled and will no longer service requests
     *  - VISIBILITY_PLAYGROUND: Deprecated: No longer a valid state
     *  - VISIBILITY_PUBLIC: The deployment is public and will service requests from the public internet
     *  - VISIBILITY_PRIVATE: The deployment is private and will only service requests from other agents, or through API keys
     *
     * @var string
     */
    protected $visibility = 'VISIBILITY_UNKNOWN';
    /**
     * Creation date / time
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date / time
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Last modified
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Last modified
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Access your deployed agent here
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * Access your deployed agent here
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Unique id
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique id
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * - VISIBILITY_UNKNOWN: The status of the deployment is unknown
     *  - VISIBILITY_DISABLED: The deployment is disabled and will no longer service requests
     *  - VISIBILITY_PLAYGROUND: Deprecated: No longer a valid state
     *  - VISIBILITY_PUBLIC: The deployment is public and will service requests from the public internet
     *  - VISIBILITY_PRIVATE: The deployment is private and will only service requests from other agents, or through API keys
     *
     * @return string
     */
    public function getVisibility(): string
    {
        return $this->visibility;
    }
    /**
    * - VISIBILITY_UNKNOWN: The status of the deployment is unknown
    - VISIBILITY_DISABLED: The deployment is disabled and will no longer service requests
    - VISIBILITY_PLAYGROUND: Deprecated: No longer a valid state
    - VISIBILITY_PUBLIC: The deployment is public and will service requests from the public internet
    - VISIBILITY_PRIVATE: The deployment is private and will only service requests from other agents, or through API keys
    *
    * @param string $visibility
    *
    * @return self
    */
    public function setVisibility(string $visibility): self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;
        return $this;
    }
}