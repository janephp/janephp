<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SciSciProfileList implements AdditionalPropertiesInterface
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
     * @var list<SciSciProfile>
     */
    protected $list;
    /**
     * @var SciSciProfileListExtra
     */
    protected $extra;
    /**
     * @return list<SciSciProfile>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<SciSciProfile> $list
     *
     * @return self
     */
    public function setList(array $list): self
    {
        $this->initialized['list'] = true;
        $this->list = $list;
        return $this;
    }
    /**
     * @return SciSciProfileListExtra
     */
    public function getExtra(): SciSciProfileListExtra
    {
        return $this->extra;
    }
    /**
     * @param SciSciProfileListExtra $extra
     *
     * @return self
     */
    public function setExtra(SciSciProfileListExtra $extra): self
    {
        $this->initialized['extra'] = true;
        $this->extra = $extra;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['list' => ['list', 'getList', 'setList'], 'extra' => ['extra', 'getExtra', 'setExtra']];
    }
}