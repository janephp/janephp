<?php

namespace Docker\Api\Model;

class SystemInfoDefaultAddressPoolsItem
{
    /**
     * The network address in CIDR format
     *
     * @var string
     */
    protected $base;
    /**
     * The network pool size
     *
     * @var int
     */
    protected $size;
    /**
     * The network address in CIDR format
     *
     * @return string
     */
    public function getBase() : string
    {
        return $this->base;
    }
    /**
     * The network address in CIDR format
     *
     * @param string $base
     *
     * @return self
     */
    public function setBase(string $base) : self
    {
        $this->base = $base;
        return $this;
    }
    /**
     * The network pool size
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * The network pool size
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->size = $size;
        return $this;
    }
}