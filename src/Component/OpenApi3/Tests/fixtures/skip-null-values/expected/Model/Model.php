<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Model extends \ArrayObject
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
     * @var string|null
     */
    protected $foo;
    /**
     * 
     *
     * @var string
     */
    protected $bar;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $date;
    /**
     * 
     *
     * @return string|null
     */
    public function getFoo() : ?string
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param string|null $foo
     *
     * @return self
     */
    public function setFoo(?string $foo) : self
    {
        $this->initialized['foo'] = true;
        $this->foo = $foo;
        return $this;
    }
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
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param \DateTime|null $date
     *
     * @return self
     */
    public function setDate(?\DateTime $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
}