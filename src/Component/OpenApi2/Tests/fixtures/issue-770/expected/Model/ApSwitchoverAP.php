<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApSwitchoverAP
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
     * IP or FQDN address of destination cluster, Notice: Once this value been set, clusterName will be ignored.
     *
     * @var string
     */
    protected $ipOrFqdn;
    /**
     * Name of destination cluster, Notice: Once user has set ipOrFqdn, this value will be ignored.
     *
     * @var string
     */
    protected $clusterName;
    /**
     * AP MAC address list
     *
     * @var list<string>
     */
    protected $apMacList;
    /**
     * Zone ID list for which APs attached to will be switchovered.
     *
     * @var list<string>
     */
    protected $zoneIdList;
    /**
     * Flag to delete AP record after switchover cluster. Default value is false.
     *
     * @var bool
     */
    protected $deleteRecord;
    /**
     * IP or FQDN address of destination cluster, Notice: Once this value been set, clusterName will be ignored.
     *
     * @return string
     */
    public function getIpOrFqdn(): string
    {
        return $this->ipOrFqdn;
    }
    /**
     * IP or FQDN address of destination cluster, Notice: Once this value been set, clusterName will be ignored.
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
     * Name of destination cluster, Notice: Once user has set ipOrFqdn, this value will be ignored.
     *
     * @return string
     */
    public function getClusterName(): string
    {
        return $this->clusterName;
    }
    /**
     * Name of destination cluster, Notice: Once user has set ipOrFqdn, this value will be ignored.
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
     * AP MAC address list
     *
     * @return list<string>
     */
    public function getApMacList(): array
    {
        return $this->apMacList;
    }
    /**
     * AP MAC address list
     *
     * @param list<string> $apMacList
     *
     * @return self
     */
    public function setApMacList(array $apMacList): self
    {
        $this->initialized['apMacList'] = true;
        $this->apMacList = $apMacList;
        return $this;
    }
    /**
     * Zone ID list for which APs attached to will be switchovered.
     *
     * @return list<string>
     */
    public function getZoneIdList(): array
    {
        return $this->zoneIdList;
    }
    /**
     * Zone ID list for which APs attached to will be switchovered.
     *
     * @param list<string> $zoneIdList
     *
     * @return self
     */
    public function setZoneIdList(array $zoneIdList): self
    {
        $this->initialized['zoneIdList'] = true;
        $this->zoneIdList = $zoneIdList;
        return $this;
    }
    /**
     * Flag to delete AP record after switchover cluster. Default value is false.
     *
     * @return bool
     */
    public function getDeleteRecord(): bool
    {
        return $this->deleteRecord;
    }
    /**
     * Flag to delete AP record after switchover cluster. Default value is false.
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