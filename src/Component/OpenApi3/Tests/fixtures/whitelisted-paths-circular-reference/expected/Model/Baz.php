<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Baz extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var SubBaz
     */
    protected $sub;
    /**
     * 
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return SubBaz
     */
    public function getSub() : SubBaz
    {
        return $this->sub;
    }
    /**
     * 
     *
     * @param SubBaz $sub
     *
     * @return self
     */
    public function setSub(SubBaz $sub) : self
    {
        $this->sub = $sub;
        return $this;
    }
}