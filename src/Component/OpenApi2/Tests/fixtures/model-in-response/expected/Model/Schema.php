<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model;

class Schema
{
    /**
     * @var string
     */
    public string $stringProperty;
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
}