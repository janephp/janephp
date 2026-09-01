<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SplitTunnelSplitTunnelProfile
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
    public string $zoneId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Exception Address List(Destination rule) of split tunnel profile
     *
     * @var list<SplitTunnelSplitTunnelIpMaskRule>
     */
    public array $rules;
    /**
     * @var string
     */
    public string $defaultAction;
}