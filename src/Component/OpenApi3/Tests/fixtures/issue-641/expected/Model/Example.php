<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Example implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $property1;
    /**
     * @return string|null
     */
    public function getProperty1(): ?string
    {
        return $this->property1;
    }
    /**
     * @param string|null $property1
     *
     * @return self
     */
    public function setProperty1(?string $property1): self
    {
        $this->initialized['property1'] = true;
        $this->property1 = $property1;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['property1' => ['property1', 'getProperty1', 'setProperty1']];
    }
}