<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ClusterRedundancyClusterRedundancySettings
{
    /**
     * Cluster redundancy enabled
     *
     * @var bool
     */
    public bool $clusterRedundancyEnabled;
    /**
     * Cluster redundancy type
     *
     * @var string
     */
    public string $clusterRedundancyType;
    /**
     * Password of admin account of standby cluster (Active-Standby only)
     *
     * @var string
     */
    public string $standbyAdminPassword;
    /**
     * Management entry list of standby cluster (Active-Standby only)
     *
     * @var list<ClusterRedundancyManagementEntry>
     */
    public array $managementEntryList;
    /**
     * A list of target active clusters (Active-Active only)
     *
     * @var list<ClusterRedundancyActiveCluster>
     */
    public array $activeClusterList;
    /**
     * Scheduled configuration sync enabled
     *
     * @var bool
     */
    public bool $scheduleSyncUpEnabled;
    /**
     * Schedule interval (Active-Active only)
     *
     * @var string
     */
    public string $interval;
    /**
     * Scheduled date of the month (1-31) (Active-Active only)
     *
     * @var int
     */
    public int $dateOfMonth;
    /**
     * Scheduled day of the week (Active-Active only)
     *
     * @var string
     */
    public string $dayOfWeek;
    /**
     * Schedule sync time in daily hour (0-23)
     *
     * @var int
     */
    public int $hour;
    /**
     * Schedule sync time in minute (Active-Active only)
     *
     * @var int
     */
    public int $minute;
}