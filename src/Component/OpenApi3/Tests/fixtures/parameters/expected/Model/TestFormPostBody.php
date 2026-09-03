<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Parameters\Model;

use Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\AdditionalPropertiesInterface;
class TestFormPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $testString;
    /**
     * @var int
     */
    public int $testInteger;
    /**
     * @var float
     */
    public float $testFloat;
    /**
     * @var list<mixed>
     */
    public array $testArray;
    /**
     * @var string
     */
    public string $testRequired;
    /**
     * @var string
     */
    public string $testDefault = 'test';
    public function definedProperties(): array
    {
        return ['testString' => 'testString', 'testInteger' => 'testInteger', 'testFloat' => 'testFloat', 'testArray' => 'testArray', 'testRequired' => 'testRequired', 'testDefault' => 'testDefault'];
    }
}