<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AddRulesResponse extends \ArrayObject
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
     * @var Rule[]
     */
    protected $data;
    /**
     * 
     *
     * @var RulesResponseMetadata
     */
    protected $meta;
    /**
     * 
     *
     * @return Rule[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Rule[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return RulesResponseMetadata
     */
    public function getMeta() : RulesResponseMetadata
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param RulesResponseMetadata $meta
     *
     * @return self
     */
    public function setMeta(RulesResponseMetadata $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}