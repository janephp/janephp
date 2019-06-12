<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class TestGetBodyBaz
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
     * @return string|null
     */
    public function getBaz() : ?string
    {
        return $this->baz;
    }
    /**
     * 
     *
     * @param string|null $baz
     *
     * @return self
     */
    public function setBaz(?string $baz) : self
    {
        $this->baz = $baz;
        return $this;
    }
}