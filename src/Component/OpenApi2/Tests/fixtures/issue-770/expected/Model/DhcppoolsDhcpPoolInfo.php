<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DhcppoolsDhcpPoolInfo
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
    protected $poolIndex;
    /**
     * @var int
     */
    protected $vlanId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $poolStartIp;
    /**
     * @var string
     */
    protected $poolEndIp;
    /**
     * @var string
     */
    protected $subnetMask;
    /**
     * @var string
     */
    protected $apIp;
    /**
     * @var int
     */
    protected $totalIpCount;
    /**
     * @var int
     */
    protected $usedIpCount;
    /**
     * @var int
     */
    protected $availableIpCount;
    /**
     * @var DhcppoolsDhcpPoolInfoClientInfoList
     */
    protected $clientInfoList;
    /**
     * @return int
     */
    public function getPoolIndex(): int
    {
        return $this->poolIndex;
    }
    /**
     * @param int $poolIndex
     *
     * @return self
     */
    public function setPoolIndex(int $poolIndex): self
    {
        $this->initialized['poolIndex'] = true;
        $this->poolIndex = $poolIndex;
        return $this;
    }
    /**
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlanId;
    }
    /**
     * @param int $vlanId
     *
     * @return self
     */
    public function setVlanId(int $vlanId): self
    {
        $this->initialized['vlanId'] = true;
        $this->vlanId = $vlanId;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return string
     */
    public function getPoolStartIp(): string
    {
        return $this->poolStartIp;
    }
    /**
     * @param string $poolStartIp
     *
     * @return self
     */
    public function setPoolStartIp(string $poolStartIp): self
    {
        $this->initialized['poolStartIp'] = true;
        $this->poolStartIp = $poolStartIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getPoolEndIp(): string
    {
        return $this->poolEndIp;
    }
    /**
     * @param string $poolEndIp
     *
     * @return self
     */
    public function setPoolEndIp(string $poolEndIp): self
    {
        $this->initialized['poolEndIp'] = true;
        $this->poolEndIp = $poolEndIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getSubnetMask(): string
    {
        return $this->subnetMask;
    }
    /**
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
     * @return string
     */
    public function getApIp(): string
    {
        return $this->apIp;
    }
    /**
     * @param string $apIp
     *
     * @return self
     */
    public function setApIp(string $apIp): self
    {
        $this->initialized['apIp'] = true;
        $this->apIp = $apIp;
        return $this;
    }
    /**
     * @return int
     */
    public function getTotalIpCount(): int
    {
        return $this->totalIpCount;
    }
    /**
     * @param int $totalIpCount
     *
     * @return self
     */
    public function setTotalIpCount(int $totalIpCount): self
    {
        $this->initialized['totalIpCount'] = true;
        $this->totalIpCount = $totalIpCount;
        return $this;
    }
    /**
     * @return int
     */
    public function getUsedIpCount(): int
    {
        return $this->usedIpCount;
    }
    /**
     * @param int $usedIpCount
     *
     * @return self
     */
    public function setUsedIpCount(int $usedIpCount): self
    {
        $this->initialized['usedIpCount'] = true;
        $this->usedIpCount = $usedIpCount;
        return $this;
    }
    /**
     * @return int
     */
    public function getAvailableIpCount(): int
    {
        return $this->availableIpCount;
    }
    /**
     * @param int $availableIpCount
     *
     * @return self
     */
    public function setAvailableIpCount(int $availableIpCount): self
    {
        $this->initialized['availableIpCount'] = true;
        $this->availableIpCount = $availableIpCount;
        return $this;
    }
    /**
     * @return DhcppoolsDhcpPoolInfoClientInfoList
     */
    public function getClientInfoList(): DhcppoolsDhcpPoolInfoClientInfoList
    {
        return $this->clientInfoList;
    }
    /**
     * @param DhcppoolsDhcpPoolInfoClientInfoList $clientInfoList
     *
     * @return self
     */
    public function setClientInfoList(DhcppoolsDhcpPoolInfoClientInfoList $clientInfoList): self
    {
        $this->initialized['clientInfoList'] = true;
        $this->clientInfoList = $clientInfoList;
        return $this;
    }
}