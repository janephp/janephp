<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppAlertProgressStep implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $status = 'UNKNOWN';
    /**
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * @var \DateTime
     */
    protected $endedAt;
    /**
     * @var AppAlertProgressStepReason
     */
    protected $reason;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return \DateTime
     */
    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }
    /**
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
     * @return \DateTime
     */
    public function getEndedAt(): \DateTime
    {
        return $this->endedAt;
    }
    /**
     * @param \DateTime $endedAt
     *
     * @return self
     */
    public function setEndedAt(\DateTime $endedAt): self
    {
        $this->initialized['endedAt'] = true;
        $this->endedAt = $endedAt;
        return $this;
    }
    /**
     * @return AppAlertProgressStepReason
     */
    public function getReason(): AppAlertProgressStepReason
    {
        return $this->reason;
    }
    /**
     * @param AppAlertProgressStepReason $reason
     *
     * @return self
     */
    public function setReason(AppAlertProgressStepReason $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'status' => ['status', 'getStatus', 'setStatus'], 'startedAt' => ['started_at', 'getStartedAt', 'setStartedAt'], 'endedAt' => ['ended_at', 'getEndedAt', 'setEndedAt'], 'reason' => ['reason', 'getReason', 'setReason']];
    }
}