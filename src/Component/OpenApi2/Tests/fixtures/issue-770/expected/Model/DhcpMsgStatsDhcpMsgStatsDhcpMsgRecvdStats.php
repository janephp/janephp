<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats
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
    protected $dhcpDiscover;
    /**
     * @var int
     */
    protected $dhcpRequest;
    /**
     * @var int
     */
    protected $dhcpDecline;
    /**
     * @var int
     */
    protected $dhcpRelease;
    /**
     * @var int
     */
    protected $dhcpInform;
    /**
     * @return int
     */
    public function getDhcpDiscover(): int
    {
        return $this->dhcpDiscover;
    }
    /**
     * @param int $dhcpDiscover
     *
     * @return self
     */
    public function setDhcpDiscover(int $dhcpDiscover): self
    {
        $this->initialized['dhcpDiscover'] = true;
        $this->dhcpDiscover = $dhcpDiscover;
        return $this;
    }
    /**
     * @return int
     */
    public function getDhcpRequest(): int
    {
        return $this->dhcpRequest;
    }
    /**
     * @param int $dhcpRequest
     *
     * @return self
     */
    public function setDhcpRequest(int $dhcpRequest): self
    {
        $this->initialized['dhcpRequest'] = true;
        $this->dhcpRequest = $dhcpRequest;
        return $this;
    }
    /**
     * @return int
     */
    public function getDhcpDecline(): int
    {
        return $this->dhcpDecline;
    }
    /**
     * @param int $dhcpDecline
     *
     * @return self
     */
    public function setDhcpDecline(int $dhcpDecline): self
    {
        $this->initialized['dhcpDecline'] = true;
        $this->dhcpDecline = $dhcpDecline;
        return $this;
    }
    /**
     * @return int
     */
    public function getDhcpRelease(): int
    {
        return $this->dhcpRelease;
    }
    /**
     * @param int $dhcpRelease
     *
     * @return self
     */
    public function setDhcpRelease(int $dhcpRelease): self
    {
        $this->initialized['dhcpRelease'] = true;
        $this->dhcpRelease = $dhcpRelease;
        return $this;
    }
    /**
     * @return int
     */
    public function getDhcpInform(): int
    {
        return $this->dhcpInform;
    }
    /**
     * @param int $dhcpInform
     *
     * @return self
     */
    public function setDhcpInform(int $dhcpInform): self
    {
        $this->initialized['dhcpInform'] = true;
        $this->dhcpInform = $dhcpInform;
        return $this;
    }
}