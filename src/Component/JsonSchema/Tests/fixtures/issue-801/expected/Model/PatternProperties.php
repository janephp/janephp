<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

use Jane\Component\JsonSchema\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class PatternProperties implements AdditionalPropertiesInterface
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
     * @var int|null
     */
    protected $bar;
    /**
     * @return int|null
     */
    public function getBar(): ?int
    {
        return $this->bar;
    }
    /**
     * @param int|null $bar
     *
     * @return self
     */
    public function setBar(?int $bar): self
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