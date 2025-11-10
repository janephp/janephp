<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcModifyUserDefinedProfile
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
    protected $name;
    /**
     * Type of the User Defined Application
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $destIp;
    /**
     * @var string
     */
    protected $netmask;
    /**
     * Destination Port of User Defined Application
     *
     * @var int
     */
    protected $destPort;
    /**
     * Protocol of User Defined Application
     *
     * @var string
     */
    protected $protocol;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Type of the User Defined Application
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of the User Defined Application
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getDestIp(): string
    {
        return $this->destIp;
    }
    /**
     * @param string $destIp
     *
     * @return self
     */
    public function setDestIp(string $destIp): self
    {
        $this->initialized['destIp'] = true;
        $this->destIp = $destIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getNetmask(): string
    {
        return $this->netmask;
    }
    /**
     * @param string $netmask
     *
     * @return self
     */
    public function setNetmask(string $netmask): self
    {
        $this->initialized['netmask'] = true;
        $this->netmask = $netmask;
        return $this;
    }
    /**
     * Destination Port of User Defined Application
     *
     * @return int
     */
    public function getDestPort(): int
    {
        return $this->destPort;
    }
    /**
     * Destination Port of User Defined Application
     *
     * @param int $destPort
     *
     * @return self
     */
    public function setDestPort(int $destPort): self
    {
        $this->initialized['destPort'] = true;
        $this->destPort = $destPort;
        return $this;
    }
    /**
     * Protocol of User Defined Application
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * Protocol of User Defined Application
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
}