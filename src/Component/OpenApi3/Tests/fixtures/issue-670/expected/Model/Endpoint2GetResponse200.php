<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Endpoint2GetResponse200 implements AdditionalPropertiesInterface
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
    protected $field2;
    /**
     * @return string
     */
    public function getField2(): string
    {
        return $this->field2;
    }
    /**
     * @param string $field2
     *
     * @return self
     */
    public function setField2(string $field2): self
    {
        $this->initialized['field2'] = true;
        $this->field2 = $field2;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['field2' => ['field-2', 'getField2', 'setField2']];
    }
}