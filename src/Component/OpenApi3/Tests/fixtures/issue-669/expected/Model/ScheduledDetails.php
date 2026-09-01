<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ScheduledDetails implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * valid cron expression string which is required for SCHEDULED type triggers.
     *
     * @var string
     */
    public string $cron;
    /**
     * Optional data to be sent to function while triggering the function.
     *
     * @var ScheduledDetailsBody|null
     */
    public ?ScheduledDetailsBody $body;
    public function definedProperties(): array
    {
        return ['cron' => 'cron', 'body' => 'body'];
    }
}