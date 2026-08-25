<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseListSinks implements AdditionalPropertiesInterface
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
     * List of sinks identified by their URNs.
     *
     * @var list<SinksResponse>
     */
    protected $sinks;
    /**
     * List of sinks identified by their URNs.
     *
     * @return list<SinksResponse>
     */
    public function getSinks(): array
    {
        return $this->sinks;
    }
    /**
     * List of sinks identified by their URNs.
     *
     * @param list<SinksResponse> $sinks
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