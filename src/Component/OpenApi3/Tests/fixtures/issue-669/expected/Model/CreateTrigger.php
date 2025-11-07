<?php

namespace Jane\Generated\DigitalOcean\Model;

class CreateTrigger extends \ArrayObject
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
     * One of different type of triggers. Currently only SCHEDULED is supported.
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
     * Trigger details for SCHEDULED type, where body is optional.
     * 
     *
     * @var ScheduledDetails
     */
    protected $scheduledDetails;
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
     * One of different type of triggers. Currently only SCHEDULED is supported.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * One of different type of triggers. Currently only SCHEDULED is supported.
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
}