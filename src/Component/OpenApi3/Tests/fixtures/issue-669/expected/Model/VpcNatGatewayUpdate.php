<?php

namespace Jane\Generated\DigitalOcean\Model;

class VpcNatGatewayUpdate extends \ArrayObject
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
     * The human-readable name of the VPC NAT gateway.
     *
     * @var string
     */
    protected $name;
    /**
     * The size of the VPC NAT gateway.
     *
     * @var int
     */
    protected $size;
    /**
     * The UDP timeout in seconds for the VPC NAT gateway.
     *
     * @var int
     */
    protected $udpTimeoutSeconds;
    /**
     * The ICMP timeout in seconds for the VPC NAT gateway.
     *
     * @var int
     */
    protected $icmpTimeoutSeconds;
    /**
     * The TCP timeout in seconds for the VPC NAT gateway.
     *
     * @var int
     */
    protected $tcpTimeoutSeconds;
    /**
     * The human-readable name of the VPC NAT gateway.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The human-readable name of the VPC NAT gateway.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The size of the VPC NAT gateway.
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * The size of the VPC NAT gateway.
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The UDP timeout in seconds for the VPC NAT gateway.
     *
     * @return int
     */
    public function getUdpTimeoutSeconds(): int
    {
        return $this->udpTimeoutSeconds;
    }
    /**
     * The UDP timeout in seconds for the VPC NAT gateway.
     *
     * @param int $udpTimeoutSeconds
     *
     * @return self
     */
    public function setUdpTimeoutSeconds(int $udpTimeoutSeconds): self
    {
        $this->initialized['udpTimeoutSeconds'] = true;
        $this->udpTimeoutSeconds = $udpTimeoutSeconds;
        return $this;
    }
    /**
     * The ICMP timeout in seconds for the VPC NAT gateway.
     *
     * @return int
     */
    public function getIcmpTimeoutSeconds(): int
    {
        return $this->icmpTimeoutSeconds;
    }
    /**
     * The ICMP timeout in seconds for the VPC NAT gateway.
     *
     * @param int $icmpTimeoutSeconds
     *
     * @return self
     */
    public function setIcmpTimeoutSeconds(int $icmpTimeoutSeconds): self
    {
        $this->initialized['icmpTimeoutSeconds'] = true;
        $this->icmpTimeoutSeconds = $icmpTimeoutSeconds;
        return $this;
    }
    /**
     * The TCP timeout in seconds for the VPC NAT gateway.
     *
     * @return int
     */
    public function getTcpTimeoutSeconds(): int
    {
        return $this->tcpTimeoutSeconds;
    }
    /**
     * The TCP timeout in seconds for the VPC NAT gateway.
     *
     * @param int $tcpTimeoutSeconds
     *
     * @return self
     */
    public function setTcpTimeoutSeconds(int $tcpTimeoutSeconds): self
    {
        $this->initialized['tcpTimeoutSeconds'] = true;
        $this->tcpTimeoutSeconds = $tcpTimeoutSeconds;
        return $this;
    }
}