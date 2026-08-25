<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class State implements AdditionalPropertiesInterface
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
     * A map of region to regional state
     *
     * @var RegionalState
     */
    protected $regions;
    /**
     * @var PreviousOutage
     */
    protected $previousOutage;
    /**
     * A map of region to regional state
     *
     * @return RegionalState
     */
    public function getRegions(): RegionalState
    {
        return $this->regions;
    }
    /**
     * A map of region to regional state
     *
     * @param RegionalState $regions
     *
     * @return self
     */
    public function setRegions(RegionalState $regions): self
    {
        $this->initialized['regions'] = true;
        $this->regions = $regions;
        return $this;
    }
    /**
     * @return PreviousOutage
     */
    public function getPreviousOutage(): PreviousOutage
    {
        return $this->previousOutage;
    }
    /**
     * @param PreviousOutage $previousOutage
     *
     * @return self
     */
    public function setPreviousOutage(PreviousOutage $previousOutage): self
    {
        $this->initialized['previousOutage'] = true;
        $this->previousOutage = $previousOutage;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['regions' => ['regions', 'getRegions', 'setRegions'], 'previousOutage' => ['previous_outage', 'getPreviousOutage', 'setPreviousOutage']];
    }
}