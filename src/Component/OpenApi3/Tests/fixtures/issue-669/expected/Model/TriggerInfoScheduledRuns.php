<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class TriggerInfoScheduledRuns implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Indicates last run time. null value indicates trigger not run yet.
     *
     * @var string|null
     */
    public ?string $lastRunAt;
    /**
     * Indicates next run time. null value indicates trigger will not run.
     *
     * @var string|null
     */
    public ?string $nextRunAt;
    public function definedProperties(): array
    {
        return ['lastRunAt' => 'last_run_at', 'nextRunAt' => 'next_run_at'];
    }
}