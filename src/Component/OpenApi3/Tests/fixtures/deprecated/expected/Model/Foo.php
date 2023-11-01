<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

/**
 *
 * @deprecated
 */
class Foo extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $bar;
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
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