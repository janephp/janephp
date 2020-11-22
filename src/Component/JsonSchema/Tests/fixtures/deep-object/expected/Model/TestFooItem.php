<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class TestFooItem
{
    /**
     * 
     *
     * @var string
     */
    protected $bar;
    /**
     * 
     *
     * @return string
     */
    public function getBar() : string
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param string $bar
     *
     * @return self
     */
    public function setBar(string $bar) : self
    {
        $this->bar = $bar;
        return $this;
    }
}