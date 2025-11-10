<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileBlockedPort
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
     * Protocol of the Blocked Port
     *
     * @var string
     */
    protected $protocol;
    /**
     * port of the Blocked Port
     *
     * @var string
     */
    protected $port;
    /**
     * Protocol of the Blocked Port
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * Protocol of the Blocked Port
     *
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
     * port of the Blocked Port
     *
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }
    /**
     * port of the Blocked Port
     *
     * @param string $port
     *
     * @return self
     */
    public function setPort(string $port): self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
}