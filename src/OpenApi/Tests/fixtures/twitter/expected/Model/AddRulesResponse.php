<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class AddRulesResponse
{
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
        $this->meta = $meta;
        return $this;
    }
}