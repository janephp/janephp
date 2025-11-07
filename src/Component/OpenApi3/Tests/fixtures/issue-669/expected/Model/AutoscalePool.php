<?php

namespace Jane\Generated\DigitalOcean\Model;

class AutoscalePool extends \ArrayObject
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
     * A unique identifier for each autoscale pool instance. This is automatically generated upon autoscale pool creation.
     *
     * @var string
     */
    protected $id;
    /**
     * The human-readable name set for the autoscale pool.
     *
     * @var string
     */
    protected $name;
    /**
     * The scaling configuration for an autoscale pool, which is how the pool scales up and down (either by resource utilization or static configuration).
     *
     * @var array<string, mixed>
     */
    protected $config;
    /**
     * @var AutoscalePoolDropletTemplate
     */
    protected $dropletTemplate;
    /**
     * @var CurrentUtilization
     */
    protected $currentUtilization;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the autoscale pool was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the autoscale pool was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * The current status of the autoscale pool.
     *
     * @var string
     */
    protected $status;
    /**
     * The number of active Droplets in the autoscale pool.
     *
     * @var int
     */
    protected $activeResourcesCount;
    /**
     * A unique identifier for each autoscale pool instance. This is automatically generated upon autoscale pool creation.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique identifier for each autoscale pool instance. This is automatically generated upon autoscale pool creation.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The human-readable name set for the autoscale pool.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The human-readable name set for the autoscale pool.
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
     * The scaling configuration for an autoscale pool, which is how the pool scales up and down (either by resource utilization or static configuration).
     *
     * @return array<string, mixed>
     */
    public function getConfig(): iterable
    {
        return $this->config;
    }
    /**
     * The scaling configuration for an autoscale pool, which is how the pool scales up and down (either by resource utilization or static configuration).
     *
     * @param array<string, mixed> $config
     *
     * @return self
     */
    public function setConfig(iterable $config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * @return AutoscalePoolDropletTemplate
     */
    public function getDropletTemplate(): AutoscalePoolDropletTemplate
    {
        return $this->dropletTemplate;
    }
    /**
     * @param AutoscalePoolDropletTemplate $dropletTemplate
     *
     * @return self
     */
    public function setDropletTemplate(AutoscalePoolDropletTemplate $dropletTemplate): self
    {
        $this->initialized['dropletTemplate'] = true;
        $this->dropletTemplate = $dropletTemplate;
        return $this;
    }
    /**
     * @return CurrentUtilization
     */
    public function getCurrentUtilization(): CurrentUtilization
    {
        return $this->currentUtilization;
    }
    /**
     * @param CurrentUtilization $currentUtilization
     *
     * @return self
     */
    public function setCurrentUtilization(CurrentUtilization $currentUtilization): self
    {
        $this->initialized['currentUtilization'] = true;
        $this->currentUtilization = $currentUtilization;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the autoscale pool was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the autoscale pool was created.
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
     * A time value given in ISO8601 combined date and time format that represents when the autoscale pool was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the autoscale pool was last updated.
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
     * The current status of the autoscale pool.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The current status of the autoscale pool.
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
     * The number of active Droplets in the autoscale pool.
     *
     * @return int
     */
    public function getActiveResourcesCount(): int
    {
        return $this->activeResourcesCount;
    }
    /**
     * The number of active Droplets in the autoscale pool.
     *
     * @param int $activeResourcesCount
     *
     * @return self
     */
    public function setActiveResourcesCount(int $activeResourcesCount): self
    {
        $this->initialized['activeResourcesCount'] = true;
        $this->activeResourcesCount = $activeResourcesCount;
        return $this;
    }
}