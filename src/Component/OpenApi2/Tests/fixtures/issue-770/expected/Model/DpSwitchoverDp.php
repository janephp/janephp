<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpSwitchoverDp
{
    /**
     * IP or FQDN address of destination cluster, Notice: System will take ipOrFqdn as 1st priority, and clusterName as 2nd.
     *
     * @var string
     */
    public string $ipOrFqdn;
    /**
     * Name of destination cluster, Notice: System will take ipOrFqdn as 1st priority, and clusterName as 2nd.
     *
     * @var string
     */
    public string $clusterName;
    /**
     * DP ID list
     *
     * @var list<string>
     */
    public array $dpIdList;
    /**
     * Flag to delete DP record after switchover cluster. Default value is false.
     *
     * @var bool
     */
    public bool $deleteRecord;
}