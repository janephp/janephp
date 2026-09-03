<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApNetwork
{
    /**
     * Indicates how the AP's IP address was obtained. An AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @var string
     */
    public string $ipType;
    /**
     * @var string
     */
    public string $ip;
    /**
     * @var string
     */
    public string $netmask;
    /**
     * @var string
     */
    public string $gateway;
    /**
     * @var string
     */
    public string $primaryDns;
    /**
     * @var string
     */
    public string $secondaryDns;
}