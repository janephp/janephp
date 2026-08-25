<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocationTrigger implements AdditionalPropertiesInterface
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
     * The type of trigger that initiated the job invocation.
     *
     * @var string
     */
    protected $type = 'UNKNOWN';
    /**
     * The schedule for the job
     *
     * @var AppJobInvocationTriggerScheduled
     */
    protected $scheduled;
    /**
     * Details about the manual trigger, if applicable
     *
     * @var AppJobInvocationTriggerManual
     */
    protected $manual;
    /**
     * The type of trigger that initiated the job invocation.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of trigger that initiated the job invocation.
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
     * The schedule for the job
     *
     * @return AppJobInvocationTriggerScheduled
     */
    public function getScheduled(): AppJobInvocationTriggerScheduled
    {
        return $this->scheduled;
    }
    /**
     * The schedule for the job
     *
     * @param AppJobInvocationTriggerScheduled $scheduled
     *
     * @return self
     */
    public function setScheduled(AppJobInvocationTriggerScheduled $scheduled): self
    {
        $this->initialized['scheduled'] = true;
        $this->scheduled = $scheduled;
        return $this;
    }
    /**
     * Details about the manual trigger, if applicable
     *
     * @return AppJobInvocationTriggerManual
     */
    public function getManual(): AppJobInvocationTriggerManual
    {
        return $this->manual;
    }
    /**
     * Details about the manual trigger, if applicable
     *
     * @param AppJobInvocationTriggerManual $manual
     *
     * @return self
     */
    public function setManual(AppJobInvocationTriggerManual $manual): self
    {
        $this->initialized['manual'] = true;
        $this->manual = $manual;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'scheduled' => ['scheduled', 'getScheduled', 'setScheduled'], 'manual' => ['manual', 'getManual', 'setManual']];
    }
}