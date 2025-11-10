<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpSwitchoverDp
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
     * IP or FQDN address of destination cluster, Notice: System will take ipOrFqdn as 1st priority, and clusterName as 2nd.
     *
     * @var string
     */
    protected $ipOrFqdn;
    /**
     * Name of destination cluster, Notice: System will take ipOrFqdn as 1st priority, and clusterName as 2nd.
     *
     * @var string
     */
    protected $clusterName;
    /**
     * DP ID list
     *
     * @var list<string>
     */
    protected $dpIdList;
    /**
     * Flag to delete DP record after switchover cluster. Default value is false.
     *
     * @var bool
     */
    protected $deleteRecord;
    /**
     * IP or FQDN address of destination cluster, Notice: System will take ipOrFqdn as 1st priority, and clusterName as 2nd.
     *
     * @return string
     */
    public function getIpOrFqdn(): string
    {
        return $this->ipOrFqdn;
    }
    /**
     * IP or FQDN address of destination cluster, Notice: System will take ipOrFqdn as 1st priority, and clusterName as 2nd.
     *
     * @param string $ipOrFqdn
     *
     * @return self
     */
    public function setIpOrFqdn(string $ipOrFqdn): self
    {
        $this->initialized['ipOrFqdn'] = true;
        $this->ipOrFqdn = $ipOrFqdn;
        return $this;
    }
    /**
     * Name of destination cluster, Notice: System will take ipOrFqdn as 1st priority, and clusterName as 2nd.
     *
     * @return string
     */
    public function getClusterName(): string
    {
        return $this->clusterName;
    }
    /**
     * Name of destination cluster, Notice: System will take ipOrFqdn as 1st priority, and clusterName as 2nd.
     *
     * @param string $clusterName
     *
     * @return self
     */
    public function setClusterName(string $clusterName): self
    {
        $this->initialized['clusterName'] = true;
        $this->clusterName = $clusterName;
        return $this;
    }
    /**
     * DP ID list
     *
     * @return list<string>
     */
    public function getDpIdList(): array
    {
        return $this->dpIdList;
    }
    /**
     * DP ID list
     *
     * @param list<string> $dpIdList
     *
     * @return self
     */
    public function setDpIdList(array $dpIdList): self
    {
        $this->initialized['dpIdList'] = true;
        $this->dpIdList = $dpIdList;
        return $this;
    }
    /**
     * Flag to delete DP record after switchover cluster. Default value is false.
     *
     * @return bool
     */
    public function getDeleteRecord(): bool
    {
        return $this->deleteRecord;
    }
    /**
     * Flag to delete DP record after switchover cluster. Default value is false.
     *
     * @param bool $deleteRecord
     *
     * @return self
     */
    public function setDeleteRecord(bool $deleteRecord): self
    {
        $this->initialized['deleteRecord'] = true;
        $this->deleteRecord = $deleteRecord;
        return $this;
    }
}