<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApSwitchoverAP
{
    /**
     * IP or FQDN address of destination cluster, Notice: Once this value been set, clusterName will be ignored.
     *
     * @var string
     */
    public string $ipOrFqdn;
    /**
     * Name of destination cluster, Notice: Once user has set ipOrFqdn, this value will be ignored.
     *
     * @var string
     */
    public string $clusterName;
    /**
     * AP MAC address list
     *
     * @var list<string>
     */
    public array $apMacList;
    /**
     * Zone ID list for which APs attached to will be switchovered.
     *
     * @var list<string>
     */
    public array $zoneIdList;
    /**
     * Flag to delete AP record after switchover cluster. Default value is false.
     *
     * @var bool
     */
    public bool $deleteRecord;
}