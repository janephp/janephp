<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApSnmpAgentProfileTargetConfig
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
    protected $address;
    /**
     * @var int
     */
    protected $port;
    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }
    /**
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
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
}