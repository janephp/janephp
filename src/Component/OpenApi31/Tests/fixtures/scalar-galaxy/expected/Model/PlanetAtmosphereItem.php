<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model;

use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalPropertiesInterface;
class PlanetAtmosphereItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $compound;
    /**
     * @var float
     */
    public float $percentage;
    public function definedProperties(): array
    {
        return ['compound' => 'compound', 'percentage' => 'percentage'];
    }
}