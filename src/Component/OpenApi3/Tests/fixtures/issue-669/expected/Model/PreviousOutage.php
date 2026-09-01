<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PreviousOutage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $region;
    /**
     * @var string
     */
    public string $startedAt;
    /**
     * @var string
     */
    public string $endedAt;
    /**
     * @var int
     */
    public int $durationSeconds;
    public function definedProperties(): array
    {
        return ['region' => 'region', 'startedAt' => 'started_at', 'endedAt' => 'ended_at', 'durationSeconds' => 'duration_seconds'];
    }
}