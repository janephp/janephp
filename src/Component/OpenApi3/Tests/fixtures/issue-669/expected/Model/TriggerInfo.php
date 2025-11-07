<?php

namespace Jane\Generated\DigitalOcean\Model;

class TriggerInfo extends \ArrayObject
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
     * A unique string format of UUID with a prefix fn-.
     *
     * @var string
     */
    protected $namespace;
    /**
     * The trigger's unique name within the namespace.
     *
     * @var string
     */
    protected $name;
    /**
     * Name of function(action) that exists in the given namespace.
     *
     * @var string
     */
    protected $function;
    /**
     * String which indicates the type of trigger source like SCHEDULED.
     *
     * @var string
     */
    protected $type;
    /**
     * Indicates weather the trigger is paused or unpaused.
     *
     * @var bool
     */
    protected $isEnabled;
    /**
     * UTC time string.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * UTC time string.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Trigger details for SCHEDULED type, where body is optional.
     * 
     *
     * @var ScheduledDetails
     */
    protected $scheduledDetails;
    /**
     * @var TriggerInfoScheduledRuns
     */
    protected $scheduledRuns;
    /**
     * A unique string format of UUID with a prefix fn-.
     *
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }
    /**
     * A unique string format of UUID with a prefix fn-.
     *
     * @param string $namespace
     *
     * @return self
     */
    public function setNamespace(string $namespace): self
    {
        $this->initialized['namespace'] = true;
        $this->namespace = $namespace;
        return $this;
    }
    /**
     * The trigger's unique name within the namespace.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The trigger's unique name within the namespace.
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
     * Name of function(action) that exists in the given namespace.
     *
     * @return string
     */
    public function getFunction(): string
    {
        return $this->function;
    }
    /**
     * Name of function(action) that exists in the given namespace.
     *
     * @param string $function
     *
     * @return self
     */
    public function setFunction(string $function): self
    {
        $this->initialized['function'] = true;
        $this->function = $function;
        return $this;
    }
    /**
     * String which indicates the type of trigger source like SCHEDULED.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * String which indicates the type of trigger source like SCHEDULED.
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
     * Indicates weather the trigger is paused or unpaused.
     *
     * @return bool
     */
    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }
    /**
     * Indicates weather the trigger is paused or unpaused.
     *
     * @param bool $isEnabled
     *
     * @return self
     */
    public function setIsEnabled(bool $isEnabled): self
    {
        $this->initialized['isEnabled'] = true;
        $this->isEnabled = $isEnabled;
        return $this;
    }
    /**
     * UTC time string.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * UTC time string.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * UTC time string.
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * UTC time string.
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Trigger details for SCHEDULED type, where body is optional.
     * 
     *
     * @return ScheduledDetails
     */
    public function getScheduledDetails(): ScheduledDetails
    {
        return $this->scheduledDetails;
    }
    /**
     * Trigger details for SCHEDULED type, where body is optional.
     *
     * @param ScheduledDetails $scheduledDetails
     *
     * @return self
     */
    public function setScheduledDetails(ScheduledDetails $scheduledDetails): self
    {
        $this->initialized['scheduledDetails'] = true;
        $this->scheduledDetails = $scheduledDetails;
        return $this;
    }
    /**
     * @return TriggerInfoScheduledRuns
     */
    public function getScheduledRuns(): TriggerInfoScheduledRuns
    {
        return $this->scheduledRuns;
    }
    /**
     * @param TriggerInfoScheduledRuns $scheduledRuns
     *
     * @return self
     */
    public function setScheduledRuns(TriggerInfoScheduledRuns $scheduledRuns): self
    {
        $this->initialized['scheduledRuns'] = true;
        $this->scheduledRuns = $scheduledRuns;
        return $this;
    }
}