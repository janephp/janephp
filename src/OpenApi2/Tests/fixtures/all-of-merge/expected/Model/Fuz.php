<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class Fuz
{
    /**
     * A description
     *
     * @var string
     */
    protected $bar;
    /**
     * A description
     *
     * @return string
     */
    public function getBar() : string
    {
        return $this->bar;
    }
    /**
     * A description
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