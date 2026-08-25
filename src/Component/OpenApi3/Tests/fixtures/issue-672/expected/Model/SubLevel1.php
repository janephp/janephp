<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SubLevel1 implements AdditionalPropertiesInterface
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
     * @var SubLevel2
     */
    protected $subLevel2;
    /**
     * @return SubLevel2
     */
    public function getSubLevel2(): SubLevel2
    {
        return $this->subLevel2;
    }
    /**
     * @param SubLevel2 $subLevel2
     *
     * @return self
     */
    public function setSubLevel2(SubLevel2 $subLevel2): self
    {
        $this->initialized['subLevel2'] = true;
        $this->subLevel2 = $subLevel2;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['subLevel2' => ['subLevel-2', 'getSubLevel2', 'setSubLevel2']];
    }
}