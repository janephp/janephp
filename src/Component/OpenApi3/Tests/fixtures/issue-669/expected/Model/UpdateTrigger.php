<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class UpdateTrigger implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
        return ['isEnabled' => 'is_enabled', 'scheduledDetails' => 'scheduled_details'];
    }
}