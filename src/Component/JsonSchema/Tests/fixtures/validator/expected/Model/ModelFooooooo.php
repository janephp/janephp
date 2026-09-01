<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class ModelFooooooo
{
    /**
     * @var string
     */
    public string $enumString;
    /**
     * @var string
     */
    public string $enumArrayString;
    /**
     * @var mixed
     */
    public $enumNoType;
    /**
     * @var string
     */
    public string $constString;
    /**
     * @var string
     */
    public string $minLengthString;
    /**
     * @var string
     */
    public string $maxLengthString;
    /**
     * @var string
     */
    public string $minMaxLengthString;
    /**
     * @var string
     */
    public string $patternString;
    /**
     * @var list<string>
     */
    public array $arrayMinItems;
    /**
     * @var list<string>
     */
    public array $arrayMaxItems;
    /**
     * @var list<string>
     */
    public array $arrayMinMaxItems;
    /**
     * @var list<string>
     */
    public array $arrayUnique;
    /**
     * @var int
     */
    public int $numericMultipleOf;
    /**
     * @var int
     */
    public int $numericMaximum;
    /**
     * @var int
     */
    public int $numericExclusiveMaximum;
    /**
     * @var int
     */
    public int $numericMinimum;
    /**
     * @var int
     */
    public int $numericExclusiveMinimum;
    /**
     * @var string
     */
    public string $emailFormat;
    /**
     * @var string
     */
    public string $ipv4Format;
    /**
     * @var string
     */
    public string $ipv6Format;
    /**
     * @var string
     */
    public string $uriFormat;
    /**
     * @var string
     */
    public string $iriFormat;
    /**
     * @var string
     */
    public string $uuidFormat;
    /**
     * @var \DateTime
     */
    public \DateTime $dateFormat;
    /**
     * @var \DateTime|null
     */
    public ?\DateTime $dateNullableFormat;
    /**
     * @var \DateTime
     */
    public \DateTime $dateTimeFormat;
    /**
     * @var FooFooFoo
     */
    public FooFooFoo $foo;
    /**
     * @var list<mixed>
     */
    public array $arrayEmptyItems;
    /**
     * @var list<mixed>
     */
    public array $arrayBoolItems;
}