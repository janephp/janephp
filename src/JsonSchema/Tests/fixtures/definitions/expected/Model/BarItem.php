<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class BarItem
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
     * @return string|null
     */
    public function getBar() : ?string
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param string|null $bar
     *
     * @return self
     */
    public function setBar(?string $bar) : self
    {
        $this->bar = $bar;
        return $this;
    }
}