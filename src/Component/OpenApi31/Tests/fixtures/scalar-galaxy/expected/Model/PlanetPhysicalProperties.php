<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model;

use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalPropertiesInterface;
class PlanetPhysicalProperties implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Mass in Earth masses (must be greater than 0)
     *
     * @var float
     */
    public float $mass;
    /**
     * Radius in Earth radii (must be greater than 0)
     *
     * @var float
     */
    public float $radius;
    /**
     * Surface gravity in Earth g
     *
     * @var float
     */
    public float $gravity;
    /**
     * @var PlanetPhysicalPropertiesTemperature
     */
    public PlanetPhysicalPropertiesTemperature $temperature;
    public function definedProperties(): array
    {
        return ['mass' => 'mass', 'radius' => 'radius', 'gravity' => 'gravity', 'temperature' => 'temperature'];
    }
}