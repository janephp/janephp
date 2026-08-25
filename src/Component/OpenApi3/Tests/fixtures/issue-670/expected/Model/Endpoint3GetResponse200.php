<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Endpoint3GetResponse200 implements AdditionalPropertiesInterface
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
     * @var Endpoint3GetResponse200Field3
     */
    protected $field3;
    /**
     * @return Endpoint3GetResponse200Field3
     */
    public function getField3(): Endpoint3GetResponse200Field3
    {
        return $this->field3;
    }
    /**
     * @param Endpoint3GetResponse200Field3 $field3
     *
     * @return self
     */
    public function setField3(Endpoint3GetResponse200Field3 $field3): self
    {
        $this->initialized['field3'] = true;
        $this->field3 = $field3;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['field3' => ['field-3', 'getField3', 'setField3']];
    }
}