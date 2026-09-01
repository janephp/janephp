<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RegionalState implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var RegionState
     */
    public RegionState $usEast;
    /**
     * @var RegionState
     */
    public RegionState $euWest;
    public function definedProperties(): array
    {
        return ['usEast' => 'us_east', 'euWest' => 'eu_west'];
    }
}