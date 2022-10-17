<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CashtagFields extends \ArrayObject
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