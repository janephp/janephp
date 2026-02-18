<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsActionsResponseAction extends \ArrayObject
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
     * The DigitalOcean region slug where the resource is located.
     *
     * @var string
     */
    protected $regionSlug;
    /**
     * The unique identifier of the resource on which the action is being performed.
     *
     * @var string
     */
    protected $resourceId;
    /**
     * The type of resource on which the action is being performed.
     *
     * @var string
     */
    protected $resourceType;
    /**
     * The timestamp when the action was started.
     *
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * The current status of the action.
     *
     * @var string
     */
    protected $status;
    /**
     * The type of action being performed.
     *
     * @var string
     */
    protected $type;
    /**
     * The DigitalOcean region slug where the resource is located.
     *
     * @return string
     */
    public function getRegionSlug(): string
    {
        return $this->regionSlug;
    }
    /**
     * The DigitalOcean region slug where the resource is located.
     *
     * @param string $regionSlug
     *
     * @return self
     */
    public function setRegionSlug(string $regionSlug): self
    {
        $this->initialized['regionSlug'] = true;
        $this->regionSlug = $regionSlug;
        return $this;
    }
    /**
     * The unique identifier of the resource on which the action is being performed.
     *
     * @return string
     */
    public function getResourceId(): string
    {
        return $this->resourceId;
    }
    /**
     * The unique identifier of the resource on which the action is being performed.
     *
     * @param string $resourceId
     *
     * @return self
     */
    public function setResourceId(string $resourceId): self
    {
        $this->initialized['resourceId'] = true;
        $this->resourceId = $resourceId;
        return $this;
    }
    /**
     * The type of resource on which the action is being performed.
     *
     * @return string
     */
    public function getResourceType(): string
    {
        return $this->resourceType;
    }
    /**
     * The type of resource on which the action is being performed.
     *
     * @param string $resourceType
     *
     * @return self
     */
    public function setResourceType(string $resourceType): self
    {
        $this->initialized['resourceType'] = true;
        $this->resourceType = $resourceType;
        return $this;
    }
    /**
     * The timestamp when the action was started.
     *
     * @return \DateTime
     */
    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }
    /**
     * The timestamp when the action was started.
     *
     * @param \DateTime $startedAt
     *
     * @return self
     */
    public function setStartedAt(\DateTime $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * The current status of the action.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The current status of the action.
     *
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
     * The type of action being performed.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of action being performed.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}