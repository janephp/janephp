<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class PortalserviceModifyWechat
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Authentication URL of the wechat profile
     *
     * @var string
     */
    public string $authUrl;
    /**
     * DNAT destination of the wechat profile
     *
     * @var string
     */
    public string $dnatDestination;
    /**
     * Grace period of the wechat profile
     *
     * @var int
     */
    public int $gracePeriod = 60;
    /**
     * Black list of the wechat profile
     *
     * @var string
     */
    public string $blackList;
    /**
     * White list of the wechat profile
     *
     * @var list<string>
     */
    public array $whiteList;
    /**
     * DNAT Port Mapping of the wechat profile
     *
     * @var list<PortalserviceDnatPortMapping>
     */
    public array $dnatPortMapping;
}