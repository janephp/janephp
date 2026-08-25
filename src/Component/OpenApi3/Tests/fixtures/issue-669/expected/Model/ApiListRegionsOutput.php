<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListRegionsOutput implements AdditionalPropertiesInterface
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
     * Region code
     *
     * @var list<GenaiapiRegion>
     */
    protected $regions;
    /**
     * Region code
     *
     * @return list<GenaiapiRegion>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }
    /**
     * Region code
     *
     * @param list<GenaiapiRegion> $regions
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