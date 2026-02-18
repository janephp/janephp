<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceConnectionCapability
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
     * Protocol aame of connection capability
     *
     * @var string
     */
    protected $protocolName;
    /**
     * Protocol number of connection capability
     *
     * @var float
     */
    protected $protocolNumber;
    /**
     * Port number of connection capability
     *
     * @var float
     */
    protected $portNumber;
    /**
     * Status of connection capability
     *
     * @var string
     */
    protected $status;
    /**
     * Protocol aame of connection capability
     *
     * @return string
     */
    public function getProtocolName(): string
    {
        return $this->protocolName;
    }
    /**
     * Protocol aame of connection capability
     *
     * @param string $protocolName
     *
     * @return self
     */
    public function setProtocolName(string $protocolName): self
    {
        $this->initialized['protocolName'] = true;
        $this->protocolName = $protocolName;
        return $this;
    }
    /**
     * Protocol number of connection capability
     *
     * @return float
     */
    public function getProtocolNumber(): float
    {
        return $this->protocolNumber;
    }
    /**
     * Protocol number of connection capability
     *
     * @param float $protocolNumber
     *
     * @return self
     */
    public function setProtocolNumber(float $protocolNumber): self
    {
        $this->initialized['protocolNumber'] = true;
        $this->protocolNumber = $protocolNumber;
        return $this;
    }
    /**
     * Port number of connection capability
     *
     * @return float
     */
    public function getPortNumber(): float
    {
        return $this->portNumber;
    }
    /**
     * Port number of connection capability
     *
     * @param float $portNumber
     *
     * @return self
     */
    public function setPortNumber(float $portNumber): self
    {
        $this->initialized['portNumber'] = true;
        $this->portNumber = $portNumber;
        return $this;
    }
    /**
     * Status of connection capability
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Status of connection capability
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}