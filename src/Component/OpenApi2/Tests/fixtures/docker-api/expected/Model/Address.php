<?php

namespace Docker\Api\Model;

class Address
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
     * IP address.
     *
     * @var string
     */
    protected $addr;
    /**
     * Mask length of the IP address.
     *
     * @var int
     */
    protected $prefixLen;
    /**
     * IP address.
     *
     * @return string
     */
    public function getAddr() : string
    {
        return $this->addr;
    }
    /**
     * IP address.
     *
     * @param string $addr
     *
     * @return self
     */
    public function setAddr(string $addr) : self
    {
        $this->initialized['addr'] = true;
        $this->addr = $addr;
        return $this;
    }
    /**
     * Mask length of the IP address.
     *
     * @return int
     */
    public function getPrefixLen() : int
    {
        return $this->prefixLen;
    }
    /**
     * Mask length of the IP address.
     *
     * @param int $prefixLen
     *
     * @return self
     */
    public function setPrefixLen(int $prefixLen) : self
    {
        $this->initialized['prefixLen'] = true;
        $this->prefixLen = $prefixLen;
        return $this;
    }
}