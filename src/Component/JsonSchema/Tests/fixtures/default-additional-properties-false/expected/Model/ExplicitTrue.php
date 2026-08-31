<?php

namespace Jane\Component\JsonSchema\Tests\DefaultAdditionalPropsFalse\Model;

use Jane\Component\JsonSchema\Tests\DefaultAdditionalPropsFalse\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\Tests\DefaultAdditionalPropsFalse\Runtime\AdditionalPropertiesInterface;
class ExplicitTrue implements AdditionalPropertiesInterface
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
    protected $name;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName']];
    }
}