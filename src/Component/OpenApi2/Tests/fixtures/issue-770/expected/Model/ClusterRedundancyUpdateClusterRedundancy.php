<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterRedundancyUpdateClusterRedundancy
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
     * Cluster redundancy enabled
     *
     * @var bool
     */
    protected $clusterRedundancyEnabled;
    /**
     * Cluster redundancy type (Active-Standby, or Active-Active)
     *
     * @var string
     */
    protected $clusterRedundancyType;
    /**
     * Password of admin account of standby cluster (Active-Standby only)
     *
     * @var string
     */
    protected $standbyAdminPassword;
    /**
     * Management entry list of standby cluster (Active-Standby only)
     *
     * @var list<ClusterRedundancyManagementEntry>
     */
    protected $managementEntryList;
    /**
     * A list of target active clusters (Active-Active only)
     *
     * @var list<ClusterRedundancyActiveCluster>
     */
    protected $activeClusterList;
    /**
     * Scheduled configuration sync enabled
     *
     * @var bool
     */
    protected $scheduleSyncUpEnabled;
    /**
     * Schedule interval (Active-Active only)
     *
     * @var string
     */
    protected $interval;
    /**
     * Scheduled date of the month (1-31) (Active-Active only)
     *
     * @var int
     */
    protected $dateOfMonth;
    /**
     * Scheduled day of the week (Active-Active only)
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * Schedule sync time in daily hour (0-23)
     *
     * @var int
     */
    protected $hour;
    /**
     * Schedule sync time in minute (Active-Active only)
     *
     * @var int
     */
    protected $minute;
    /**
     * Cluster redundancy enabled
     *
     * @return bool
     */
    public function getClusterRedundancyEnabled(): bool
    {
        return $this->clusterRedundancyEnabled;
    }
    /**
     * Cluster redundancy enabled
     *
     * @param bool $clusterRedundancyEnabled
     *
     * @return self
     */
    public function setClusterRedundancyEnabled(bool $clusterRedundancyEnabled): self
    {
        $this->initialized['clusterRedundancyEnabled'] = true;
        $this->clusterRedundancyEnabled = $clusterRedundancyEnabled;
        return $this;
    }
    /**
     * Cluster redundancy type (Active-Standby, or Active-Active)
     *
     * @return string
     */
    public function getClusterRedundancyType(): string
    {
        return $this->clusterRedundancyType;
    }
    /**
     * Cluster redundancy type (Active-Standby, or Active-Active)
     *
     * @param string $clusterRedundancyType
     *
     * @return self
     */
    public function setClusterRedundancyType(string $clusterRedundancyType): self
    {
        $this->initialized['clusterRedundancyType'] = true;
        $this->clusterRedundancyType = $clusterRedundancyType;
        return $this;
    }
    /**
     * Password of admin account of standby cluster (Active-Standby only)
     *
     * @return string
     */
    public function getStandbyAdminPassword(): string
    {
        return $this->standbyAdminPassword;
    }
    /**
     * Password of admin account of standby cluster (Active-Standby only)
     *
     * @param string $standbyAdminPassword
     *
     * @return self
     */
    public function setStandbyAdminPassword(string $standbyAdminPassword): self
    {
        $this->initialized['standbyAdminPassword'] = true;
        $this->standbyAdminPassword = $standbyAdminPassword;
        return $this;
    }
    /**
     * Management entry list of standby cluster (Active-Standby only)
     *
     * @return list<ClusterRedundancyManagementEntry>
     */
    public function getManagementEntryList(): array
    {
        return $this->managementEntryList;
    }
    /**
     * Management entry list of standby cluster (Active-Standby only)
     *
     * @param list<ClusterRedundancyManagementEntry> $managementEntryList
     *
     * @return self
     */
    public function setManagementEntryList(array $managementEntryList): self
    {
        $this->initialized['managementEntryList'] = true;
        $this->managementEntryList = $managementEntryList;
        return $this;
    }
    /**
     * A list of target active clusters (Active-Active only)
     *
     * @return list<ClusterRedundancyActiveCluster>
     */
    public function getActiveClusterList(): array
    {
        return $this->activeClusterList;
    }
    /**
     * A list of target active clusters (Active-Active only)
     *
     * @param list<ClusterRedundancyActiveCluster> $activeClusterList
     *
     * @return self
     */
    public function setActiveClusterList(array $activeClusterList): self
    {
        $this->initialized['activeClusterList'] = true;
        $this->activeClusterList = $activeClusterList;
        return $this;
    }
    /**
     * Scheduled configuration sync enabled
     *
     * @return bool
     */
    public function getScheduleSyncUpEnabled(): bool
    {
        return $this->scheduleSyncUpEnabled;
    }
    /**
     * Scheduled configuration sync enabled
     *
     * @param bool $scheduleSyncUpEnabled
     *
     * @return self
     */
    public function setScheduleSyncUpEnabled(bool $scheduleSyncUpEnabled): self
    {
        $this->initialized['scheduleSyncUpEnabled'] = true;
        $this->scheduleSyncUpEnabled = $scheduleSyncUpEnabled;
        return $this;
    }
    /**
     * Schedule interval (Active-Active only)
     *
     * @return string
     */
    public function getInterval(): string
    {
        return $this->interval;
    }
    /**
     * Schedule interval (Active-Active only)
     *
     * @param string $interval
     *
     * @return self
     */
    public function setInterval(string $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;
        return $this;
    }
    /**
     * Scheduled date of the month (1-31) (Active-Active only)
     *
     * @return int
     */
    public function getDateOfMonth(): int
    {
        return $this->dateOfMonth;
    }
    /**
     * Scheduled date of the month (1-31) (Active-Active only)
     *
     * @param int $dateOfMonth
     *
     * @return self
     */
    public function setDateOfMonth(int $dateOfMonth): self
    {
        $this->initialized['dateOfMonth'] = true;
        $this->dateOfMonth = $dateOfMonth;
        return $this;
    }
    /**
     * Scheduled day of the week (Active-Active only)
     *
     * @return string
     */
    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }
    /**
     * Scheduled day of the week (Active-Active only)
     *
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Schedule sync time in daily hour (0-23)
     *
     * @return int
     */
    public function getHour(): int
    {
        return $this->hour;
    }
    /**
     * Schedule sync time in daily hour (0-23)
     *
     * @param int $hour
     *
     * @return self
     */
    public function setHour(int $hour): self
    {
        $this->initialized['hour'] = true;
        $this->hour = $hour;
        return $this;
    }
    /**
     * Schedule sync time in minute (Active-Active only)
     *
     * @return int
     */
    public function getMinute(): int
    {
        return $this->minute;
    }
    /**
     * Schedule sync time in minute (Active-Active only)
     *
     * @param int $minute
     *
     * @return self
     */
    public function setMinute(int $minute): self
    {
        $this->initialized['minute'] = true;
        $this->minute = $minute;
        return $this;
    }
}