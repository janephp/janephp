<?php

namespace Jane\OpenApi3\Tests\Expected\Model;

class FooPostBody
{
    /**
     * 
     *
     * @var string
     */
    protected $file;
    /**
     * 
     *
     * @var int
     */
    protected $someNumber;
    /**
     * 
     *
     * @return string
     */
    public function getFile() : string
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param string $file
     *
     * @return self
     */
    public function setFile(string $file) : self
    {
        $this->file = $file;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSomeNumber() : int
    {
        return $this->someNumber;
    }
    /**
     * 
     *
     * @param int $someNumber
     *
     * @return self
     */
    public function setSomeNumber(int $someNumber) : self
    {
        $this->someNumber = $someNumber;
        return $this;
    }
}