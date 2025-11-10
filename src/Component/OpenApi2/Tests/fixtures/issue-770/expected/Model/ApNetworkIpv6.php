<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApNetworkIpv6
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
     * Indicates how the AP's IP address was obtained. An AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @var string
     */
    protected $ipType;
    /**
     * @var string
     */
    protected $ip;
    /**
     * @var string
     */
    protected $gateway;
    /**
     * @var string
     */
    protected $primaryDns;
    /**
     * @var string
     */
    protected $secondaryDns;
    /**
     * Indicates how the AP's IP address was obtained. An AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @return string
     */
    public function getIpType(): string
    {
        return $this->ipType;
    }
    /**
     * Indicates how the AP's IP address was obtained. An AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @param string $ipType
     *
     * @return self
     */
    public function setIpType(string $ipType): self
    {
        $this->initialized['ipType'] = true;
        $this->ipType = $ipType;
        return $this;
    }
    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * @return string
     */
    public function getGateway(): string
    {
        return $this->gateway;
    }
    /**
     * @param string $gateway
     *
     * @return self
     */
    public function setGateway(string $gateway): self
    {
        $this->initialized['gateway'] = true;
        $this->gateway = $gateway;
        return $this;
    }
    /**
     * @return string
     */
    public function getPrimaryDns(): string
    {
        return $this->primaryDns;
    }
    /**
     * @param string $primaryDns
     *
     * @return self
     */
    public function setPrimaryDns(string $primaryDns): self
    {
        $this->initialized['primaryDns'] = true;
        $this->primaryDns = $primaryDns;
        return $this;
    }
    /**
     * @return string
     */
    public function getSecondaryDns(): string
    {
        return $this->secondaryDns;
    }
    /**
     * @param string $secondaryDns
     *
     * @return self
     */
    public function setSecondaryDns(string $secondaryDns): self
    {
        $this->initialized['secondaryDns'] = true;
        $this->secondaryDns = $secondaryDns;
        return $this;
    }
}