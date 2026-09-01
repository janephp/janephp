<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Satellite implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string|null
     */
    public ?string $description;
    /**
     * Diameter in kilometers
     *
     * @var float
     */
    public float $diameter;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var SatelliteOrbit
     */
    public SatelliteOrbit $orbit;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'description' => 'description', 'diameter' => 'diameter', 'type' => 'type', 'orbit' => 'orbit'];
    }
}