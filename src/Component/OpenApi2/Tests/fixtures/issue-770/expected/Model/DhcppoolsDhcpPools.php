<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DhcppoolsDhcpPools
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
    protected $domainEntity;
    /**
     * @var string
     */
    protected $apMac;
    /**
     * @var list<DhcppoolsDhcpPoolInfo>
     */
    protected $poolInfoList;
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
    public function getDomainEntity(): string
    {
        return $this->domainEntity;
    }
    /**
     * @param string $domainEntity
     *
     * @return self
     */
    public function setDomainEntity(string $domainEntity): self
    {
        $this->initialized['domainEntity'] = true;
        $this->domainEntity = $domainEntity;
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
     * @return list<DhcppoolsDhcpPoolInfo>
     */
    public function getPoolInfoList(): array
    {
        return $this->poolInfoList;
    }
    /**
     * @param list<DhcppoolsDhcpPoolInfo> $poolInfoList
     *
     * @return self
     */
    public function setPoolInfoList(array $poolInfoList): self
    {
        $this->initialized['poolInfoList'] = true;
        $this->poolInfoList = $poolInfoList;
        return $this;
    }
}