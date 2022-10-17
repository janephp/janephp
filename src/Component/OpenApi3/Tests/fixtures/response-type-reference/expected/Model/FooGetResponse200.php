<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class FooGetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $bar;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
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
        $this->bar = $bar;
        return $this;
    }
}