<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonTargetConfig
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
     * address of the SNMP Trap
     *
     * @var string
     */
    protected $address;
    /**
     * port number of the SNMP Trap
     *
     * @var int
     */
    protected $port;
    /**
     * address of the SNMP Trap
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }
    /**
     * address of the SNMP Trap
     *
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
     * port number of the SNMP Trap
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * port number of the SNMP Trap
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
}