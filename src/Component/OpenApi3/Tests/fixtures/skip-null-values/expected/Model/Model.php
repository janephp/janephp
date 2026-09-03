<?php

namespace Jane\Component\OpenApi3\Tests\Expected\SkipNullValues\Model;

use Jane\Component\OpenApi3\Tests\Expected\SkipNullValues\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\SkipNullValues\Runtime\AdditionalPropertiesInterface;
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