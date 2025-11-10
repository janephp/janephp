<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemCpStaticRoute
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
     * Network Address
     *
     * @var string
     */
    protected $networkAddress;
    /**
     * Subnet Mask
     *
     * @var string
     */
    protected $subnetMask;
    /**
     * Gateway
     *
     * @var string
     */
    protected $gateway;
    /**
     * Interface Type or UserDefined Interface Name
     *
     * @var string
     */
    protected $interfaceMode;
    /**
     * Metric
     *
     * @var int
     */
    protected $metric;
    /**
     * Network Address
     *
     * @return string
     */
    public function getNetworkAddress(): string
    {
        return $this->networkAddress;
    }
    /**
     * Network Address
     *
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
     * Subnet Mask
     *
     * @return string
     */
    public function getSubnetMask(): string
    {
        return $this->subnetMask;
    }
    /**
     * Subnet Mask
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
    /**
     * Gateway
     *
     * @return string
     */
    public function getGateway(): string
    {
        return $this->gateway;
    }
    /**
     * Gateway
     *
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
     * Interface Type or UserDefined Interface Name
     *
     * @return string
     */
    public function getInterfaceMode(): string
    {
        return $this->interfaceMode;
    }
    /**
     * Interface Type or UserDefined Interface Name
     *
     * @param string $interfaceMode
     *
     * @return self
     */
    public function setInterfaceMode(string $interfaceMode): self
    {
        $this->initialized['interfaceMode'] = true;
        $this->interfaceMode = $interfaceMode;
        return $this;
    }
    /**
     * Metric
     *
     * @return int
     */
    public function getMetric(): int
    {
        return $this->metric;
    }
    /**
     * Metric
     *
     * @param int $metric
     *
     * @return self
     */
    public function setMetric(int $metric): self
    {
        $this->initialized['metric'] = true;
        $this->metric = $metric;
        return $this;
    }
}