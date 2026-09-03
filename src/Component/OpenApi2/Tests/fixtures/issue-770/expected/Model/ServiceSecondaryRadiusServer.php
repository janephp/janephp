<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ServiceSecondaryRadiusServer
{
    /**
     * Automatic fallback enabled or disabled
     *
     * @var bool
     */
    public bool $autoFallbackDisable;
    /**
     * @var string
     */
    public string $ip;
    /**
     * RADIUS server port
     *
     * @var int
     */
    public int $port = 1812;
    /**
     * RADIUS server shared secret
     *
     * @var string
     */
    public string $sharedSecret;
    /**
     * RADIUS server IP address or FQDN
     *
     * @var string
     */
    public string $ipFqdn;
}