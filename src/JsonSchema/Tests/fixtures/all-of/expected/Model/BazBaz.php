<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class BazBaz
{
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
        $this->baz = $baz;
        return $this;
    }
}