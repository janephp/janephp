<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseClusterlintRun implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ID of the clusterlint run that can be used later to fetch the diagnostics.
     *
     * @var string
     */
    public string $runId;
    public function definedProperties(): array
    {
        return ['runId' => 'run_id'];
    }
}