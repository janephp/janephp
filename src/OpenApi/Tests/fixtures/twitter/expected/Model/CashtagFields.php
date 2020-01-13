<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class CashtagFields
{
    /**
     * 
     *
     * @var string
     */
    protected $tag;
    /**
     * 
     *
     * @return string
     */
    public function getTag() : string
    {
        return $this->tag;
    }
    /**
     * 
     *
     * @param string $tag
     *
     * @return self
     */
    public function setTag(string $tag) : self
    {
        $this->tag = $tag;
        return $this;
    }
}