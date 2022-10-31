<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DeleteRulesRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string[]
     */
    protected $ids;
    /**
     * 
     *
     * @var string[]
     */
    protected $values;
    /**
     * 
     *
     * @return string[]
     */
    public function getIds() : array
    {
        return $this->ids;
    }
    /**
     * 
     *
     * @param string[] $ids
     *
     * @return self
     */
    public function setIds(array $ids) : self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param string[] $values
     *
     * @return self
     */
    public function setValues(array $values) : self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}