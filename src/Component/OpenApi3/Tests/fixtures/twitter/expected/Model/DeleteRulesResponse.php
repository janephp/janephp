<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DeleteRulesResponse extends \ArrayObject
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
     * @var RulesResponseMetadata
     */
    protected $meta;
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