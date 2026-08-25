<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDeploymentProgressStep implements AdditionalPropertiesInterface
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
    protected $componentName;
    /**
     * @var \DateTime
     */
    protected $endedAt;
    /**
     * The base of a human-readable description of the step intended to be combined with the component name for presentation. For example:
     * 
     * `message_base` = "Building service"
     * `component_name` = "api"
     *
     * @var string
     */
    protected $messageBase;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var AppsDeploymentProgressStepReason
     */
    protected $reason;
    /**
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * @var string
     */
    protected $status = 'UNKNOWN';
    /**
     * @var list<array<string, mixed>>
     */
    protected $steps;
    /**
     * @return string
     */
    public function getComponentName(): string
    {
        return $this->componentName;
    }
    /**
     * @param string $componentName
     *
     * @return self
     */
    public function setComponentName(string $componentName): self
    {
        $this->initialized['componentName'] = true;
        $this->componentName = $componentName;
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
     * The base of a human-readable description of the step intended to be combined with the component name for presentation. For example:
     * 
     * `message_base` = "Building service"
     * `component_name` = "api"
     *
     * @return string
     */
    public function getMessageBase(): string
    {
        return $this->messageBase;
    }
    /**
    * The base of a human-readable description of the step intended to be combined with the component name for presentation. For example:
    
    `message_base` = "Building service"
    `component_name` = "api"
    *
    * @param string $messageBase
    *
    * @return self
    */
    public function setMessageBase(string $messageBase): self
    {
        $this->initialized['messageBase'] = true;
        $this->messageBase = $messageBase;
        return $this;
    }
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
     * @return AppsDeploymentProgressStepReason
     */
    public function getReason(): AppsDeploymentProgressStepReason
    {
        return $this->reason;
    }
    /**
     * @param AppsDeploymentProgressStepReason $reason
     *
     * @return self
     */
    public function setReason(AppsDeploymentProgressStepReason $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
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
     * @return list<array<string, mixed>>
     */
    public function getSteps(): array
    {
        return $this->steps;
    }
    /**
     * @param list<array<string, mixed>> $steps
     *
     * @return self
     */
    public function setSteps(array $steps): self
    {
        $this->initialized['steps'] = true;
        $this->steps = $steps;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['componentName' => ['component_name', 'getComponentName', 'setComponentName'], 'endedAt' => ['ended_at', 'getEndedAt', 'setEndedAt'], 'messageBase' => ['message_base', 'getMessageBase', 'setMessageBase'], 'name' => ['name', 'getName', 'setName'], 'reason' => ['reason', 'getReason', 'setReason'], 'startedAt' => ['started_at', 'getStartedAt', 'setStartedAt'], 'status' => ['status', 'getStatus', 'setStatus'], 'steps' => ['steps', 'getSteps', 'setSteps']];
    }
}