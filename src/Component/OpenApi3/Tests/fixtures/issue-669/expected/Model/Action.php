<?php

namespace Jane\Generated\DigitalOcean\Model;

class Action extends \ArrayObject
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
     * A unique numeric ID that can be used to identify and reference an action.
     *
     * @var int
     */
    protected $id;
    /**
     * The current status of the action. This can be "in-progress", "completed", or "errored".
     *
     * @var string
     */
    protected $status = 'in-progress';
    /**
     * This is the type of action that the object represents. For example, this could be "transfer" to represent the state of an image transfer action.
     *
     * @var string
     */
    protected $type;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the action was initiated.
     *
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the action was completed.
     *
     * @var \DateTime|null
     */
    protected $completedAt;
    /**
     * A unique identifier for the resource that the action is associated with.
     *
     * @var int|null
     */
    protected $resourceId;
    /**
     * The type of resource that the action is associated with.
     *
     * @var string
     */
    protected $resourceType;
    /**
     * @var Region
     */
    protected $region;
    /**
     * A human-readable string that is used as a unique identifier for each region.
     *
     * @var string|null
     */
    protected $regionSlug;
    /**
     * A unique numeric ID that can be used to identify and reference an action.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * A unique numeric ID that can be used to identify and reference an action.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The current status of the action. This can be "in-progress", "completed", or "errored".
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The current status of the action. This can be "in-progress", "completed", or "errored".
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
     * This is the type of action that the object represents. For example, this could be "transfer" to represent the state of an image transfer action.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * This is the type of action that the object represents. For example, this could be "transfer" to represent the state of an image transfer action.
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
    /**
     * A time value given in ISO8601 combined date and time format that represents when the action was initiated.
     *
     * @return \DateTime
     */
    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the action was initiated.
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
     * A time value given in ISO8601 combined date and time format that represents when the action was completed.
     *
     * @return \DateTime|null
     */
    public function getCompletedAt(): ?\DateTime
    {
        return $this->completedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the action was completed.
     *
     * @param \DateTime|null $completedAt
     *
     * @return self
     */
    public function setCompletedAt(?\DateTime $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
        return $this;
    }
    /**
     * A unique identifier for the resource that the action is associated with.
     *
     * @return int|null
     */
    public function getResourceId(): ?int
    {
        return $this->resourceId;
    }
    /**
     * A unique identifier for the resource that the action is associated with.
     *
     * @param int|null $resourceId
     *
     * @return self
     */
    public function setResourceId(?int $resourceId): self
    {
        $this->initialized['resourceId'] = true;
        $this->resourceId = $resourceId;
        return $this;
    }
    /**
     * The type of resource that the action is associated with.
     *
     * @return string
     */
    public function getResourceType(): string
    {
        return $this->resourceType;
    }
    /**
     * The type of resource that the action is associated with.
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
     * @return Region
     */
    public function getRegion(): Region
    {
        return $this->region;
    }
    /**
     * @param Region $region
     *
     * @return self
     */
    public function setRegion(Region $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * A human-readable string that is used as a unique identifier for each region.
     *
     * @return string|null
     */
    public function getRegionSlug(): ?string
    {
        return $this->regionSlug;
    }
    /**
     * A human-readable string that is used as a unique identifier for each region.
     *
     * @param string|null $regionSlug
     *
     * @return self
     */
    public function setRegionSlug(?string $regionSlug): self
    {
        $this->initialized['regionSlug'] = true;
        $this->regionSlug = $regionSlug;
        return $this;
    }
}