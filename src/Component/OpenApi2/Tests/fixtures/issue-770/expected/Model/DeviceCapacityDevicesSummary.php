<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DeviceCapacityDevicesSummary
{
    /**
     * maximum ap capacity per cluster.
     *
     * @var int
     */
    public int $maxApOfCluster;
    /**
     * maximum switch capacity per cluster.
     *
     * @var int
     */
    public int $maxSwitchOfCluster;
    /**
     * maximum ap capacity of this node.
     *
     * @var int
     */
    public int $apCapacity;
    /**
     * maximum switch capacity of this node.
     *
     * @var int
     */
    public int $switchCapacity;
    /**
     * maximum total ap capacity of this node.
     *
     * @var int
     */
    public int $totalApCapacity;
    /**
     * maximum total switch capacity of this node.
     *
     * @var int
     */
    public int $totalSwitchCapacity;
    /**
     * total remaining ap capacity of this node.
     *
     * @var int
     */
    public int $totalRemainingApCapacity;
    /**
     * total remaining switch capacity of this node.
     *
     * @var int
     */
    public int $totalRemainingSwitchCapacity;
    /**
     * connected aps in this node.
     *
     * @var int
     */
    public int $aps;
    /**
     * connected Aps with dual radios type
     *
     * @var int
     */
    public int $dualRadioAps;
    /**
     * connected Aps with three radios type
     *
     * @var int
     */
    public int $triRadioAps;
    /**
     * connected switches in this node.
     *
     * @var int
     */
    public int $switches;
    /**
     * total connected aps in the cluster.
     *
     * @var int
     */
    public int $totalAps;
    /**
     * total connected switches in the cluster.
     *
     * @var int
     */
    public int $totalSwitches;
    /**
     * total remaining DPs of the cluster.
     *
     * @var int
     */
    public int $totalRemainingDps;
    /**
     * total connected DPs in the cluster.
     *
     * @var int
     */
    public int $totalConnectedDps;
    /**
     * maximum total DP capacity of the cluster.
     *
     * @var int
     */
    public int $totalDpCapacity;
}