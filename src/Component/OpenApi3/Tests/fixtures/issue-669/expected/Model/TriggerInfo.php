<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class TriggerInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique string format of UUID with a prefix fn-.
     *
     * @var string
     */
    public string $namespace;
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
     * String which indicates the type of trigger source like SCHEDULED.
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
     * UTC time string.
     *
     * @var string
     */
    public string $createdAt;
    /**
     * UTC time string.
     *
     * @var string
     */
    public string $updatedAt;
    /**
     * Trigger details for SCHEDULED type, where body is optional.
     * 
     *
     * @var ScheduledDetails
     */
    public ScheduledDetails $scheduledDetails;
    /**
     * @var TriggerInfoScheduledRuns
     */
    public TriggerInfoScheduledRuns $scheduledRuns;
    public function definedProperties(): array
    {
        return ['namespace' => 'namespace', 'name' => 'name', 'function' => 'function', 'type' => 'type', 'isEnabled' => 'is_enabled', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at', 'scheduledDetails' => 'scheduled_details', 'scheduledRuns' => 'scheduled_runs'];
    }
}