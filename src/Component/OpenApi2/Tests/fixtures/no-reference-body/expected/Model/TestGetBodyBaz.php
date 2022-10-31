<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class TestGetBodyBaz
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
     * 
     *
     * @var string
     */
    protected $baz;
    /**
     * 
     *
     * @return string
     */
    public function getBaz() : string
    {
        return $this->baz;
    }
    /**
     * 
     *
     * @param string $baz
     *
     * @return self
     */
    public function setBaz(string $baz) : self
    {
        $this->initialized['baz'] = true;
        $this->baz = $baz;
        return $this;
    }
}