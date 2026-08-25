<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class History implements AdditionalPropertiesInterface
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
     * The unique identifier of the history event.
     *
     * @var string
     */
    protected $historyEventId;
    /**
     * The current number of Droplets in the autoscale pool.
     *
     * @var int
     */
    protected $currentInstanceCount;
    /**
     * The target number of Droplets for the autoscale pool after the scaling event.
     *
     * @var int
     */
    protected $desiredInstanceCount;
    /**
     * The reason for the scaling event.
     *
     * @var string
     */
    protected $reason;
    /**
     * The status of the scaling event.
     *
     * @var string
     */
    protected $status;
    /**
     * The creation time of the history event in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The last updated time of the history event in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * The unique identifier of the history event.
     *
     * @return string
     */
    public function getHistoryEventId(): string
    {
        return $this->historyEventId;
    }
    /**
     * The unique identifier of the history event.
     *
     * @param string $historyEventId
     *
     * @return self
     */
    public function setHistoryEventId(string $historyEventId): self
    {
        $this->initialized['historyEventId'] = true;
        $this->historyEventId = $historyEventId;
        return $this;
    }
    /**
     * The current number of Droplets in the autoscale pool.
     *
     * @return int
     */
    public function getCurrentInstanceCount(): int
    {
        return $this->currentInstanceCount;
    }
    /**
     * The current number of Droplets in the autoscale pool.
     *
     * @param int $currentInstanceCount
     *
     * @return self
     */
    public function setCurrentInstanceCount(int $currentInstanceCount): self
    {
        $this->initialized['currentInstanceCount'] = true;
        $this->currentInstanceCount = $currentInstanceCount;
        return $this;
    }
    /**
     * The target number of Droplets for the autoscale pool after the scaling event.
     *
     * @return int
     */
    public function getDesiredInstanceCount(): int
    {
        return $this->desiredInstanceCount;
    }
    /**
     * The target number of Droplets for the autoscale pool after the scaling event.
     *
     * @param int $desiredInstanceCount
     *
     * @return self
     */
    public function setDesiredInstanceCount(int $desiredInstanceCount): self
    {
        $this->initialized['desiredInstanceCount'] = true;
        $this->desiredInstanceCount = $desiredInstanceCount;
        return $this;
    }
    /**
     * The reason for the scaling event.
     *
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * The reason for the scaling event.
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * The status of the scaling event.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The status of the scaling event.
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
     * The creation time of the history event in ISO8601 combined date and time format.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The creation time of the history event in ISO8601 combined date and time format.
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
     * The last updated time of the history event in ISO8601 combined date and time format.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The last updated time of the history event in ISO8601 combined date and time format.
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
    public function definedProperties(): array
    {
        return ['historyEventId' => ['history_event_id', 'getHistoryEventId', 'setHistoryEventId'], 'currentInstanceCount' => ['current_instance_count', 'getCurrentInstanceCount', 'setCurrentInstanceCount'], 'desiredInstanceCount' => ['desired_instance_count', 'getDesiredInstanceCount', 'setDesiredInstanceCount'], 'reason' => ['reason', 'getReason', 'setReason'], 'status' => ['status', 'getStatus', 'setStatus'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt']];
    }
}