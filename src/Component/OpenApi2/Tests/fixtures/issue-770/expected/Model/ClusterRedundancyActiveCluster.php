<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterRedundancyActiveCluster
{
    /**
     * Priority of target active cluster
     *
     * @var int
     */
    public int $priority;
    /**
     * Password of admin account of target active cluster
     *
     * @var string
     */
    public string $targetClusterAdminPassword;
    /**
     * Management entry list of target active cluster
     *
     * @var list<ClusterRedundancyManagementEntry>
     */
    public array $managementEntryList;
}