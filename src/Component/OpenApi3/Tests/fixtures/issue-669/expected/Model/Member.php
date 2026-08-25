<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Member implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The unique identifier of the Droplet.
     *
     * @var int
     */
    protected $dropletId;
    /**
     * The creation time of the Droplet in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The last updated time of the Droplet in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * The health status of the Droplet.
     *
     * @var string
     */
    protected $healthStatus;
    /**
     * The power status of the Droplet.
     *
     * @var string
     */
    protected $status;
    /**
     * @var MemberCurrentUtilization
     */
    protected $currentUtilization;
    /**
     * The unique identifier of the Droplet.
     *
     * @return int
     */
    public function getDropletId(): int
    {
        return $this->dropletId;
    }
    /**
     * The unique identifier of the Droplet.
     *
     * @param int $dropletId
     *
     * @return self
     */
    public function setDropletId(int $dropletId): self
    {
        $this->initialized['dropletId'] = true;
        $this->dropletId = $dropletId;
        return $this;
    }
    /**
     * The creation time of the Droplet in ISO8601 combined date and time format.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The creation time of the Droplet in ISO8601 combined date and time format.
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
     * The last updated time of the Droplet in ISO8601 combined date and time format.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The last updated time of the Droplet in ISO8601 combined date and time format.
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
     * The health status of the Droplet.
     *
     * @return string
     */
    public function getHealthStatus(): string
    {
        return $this->healthStatus;
    }
    /**
     * The health status of the Droplet.
     *
     * @param string $healthStatus
     *
     * @return self
     */
    public function setHealthStatus(string $healthStatus): self
    {
        $this->initialized['healthStatus'] = true;
        $this->healthStatus = $healthStatus;
        return $this;
    }
    /**
     * The power status of the Droplet.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The power status of the Droplet.
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
     * @return MemberCurrentUtilization
     */
    public function getCurrentUtilization(): MemberCurrentUtilization
    {
        return $this->currentUtilization;
    }
    /**
     * @param MemberCurrentUtilization $currentUtilization
     *
     * @return self
     */
    public function setCurrentUtilization(MemberCurrentUtilization $currentUtilization): self
    {
        $this->initialized['currentUtilization'] = true;
        $this->currentUtilization = $currentUtilization;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['dropletId' => ['droplet_id', 'getDropletId', 'setDropletId'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'healthStatus' => ['health_status', 'getHealthStatus', 'setHealthStatus'], 'status' => ['status', 'getStatus', 'setStatus'], 'currentUtilization' => ['current_utilization', 'getCurrentUtilization', 'setCurrentUtilization']];
    }
}