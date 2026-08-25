<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseLogsinks implements AdditionalPropertiesInterface
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
     * @var list<LogsinkSchema>
     */
    protected $sinks;
    /**
     * @return list<LogsinkSchema>
     */
    public function getSinks(): array
    {
        return $this->sinks;
    }
    /**
     * @param list<LogsinkSchema> $sinks
     *
     * @return self
     */
    public function setSinks(array $sinks): self
    {
        $this->initialized['sinks'] = true;
        $this->sinks = $sinks;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['sinks' => ['sinks', 'getSinks', 'setSinks']];
    }
}