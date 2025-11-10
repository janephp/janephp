<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats
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
     * @var int
     */
    protected $dhcpOffer;
    /**
     * @var int
     */
    protected $dhcpAck;
    /**
     * @var int
     */
    protected $dhcpNak;
    /**
     * @return int
     */
    public function getDhcpOffer(): int
    {
        return $this->dhcpOffer;
    }
    /**
     * @param int $dhcpOffer
     *
     * @return self
     */
    public function setDhcpOffer(int $dhcpOffer): self
    {
        $this->initialized['dhcpOffer'] = true;
        $this->dhcpOffer = $dhcpOffer;
        return $this;
    }
    /**
     * @return int
     */
    public function getDhcpAck(): int
    {
        return $this->dhcpAck;
    }
    /**
     * @param int $dhcpAck
     *
     * @return self
     */
    public function setDhcpAck(int $dhcpAck): self
    {
        $this->initialized['dhcpAck'] = true;
        $this->dhcpAck = $dhcpAck;
        return $this;
    }
    /**
     * @return int
     */
    public function getDhcpNak(): int
    {
        return $this->dhcpNak;
    }
    /**
     * @param int $dhcpNak
     *
     * @return self
     */
    public function setDhcpNak(int $dhcpNak): self
    {
        $this->initialized['dhcpNak'] = true;
        $this->dhcpNak = $dhcpNak;
        return $this;
    }
}