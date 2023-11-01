<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AddRulesRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var RuleNoId[]
     */
    protected $add;
    /**
     * 
     *
     * @return RuleNoId[]
     */
    public function getAdd() : array
    {
        return $this->add;
    }
    /**
     * 
     *
     * @param RuleNoId[] $add
     *
     * @return self
     */
    public function setAdd(array $add) : self
    {
        $this->initialized['add'] = true;
        $this->add = $add;
        return $this;
    }
}