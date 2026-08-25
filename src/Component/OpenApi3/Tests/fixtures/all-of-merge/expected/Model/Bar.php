<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Bar implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $bar;
    /**
     * @return string
     */
    public function getBar(): string
    {
        return $this->bar;
    }
    /**
     * @param string $bar
     *
     * @return self
     */
    public function setBar(string $bar): self
    {
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['bar' => ['bar', 'getBar', 'setBar']];
    }
}