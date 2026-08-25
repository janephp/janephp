<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsListRegionsResponse implements AdditionalPropertiesInterface
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
     * @var list<AppsRegion>
     */
    protected $regions;
    /**
     * @return list<AppsRegion>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }
    /**
     * @param list<AppsRegion> $regions
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