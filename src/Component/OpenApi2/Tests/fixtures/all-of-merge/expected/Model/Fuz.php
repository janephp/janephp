<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class Fuz
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
}