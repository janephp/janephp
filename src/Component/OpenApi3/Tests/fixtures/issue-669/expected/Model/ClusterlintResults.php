<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterlintResults implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Id of the clusterlint run that can be used later to fetch the diagnostics.
     *
     * @var string
     */
    public string $runId;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the schedule clusterlint run request was made.
     *
     * @var \DateTime
     */
    public \DateTime $requestedAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the schedule clusterlint run request was completed.
     *
     * @var \DateTime
     */
    public \DateTime $completedAt;
    /**
     * An array of diagnostics reporting potential problems for the given cluster.
     *
     * @var list<ClusterlintResultsDiagnosticsItem>
     */
    public array $diagnostics;
    public function definedProperties(): array
    {
        return ['runId' => 'run_id', 'requestedAt' => 'requested_at', 'completedAt' => 'completed_at', 'diagnostics' => 'diagnostics'];
    }
}