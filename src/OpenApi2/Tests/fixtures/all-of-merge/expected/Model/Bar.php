<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class Bar
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
