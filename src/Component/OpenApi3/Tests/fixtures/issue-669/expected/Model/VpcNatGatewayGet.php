<?php

namespace Jane\Generated\DigitalOcean\Model;

class VpcNatGatewayGet extends \ArrayObject
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
     * The unique identifier for the VPC NAT gateway. This is automatically generated upon creation.
     *
     * @var string
     */
    protected $id;
    /**
     * The human-readable name of the VPC NAT gateway.
     *
     * @var string
     */
    protected $name;
    /**
     * The type of the VPC NAT gateway.
     *
     * @var string
     */
    protected $type;
    /**
     * The current state of the VPC NAT gateway.
     *
     * @var string
     */
    protected $state;
    /**
     * The region in which the VPC NAT gateway is created.
     *
     * @var string
     */
    protected $region;
    /**
     * The size of the VPC NAT gateway.
     *
     * @var int
     */
    protected $size;
    /**
     * An array of VPCs associated with the VPC NAT gateway.
     *
     * @var list<VpcNatGatewayGetVpcsItem>
     */
    protected $vpcs;
    /**
     * An object containing egress information for the VPC NAT gateway.
     *
     * @var VpcNatGatewayGetEgresses
     */
    protected $egresses;
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
     * A time value given in ISO8601 combined date and time format that represents when the VPC NAT gateway was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the VPC NAT gateway was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * The unique identifier for the VPC NAT gateway. This is automatically generated upon creation.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The unique identifier for the VPC NAT gateway. This is automatically generated upon creation.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
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
     * The type of the VPC NAT gateway.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of the VPC NAT gateway.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The current state of the VPC NAT gateway.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * The current state of the VPC NAT gateway.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * The region in which the VPC NAT gateway is created.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The region in which the VPC NAT gateway is created.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
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
     * An array of VPCs associated with the VPC NAT gateway.
     *
     * @return list<VpcNatGatewayGetVpcsItem>
     */
    public function getVpcs(): array
    {
        return $this->vpcs;
    }
    /**
     * An array of VPCs associated with the VPC NAT gateway.
     *
     * @param list<VpcNatGatewayGetVpcsItem> $vpcs
     *
     * @return self
     */
    public function setVpcs(array $vpcs): self
    {
        $this->initialized['vpcs'] = true;
        $this->vpcs = $vpcs;
        return $this;
    }
    /**
     * An object containing egress information for the VPC NAT gateway.
     *
     * @return VpcNatGatewayGetEgresses
     */
    public function getEgresses(): VpcNatGatewayGetEgresses
    {
        return $this->egresses;
    }
    /**
     * An object containing egress information for the VPC NAT gateway.
     *
     * @param VpcNatGatewayGetEgresses $egresses
     *
     * @return self
     */
    public function setEgresses(VpcNatGatewayGetEgresses $egresses): self
    {
        $this->initialized['egresses'] = true;
        $this->egresses = $egresses;
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
    /**
     * A time value given in ISO8601 combined date and time format that represents when the VPC NAT gateway was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the VPC NAT gateway was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the VPC NAT gateway was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the VPC NAT gateway was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}