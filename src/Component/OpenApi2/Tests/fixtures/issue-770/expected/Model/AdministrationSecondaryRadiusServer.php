<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationSecondaryRadiusServer
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $ip;
    /**
     * Port number of Secondary RADIUS Server object
     *
     * @var int
     */
    protected $port;
    /**
     * @var string
     */
    protected $protocol = 'PAP';
    /**
     * Shared secret of Secondary RADIUS Server object
     *
     * @var string
     */
    protected $sharedSecret;
    /**
     * IP address or FQDN of Secondary RADIUS Server object
     *
     * @var string
     */
    protected $ipFqdn;
    /**
     * Request timeout(seconds) value of re-connection to primary
     *
     * @var int
     */
    protected $requestTimeOut = 3;
    /**
     * Max number(how many times) of retries for re-connection to primary
     *
     * @var int
     */
    protected $maxRetries = 2;
    /**
     * Interval of re-connection to primary(1-60 minute)
     *
     * @var int
     */
    protected $retryPriInvl = 5;
    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * Port number of Secondary RADIUS Server object
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * Port number of Secondary RADIUS Server object
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port): self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
    /**
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * Shared secret of Secondary RADIUS Server object
     *
     * @return string
     */
    public function getSharedSecret(): string
    {
        return $this->sharedSecret;
    }
    /**
     * Shared secret of Secondary RADIUS Server object
     *
     * @param string $sharedSecret
     *
     * @return self
     */
    public function setSharedSecret(string $sharedSecret): self
    {
        $this->initialized['sharedSecret'] = true;
        $this->sharedSecret = $sharedSecret;
        return $this;
    }
    /**
     * IP address or FQDN of Secondary RADIUS Server object
     *
     * @return string
     */
    public function getIpFqdn(): string
    {
        return $this->ipFqdn;
    }
    /**
     * IP address or FQDN of Secondary RADIUS Server object
     *
     * @param string $ipFqdn
     *
     * @return self
     */
    public function setIpFqdn(string $ipFqdn): self
    {
        $this->initialized['ipFqdn'] = true;
        $this->ipFqdn = $ipFqdn;
        return $this;
    }
    /**
     * Request timeout(seconds) value of re-connection to primary
     *
     * @return int
     */
    public function getRequestTimeOut(): int
    {
        return $this->requestTimeOut;
    }
    /**
     * Request timeout(seconds) value of re-connection to primary
     *
     * @param int $requestTimeOut
     *
     * @return self
     */
    public function setRequestTimeOut(int $requestTimeOut): self
    {
        $this->initialized['requestTimeOut'] = true;
        $this->requestTimeOut = $requestTimeOut;
        return $this;
    }
    /**
     * Max number(how many times) of retries for re-connection to primary
     *
     * @return int
     */
    public function getMaxRetries(): int
    {
        return $this->maxRetries;
    }
    /**
     * Max number(how many times) of retries for re-connection to primary
     *
     * @param int $maxRetries
     *
     * @return self
     */
    public function setMaxRetries(int $maxRetries): self
    {
        $this->initialized['maxRetries'] = true;
        $this->maxRetries = $maxRetries;
        return $this;
    }
    /**
     * Interval of re-connection to primary(1-60 minute)
     *
     * @return int
     */
    public function getRetryPriInvl(): int
    {
        return $this->retryPriInvl;
    }
    /**
     * Interval of re-connection to primary(1-60 minute)
     *
     * @param int $retryPriInvl
     *
     * @return self
     */
    public function setRetryPriInvl(int $retryPriInvl): self
    {
        $this->initialized['retryPriInvl'] = true;
        $this->retryPriInvl = $retryPriInvl;
        return $this;
    }
}