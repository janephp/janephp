<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DeleteRulesResponse extends \ArrayObject
{
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
        $this->meta = $meta;
        return $this;
    }
}