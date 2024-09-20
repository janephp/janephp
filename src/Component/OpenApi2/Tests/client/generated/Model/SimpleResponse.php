<?php

namespace Jane\Component\OpenApi2\Tests\Client\Model;

class SimpleResponse
{
    /**
<<<<<<< HEAD
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
||||||| parent of 6c3127df5 (Update fixtures for tests)
     * 
     *
=======
>>>>>>> 6c3127df5 (Update fixtures for tests)
     * @var string
     */
    protected $foo;
    /**
     * @var bool
     */
    protected $baz;
    /**
     * @return string
     */
    public function getFoo(): string
    {
        return $this->foo;
    }
    /**
     * @param string $foo
     *
     * @return self
     */
    public function setFoo(string $foo): self
    {
        $this->initialized['foo'] = true;
        $this->foo = $foo;
        return $this;
    }
    /**
     * @return bool
     */
    public function getBaz(): bool
    {
        return $this->baz;
    }
    /**
     * @param bool $baz
     *
     * @return self
     */
    public function setBaz(bool $baz): self
    {
        $this->initialized['baz'] = true;
        $this->baz = $baz;
        return $this;
    }
}