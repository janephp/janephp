<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model;

use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalPropertiesInterface;
class PlanetPhysicalPropertiesTemperature implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Minimum temperature in Kelvin
     *
     * @var float
     */
    public float $min;
    /**
     * Maximum temperature in Kelvin
     *
     * @var float
     */
    public float $max;
    /**
     * Average temperature in Kelvin
     *
     * @var float
     */
    public float $average;
    public function definedProperties(): array
    {
        return ['min' => 'min', 'max' => 'max', 'average' => 'average'];
    }
}