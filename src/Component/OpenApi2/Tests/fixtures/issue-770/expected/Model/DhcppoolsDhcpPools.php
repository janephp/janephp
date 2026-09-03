<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DhcppoolsDhcpPools
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $tenantId;
    /**
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $domainEntity;
    /**
     * @var string
     */
    public string $apMac;
    /**
     * @var list<DhcppoolsDhcpPoolInfo>
     */
    public array $poolInfoList;
}