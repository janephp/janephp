<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AprulesSubnet
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
    protected $networkAddress;
    /**
     * subnetMask
     *
     * @var string
     */
    protected $subnetMask;
    /**
     * @return string
     */
    public function getNetworkAddress(): string
    {
        return $this->networkAddress;
    }
    /**
     * @param string $networkAddress
     *
     * @return self
     */
    public function setNetworkAddress(string $networkAddress): self
    {
        $this->initialized['networkAddress'] = true;
        $this->networkAddress = $networkAddress;
        return $this;
    }
    /**
     * subnetMask
     *
     * @return string
     */
    public function getSubnetMask(): string
    {
        return $this->subnetMask;
    }
    /**
     * subnetMask
     *
     * @param string $subnetMask
     *
     * @return self
     */
    public function setSubnetMask(string $subnetMask): self
    {
        $this->initialized['subnetMask'] = true;
        $this->subnetMask = $subnetMask;
        return $this;
    }
}