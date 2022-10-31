<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class TestComplexListGetResponse200Item2
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
        $this->initialized['image32'] = true;
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
        $this->initialized['image64'] = true;
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
        $this->initialized['image128'] = true;
        $this->image128 = $image128;
        return $this;
    }
}