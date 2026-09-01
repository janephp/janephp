<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocationTrigger implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of trigger that initiated the job invocation.
     *
     * @var string
     */
    public string $type = 'UNKNOWN';
    /**
     * The schedule for the job
     *
     * @var AppJobInvocationTriggerScheduled
     */
    public AppJobInvocationTriggerScheduled $scheduled;
    /**
     * Details about the manual trigger, if applicable
     *
     * @var AppJobInvocationTriggerManual
     */
    public AppJobInvocationTriggerManual $manual;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'scheduled' => 'scheduled', 'manual' => 'manual'];
    }
}