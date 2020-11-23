<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class TestComplexListGetResponse200Item2
{
    /**
     * 
     *
     * @var string
     */
    protected $image32;
    /**
     * 
     *
     * @var string
     */
    protected $image64;
    /**
     * 
     *
     * @var string
     */
    protected $image128;
    /**
     * 
     *
     * @return string
     */
    public function getImage32() : string
    {
        return $this->image32;
    }
    /**
     * 
     *
     * @param string $image32
     *
     * @return self
     */
    public function setImage32(string $image32) : self
    {
        $this->image32 = $image32;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImage64() : string
    {
        return $this->image64;
    }
    /**
     * 
     *
     * @param string $image64
     *
     * @return self
     */
    public function setImage64(string $image64) : self
    {
        $this->image64 = $image64;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImage128() : string
    {
        return $this->image128;
    }
    /**
     * 
     *
     * @param string $image128
     *
     * @return self
     */
    public function setImage128(string $image128) : self
    {
        $this->image128 = $image128;
        return $this;
    }
}