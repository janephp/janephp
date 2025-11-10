<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SplitTunnelSplitTunnelIpMaskRule
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
     * Destination IP of split tunnel profile rule
     *
     * @var string
     */
    protected $destinationIp;
    /**
     * Destination IP mask of split tunnel profile rule
     *
     * @var string
     */
    protected $destinationIpMask;
    /**
     * Destination IP of split tunnel profile rule
     *
     * @return string
     */
    public function getDestinationIp(): string
    {
        return $this->destinationIp;
    }
    /**
     * Destination IP of split tunnel profile rule
     *
     * @param string $destinationIp
     *
     * @return self
     */
    public function setDestinationIp(string $destinationIp): self
    {
        $this->initialized['destinationIp'] = true;
        $this->destinationIp = $destinationIp;
        return $this;
    }
    /**
     * Destination IP mask of split tunnel profile rule
     *
     * @return string
     */
    public function getDestinationIpMask(): string
    {
        return $this->destinationIpMask;
    }
    /**
     * Destination IP mask of split tunnel profile rule
     *
     * @param string $destinationIpMask
     *
     * @return self
     */
    public function setDestinationIpMask(string $destinationIpMask): self
    {
        $this->initialized['destinationIpMask'] = true;
        $this->destinationIpMask = $destinationIpMask;
        return $this;
    }
}