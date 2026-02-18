<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemReservedPort
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
     * Inbound/Outbound
     *
     * @var string
     */
    protected $trafficDirection;
    /**
     * Reserved port range for SZ service
     *
     * @var string
     */
    protected $portRange;
    /**
     * The binding interfaces, ["Control", "Cluster", "Management"]
     *
     * @var string
     */
    protected $bindingInterface;
    /**
     * The traffic destination (IP Address)
     *
     * @var string
     */
    protected $destination;
    /**
     * TCP/UDP
     *
     * @var string
     */
    protected $protocol;
    /**
     * Rule from System or User
     *
     * @var string
     */
    protected $from;
    /**
     * The purpose of reserved port range
     *
     * @var string
     */
    protected $description;
    /**
     * Inbound/Outbound
     *
     * @return string
     */
    public function getTrafficDirection(): string
    {
        return $this->trafficDirection;
    }
    /**
     * Inbound/Outbound
     *
     * @param string $trafficDirection
     *
     * @return self
     */
    public function setTrafficDirection(string $trafficDirection): self
    {
        $this->initialized['trafficDirection'] = true;
        $this->trafficDirection = $trafficDirection;
        return $this;
    }
    /**
     * Reserved port range for SZ service
     *
     * @return string
     */
    public function getPortRange(): string
    {
        return $this->portRange;
    }
    /**
     * Reserved port range for SZ service
     *
     * @param string $portRange
     *
     * @return self
     */
    public function setPortRange(string $portRange): self
    {
        $this->initialized['portRange'] = true;
        $this->portRange = $portRange;
        return $this;
    }
    /**
     * The binding interfaces, ["Control", "Cluster", "Management"]
     *
     * @return string
     */
    public function getBindingInterface(): string
    {
        return $this->bindingInterface;
    }
    /**
     * The binding interfaces, ["Control", "Cluster", "Management"]
     *
     * @param string $bindingInterface
     *
     * @return self
     */
    public function setBindingInterface(string $bindingInterface): self
    {
        $this->initialized['bindingInterface'] = true;
        $this->bindingInterface = $bindingInterface;
        return $this;
    }
    /**
     * The traffic destination (IP Address)
     *
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }
    /**
     * The traffic destination (IP Address)
     *
     * @param string $destination
     *
     * @return self
     */
    public function setDestination(string $destination): self
    {
        $this->initialized['destination'] = true;
        $this->destination = $destination;
        return $this;
    }
    /**
     * TCP/UDP
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * TCP/UDP
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * Rule from System or User
     *
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }
    /**
     * Rule from System or User
     *
     * @param string $from
     *
     * @return self
     */
    public function setFrom(string $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * The purpose of reserved port range
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * The purpose of reserved port range
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}