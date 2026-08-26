<?php

namespace Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model;

use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\AdditionalPropertiesInterface;
class FooBar implements AdditionalPropertiesInterface
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
     * @var Foo|Bar
     */
    protected $what;
    /**
     * @return Foo|Bar
     */
    public function getWhat()
    {
        return $this->what;
    }
    /**
     * @param Foo|Bar $what
     *
     * @return self
     */
    public function setWhat($what): self
    {
        $this->initialized['what'] = true;
        $this->what = $what;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['what' => ['what', 'getWhat', 'setWhat']];
    }
}