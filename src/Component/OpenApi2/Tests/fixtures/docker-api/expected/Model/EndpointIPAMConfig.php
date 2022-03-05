<?php

namespace Docker\Api\Model;

class EndpointIPAMConfig
{
    /**
     * 
     *
     * @var string
     */
    protected $iPv4Address;
    /**
     * 
     *
     * @var string
     */
    protected $iPv6Address;
    /**
     * 
     *
     * @var string[]
     */
    protected $linkLocalIPs;
    /**
     * 
     *
     * @return string
     */
    public function getIPv4Address() : string
    {
        return $this->iPv4Address;
    }
    /**
     * 
     *
     * @param string $iPv4Address
     *
     * @return self
     */
    public function setIPv4Address(string $iPv4Address) : self
    {
        $this->iPv4Address = $iPv4Address;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIPv6Address() : string
    {
        return $this->iPv6Address;
    }
    /**
     * 
     *
     * @param string $iPv6Address
     *
     * @return self
     */
    public function setIPv6Address(string $iPv6Address) : self
    {
        $this->iPv6Address = $iPv6Address;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getLinkLocalIPs() : array
    {
        return $this->linkLocalIPs;
    }
    /**
     * 
     *
     * @param string[] $linkLocalIPs
     *
     * @return self
     */
    public function setLinkLocalIPs(array $linkLocalIPs) : self
    {
        $this->linkLocalIPs = $linkLocalIPs;
        return $this;
    }
}