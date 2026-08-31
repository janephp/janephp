<?php

namespace Jane\Component\OpenApi31\Tests\DefaultAdditionalProps\Model;

use Jane\Component\OpenApi31\Tests\DefaultAdditionalProps\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\DefaultAdditionalProps\Runtime\AdditionalPropertiesInterface;
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