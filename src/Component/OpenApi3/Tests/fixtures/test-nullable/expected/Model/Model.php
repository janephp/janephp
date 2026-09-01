<?php

namespace Jane\Component\OpenApi3\Tests\Expected\TestNullable\Model;

use Jane\Component\OpenApi3\Tests\Expected\TestNullable\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\TestNullable\Runtime\AdditionalPropertiesInterface;
class Model implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $foo;
    /**
     * @var string
     */
    public string $bar;
    /**
     * @var \DateTime|null
     */
    public ?\DateTime $date;
    public function definedProperties(): array
    {
        return ['foo' => 'foo', 'bar' => 'bar', 'date' => 'date'];
    }
}