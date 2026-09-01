<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationSecondaryRadiusServer
{
    /**
     * @var string
     */
    public string $ip;
    /**
     * Port number of Secondary RADIUS Server object
     *
     * @var int
     */
    public int $port;
    /**
     * @var string
     */
    public string $protocol = 'PAP';
    /**
     * Shared secret of Secondary RADIUS Server object
     *
     * @var string
     */
    public string $sharedSecret;
    /**
     * IP address or FQDN of Secondary RADIUS Server object
     *
     * @var string
     */
    public string $ipFqdn;
    /**
     * Request timeout(seconds) value of re-connection to primary
     *
     * @var int
     */
    public int $requestTimeOut = 3;
    /**
     * Max number(how many times) of retries for re-connection to primary
     *
     * @var int
     */
    public int $maxRetries = 2;
    /**
     * Interval of re-connection to primary(1-60 minute)
     *
     * @var int
     */
    public int $retryPriInvl = 5;
}