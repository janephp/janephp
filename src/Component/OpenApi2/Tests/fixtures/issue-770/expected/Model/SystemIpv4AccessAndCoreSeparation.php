<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemIpv4AccessAndCoreSeparation
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
     * Gateway
     *
     * @var string
     */
    protected $defaultGateway;
    /**
     * Primary DNS server
     *
     * @var string
     */
    protected $primaryDNSServer;
    /**
     * Secondary DNS server
     *
     * @var string
     */
    protected $secondaryDNSServer;
    /**
     * Gateway
     *
     * @return string
     */
    public function getDefaultGateway(): string
    {
        return $this->defaultGateway;
    }
    /**
     * Gateway
     *
     * @param string $defaultGateway
     *
     * @return self
     */
    public function setDefaultGateway(string $defaultGateway): self
    {
        $this->initialized['defaultGateway'] = true;
        $this->defaultGateway = $defaultGateway;
        return $this;
    }
    /**
     * Primary DNS server
     *
     * @return string
     */
    public function getPrimaryDNSServer(): string
    {
        return $this->primaryDNSServer;
    }
    /**
     * Primary DNS server
     *
     * @param string $primaryDNSServer
     *
     * @return self
     */
    public function setPrimaryDNSServer(string $primaryDNSServer): self
    {
        $this->initialized['primaryDNSServer'] = true;
        $this->primaryDNSServer = $primaryDNSServer;
        return $this;
    }
    /**
     * Secondary DNS server
     *
     * @return string
     */
    public function getSecondaryDNSServer(): string
    {
        return $this->secondaryDNSServer;
    }
    /**
     * Secondary DNS server
     *
     * @param string $secondaryDNSServer
     *
     * @return self
     */
    public function setSecondaryDNSServer(string $secondaryDNSServer): self
    {
        $this->initialized['secondaryDNSServer'] = true;
        $this->secondaryDNSServer = $secondaryDNSServer;
        return $this;
    }
}