<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DeleteRulesResponse
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