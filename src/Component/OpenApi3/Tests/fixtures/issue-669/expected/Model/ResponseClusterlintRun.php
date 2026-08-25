<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseClusterlintRun implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * ID of the clusterlint run that can be used later to fetch the diagnostics.
     *
     * @var string
     */
    protected $runId;
    /**
     * ID of the clusterlint run that can be used later to fetch the diagnostics.
     *
     * @return string
     */
    public function getRunId(): string
    {
        return $this->runId;
    }
    /**
     * ID of the clusterlint run that can be used later to fetch the diagnostics.
     *
     * @param string $runId
     *
     * @return self
     */
    public function setRunId(string $runId): self
    {
        $this->initialized['runId'] = true;
        $this->runId = $runId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['runId' => ['run_id', 'getRunId', 'setRunId']];
    }
}