<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SatelliteOrbit implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A planet in the Scalar Galaxy
     *
     * @var Planet
     */
    public Planet $planet;
    /**
     * Orbital period in Earth days
     *
     * @var float
     */
    public float $orbitalPeriod;
    /**
     * Average distance from the planet in kilometers
     *
     * @var float
     */
    public float $distance;
    public function definedProperties(): array
    {
        return ['planet' => 'planet', 'orbitalPeriod' => 'orbitalPeriod', 'distance' => 'distance'];
    }
}