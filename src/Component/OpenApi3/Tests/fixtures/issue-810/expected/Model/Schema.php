<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue810\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue810\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue810\Runtime\AdditionalPropertiesInterface;
class Schema implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $stringProperty;
    /**
     * @var \DateTime
     */
    public \DateTime $dateProperty;
    /**
     * @var int
     */
    public int $integerProperty;
    /**
     * @var float
     */
    public float $floatProperty;
    /**
     * @var list<mixed>
     */
    public array $arrayProperty;
    /**
     * @var array<string, string>
     */
    public iterable $mapProperty;
    /**
     * @var SchemaObjectProperty
     */
    public SchemaObjectProperty $objectProperty;
    /**
     * @var Schema
     */
    public Schema $objectRefProperty;
    public function definedProperties(): array
    {
        return ['stringProperty' => 'stringProperty', 'dateProperty' => 'dateProperty', 'integerProperty' => 'integerProperty', 'floatProperty' => 'floatProperty', 'arrayProperty' => 'arrayProperty', 'mapProperty' => 'mapProperty', 'objectProperty' => 'objectProperty', 'objectRefProperty' => 'objectRefProperty'];
    }
}