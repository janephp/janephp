<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppAlertProgressStep implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $status = 'UNKNOWN';
    /**
     * @var \DateTime
     */
    public \DateTime $startedAt;
    /**
     * @var \DateTime
     */
    public \DateTime $endedAt;
    /**
     * @var AppAlertProgressStepReason
     */
    public AppAlertProgressStepReason $reason;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'status' => 'status', 'startedAt' => 'started_at', 'endedAt' => 'ended_at', 'reason' => 'reason'];
    }
}