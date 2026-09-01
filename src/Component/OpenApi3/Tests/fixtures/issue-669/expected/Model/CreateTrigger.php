<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class CreateTrigger implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The trigger's unique name within the namespace.
     *
     * @var string
     */
    public string $name;
    /**
     * Name of function(action) that exists in the given namespace.
     *
     * @var string
     */
    public string $function;
    /**
     * One of different type of triggers. Currently only SCHEDULED is supported.
     *
     * @var string
     */
    public string $type;
    /**
     * Indicates weather the trigger is paused or unpaused.
     *
     * @var bool
     */
    public bool $isEnabled;
    /**
     * Trigger details for SCHEDULED type, where body is optional.
     * 
     *
     * @var ScheduledDetails
     */
    public ScheduledDetails $scheduledDetails;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'function' => 'function', 'type' => 'type', 'isEnabled' => 'is_enabled', 'scheduledDetails' => 'scheduled_details'];
    }
}