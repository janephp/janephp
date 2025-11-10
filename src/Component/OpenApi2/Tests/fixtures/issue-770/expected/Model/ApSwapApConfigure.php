<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApSwapApConfigure
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $swapInMac;
    /**
     * @var string
     */
    protected $swapOutMac;
    /**
     * @return string
     */
    public function getSwapInMac(): string
    {
        return $this->swapInMac;
    }
    /**
     * @param string $swapInMac
     *
     * @return self
     */
    public function setSwapInMac(string $swapInMac): self
    {
        $this->initialized['swapInMac'] = true;
        $this->swapInMac = $swapInMac;
        return $this;
    }
    /**
     * @return string
     */
    public function getSwapOutMac(): string
    {
        return $this->swapOutMac;
    }
    /**
     * @param string $swapOutMac
     *
     * @return self
     */
    public function setSwapOutMac(string $swapOutMac): self
    {
        $this->initialized['swapOutMac'] = true;
        $this->swapOutMac = $swapOutMac;
        return $this;
    }
}