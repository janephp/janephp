<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Schema implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $attribute1;
    /**
     * @var string|null
     */
    public ?string $attribute2;
    /**
     * @var string
     */
    public string $attribute3;
    /**
     * @var string|null
     */
    public ?string $attribute4;
    /**
     * @var string
     */
    public string $stringProperty;
    /**
     * @var \DateTime
     */
    public \DateTime $dateProperty;
    /**
     * @var \DateTime|null
     */
    public ?\DateTime $dateNullableProperty;
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
        return ['attribute1' => 'attribute1', 'attribute2' => 'attribute2', 'attribute3' => 'attribute3', 'attribute4' => 'attribute4', 'stringProperty' => 'stringProperty', 'dateProperty' => 'dateProperty', 'dateNullableProperty' => 'dateNullableProperty', 'integerProperty' => 'integerProperty', 'floatProperty' => 'floatProperty', 'arrayProperty' => 'arrayProperty', 'mapProperty' => 'mapProperty', 'objectProperty' => 'objectProperty', 'objectRefProperty' => 'objectRefProperty'];
    }
}