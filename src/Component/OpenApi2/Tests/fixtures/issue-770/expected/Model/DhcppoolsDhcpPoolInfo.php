<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DhcppoolsDhcpPoolInfo
{
    /**
     * @var int
     */
    public int $poolIndex;
    /**
     * @var int
     */
    public int $vlanId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $poolStartIp;
    /**
     * @var string
     */
    public string $poolEndIp;
    /**
     * @var string
     */
    public string $subnetMask;
    /**
     * @var string
     */
    public string $apIp;
    /**
     * @var int
     */
    public int $totalIpCount;
    /**
     * @var int
     */
    public int $usedIpCount;
    /**
     * @var int
     */
    public int $availableIpCount;
    /**
     * @var DhcppoolsDhcpPoolInfoClientInfoList
     */
    public DhcppoolsDhcpPoolInfoClientInfoList $clientInfoList;
}