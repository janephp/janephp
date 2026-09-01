<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class State implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A map of region to regional state
     *
     * @var RegionalState
     */
    public RegionalState $regions;
    /**
     * @var PreviousOutage
     */
    public PreviousOutage $previousOutage;
    public function definedProperties(): array
    {
        return ['regions' => 'regions', 'previousOutage' => 'previous_outage'];
    }
}