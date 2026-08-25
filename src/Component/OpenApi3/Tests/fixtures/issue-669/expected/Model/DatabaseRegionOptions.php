<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseRegionOptions implements AdditionalPropertiesInterface
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
     * An array of strings containing the names of available regions
     *
     * @var list<string>
     */
    protected $regions;
    /**
     * An array of strings containing the names of available regions
     *
     * @return list<string>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }
    /**
     * An array of strings containing the names of available regions
     *
     * @param list<string> $regions
     *
     * @return self
     */
    public function setRegions(array $regions): self
    {
        $this->initialized['regions'] = true;
        $this->regions = $regions;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['regions' => ['regions', 'getRegions', 'setRegions']];
    }
}