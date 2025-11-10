<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DhcpMsgStatsDhcpMsgStats
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
    protected $id;
    /**
     * @var string
     */
    protected $tenantId;
    /**
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $apMac;
    /**
     * DHCP Message Received Statistic
     *
     * @var DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats
     */
    protected $dhcpMsgRecvdStats;
    /**
     * DHCP Message Sent Statistic
     *
     * @var DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats
     */
    protected $dhcpMsgSentStats;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }
    /**
     * @param string $tenantId
     *
     * @return self
     */
    public function setTenantId(string $tenantId): self
    {
        $this->initialized['tenantId'] = true;
        $this->tenantId = $tenantId;
        return $this;
    }
    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * @return string
     */
    public function getApMac(): string
    {
        return $this->apMac;
    }
    /**
     * @param string $apMac
     *
     * @return self
     */
    public function setApMac(string $apMac): self
    {
        $this->initialized['apMac'] = true;
        $this->apMac = $apMac;
        return $this;
    }
    /**
     * DHCP Message Received Statistic
     *
     * @return DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats
     */
    public function getDhcpMsgRecvdStats(): DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats
    {
        return $this->dhcpMsgRecvdStats;
    }
    /**
     * DHCP Message Received Statistic
     *
     * @param DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats $dhcpMsgRecvdStats
     *
     * @return self
     */
    public function setDhcpMsgRecvdStats(DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats $dhcpMsgRecvdStats): self
    {
        $this->initialized['dhcpMsgRecvdStats'] = true;
        $this->dhcpMsgRecvdStats = $dhcpMsgRecvdStats;
        return $this;
    }
    /**
     * DHCP Message Sent Statistic
     *
     * @return DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats
     */
    public function getDhcpMsgSentStats(): DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats
    {
        return $this->dhcpMsgSentStats;
    }
    /**
     * DHCP Message Sent Statistic
     *
     * @param DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats $dhcpMsgSentStats
     *
     * @return self
     */
    public function setDhcpMsgSentStats(DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats $dhcpMsgSentStats): self
    {
        $this->initialized['dhcpMsgSentStats'] = true;
        $this->dhcpMsgSentStats = $dhcpMsgSentStats;
        return $this;
    }
}