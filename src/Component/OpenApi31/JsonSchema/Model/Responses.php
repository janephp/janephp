<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

use Jane\Component\OpenApi31\JsonSchema\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\JsonSchema\Runtime\AdditionalPropertiesInterface;
class Responses implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var mixed|null
     */
    protected $default;

    public function getDefault()
    {
        return $this->default;
    }

    public function setDefault($default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['default' => ['default', 'getDefault', 'setDefault']];
    }
}
