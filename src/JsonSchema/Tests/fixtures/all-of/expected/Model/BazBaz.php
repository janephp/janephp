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