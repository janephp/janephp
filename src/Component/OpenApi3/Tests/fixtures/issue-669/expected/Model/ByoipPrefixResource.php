<?php

namespace Jane\Generated\DigitalOcean\Model;

class ByoipPrefixResource extends \ArrayObject
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
     * Unique identifier for the allocation
     *
     * @var int
     */
    protected $id;
    /**
     * The BYOIP prefix UUID
     *
     * @var string
     */
    protected $byoip;
    /**
     * Region where the allocation is made
     *
     * @var string
     */
    protected $region;
    /**
     * The resource associated with the allocation
     *
     * @var string
     */
    protected $resource;
    /**
     * Time when the allocation was assigned
     *
     * @var \DateTime
     */
    protected $assignedAt;
    /**
     * Unique identifier for the allocation
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Unique identifier for the allocation
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
     * The BYOIP prefix UUID
     *
     * @return string
     */
    public function getByoip(): string
    {
        return $this->byoip;
    }
    /**
     * The BYOIP prefix UUID
     *
     * @param string $byoip
     *
     * @return self
     */
    public function setByoip(string $byoip): self
    {
        $this->initialized['byoip'] = true;
        $this->byoip = $byoip;
        return $this;
    }
    /**
     * Region where the allocation is made
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region where the allocation is made
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The resource associated with the allocation
     *
     * @return string
     */
    public function getResource(): string
    {
        return $this->resource;
    }
    /**
     * The resource associated with the allocation
     *
     * @param string $resource
     *
     * @return self
     */
    public function setResource(string $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;
        return $this;
    }
    /**
     * Time when the allocation was assigned
     *
     * @return \DateTime
     */
    public function getAssignedAt(): \DateTime
    {
        return $this->assignedAt;
    }
    /**
     * Time when the allocation was assigned
     *
     * @param \DateTime $assignedAt
     *
     * @return self
     */
    public function setAssignedAt(\DateTime $assignedAt): self
    {
        $this->initialized['assignedAt'] = true;
        $this->assignedAt = $assignedAt;
        return $this;
    }
}