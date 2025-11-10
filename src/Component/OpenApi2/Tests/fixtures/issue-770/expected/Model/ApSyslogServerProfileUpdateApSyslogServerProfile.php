<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApSyslogServerProfileUpdateApSyslogServerProfile
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
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $primaryAddress;
    /**
     * @var int
     */
    protected $primaryPort;
    /**
     * @var string
     */
    protected $primaryProtocol;
    /**
     * @var string
     */
    protected $secondaryAddress;
    /**
     * @var int
     */
    protected $secondaryPort;
    /**
     * @var string
     */
    protected $secondaryProtocol = 'IPPROTO_TCP';
    /**
     * @var string
     */
    protected $redundancyMode = 'ACTIVE_ACTIVE';
    /**
     * @var string
     */
    protected $flowLevel = 'GENERAL_LOGS';
    /**
     * @var string
     */
    protected $facility = 'KEEP_ORIGINAL';
    /**
     * @var string
     */
    protected $priority = 'ERROR';
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getPrimaryAddress(): string
    {
        return $this->primaryAddress;
    }
    /**
     * @param string $primaryAddress
     *
     * @return self
     */
    public function setPrimaryAddress(string $primaryAddress): self
    {
        $this->initialized['primaryAddress'] = true;
        $this->primaryAddress = $primaryAddress;
        return $this;
    }
    /**
     * @return int
     */
    public function getPrimaryPort(): int
    {
        return $this->primaryPort;
    }
    /**
     * @param int $primaryPort
     *
     * @return self
     */
    public function setPrimaryPort(int $primaryPort): self
    {
        $this->initialized['primaryPort'] = true;
        $this->primaryPort = $primaryPort;
        return $this;
    }
    /**
     * @return string
     */
    public function getPrimaryProtocol(): string
    {
        return $this->primaryProtocol;
    }
    /**
     * @param string $primaryProtocol
     *
     * @return self
     */
    public function setPrimaryProtocol(string $primaryProtocol): self
    {
        $this->initialized['primaryProtocol'] = true;
        $this->primaryProtocol = $primaryProtocol;
        return $this;
    }
    /**
     * @return string
     */
    public function getSecondaryAddress(): string
    {
        return $this->secondaryAddress;
    }
    /**
     * @param string $secondaryAddress
     *
     * @return self
     */
    public function setSecondaryAddress(string $secondaryAddress): self
    {
        $this->initialized['secondaryAddress'] = true;
        $this->secondaryAddress = $secondaryAddress;
        return $this;
    }
    /**
     * @return int
     */
    public function getSecondaryPort(): int
    {
        return $this->secondaryPort;
    }
    /**
     * @param int $secondaryPort
     *
     * @return self
     */
    public function setSecondaryPort(int $secondaryPort): self
    {
        $this->initialized['secondaryPort'] = true;
        $this->secondaryPort = $secondaryPort;
        return $this;
    }
    /**
     * @return string
     */
    public function getSecondaryProtocol(): string
    {
        return $this->secondaryProtocol;
    }
    /**
     * @param string $secondaryProtocol
     *
     * @return self
     */
    public function setSecondaryProtocol(string $secondaryProtocol): self
    {
        $this->initialized['secondaryProtocol'] = true;
        $this->secondaryProtocol = $secondaryProtocol;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedundancyMode(): string
    {
        return $this->redundancyMode;
    }
    /**
     * @param string $redundancyMode
     *
     * @return self
     */
    public function setRedundancyMode(string $redundancyMode): self
    {
        $this->initialized['redundancyMode'] = true;
        $this->redundancyMode = $redundancyMode;
        return $this;
    }
    /**
     * @return string
     */
    public function getFlowLevel(): string
    {
        return $this->flowLevel;
    }
    /**
     * @param string $flowLevel
     *
     * @return self
     */
    public function setFlowLevel(string $flowLevel): self
    {
        $this->initialized['flowLevel'] = true;
        $this->flowLevel = $flowLevel;
        return $this;
    }
    /**
     * @return string
     */
    public function getFacility(): string
    {
        return $this->facility;
    }
    /**
     * @param string $facility
     *
     * @return self
     */
    public function setFacility(string $facility): self
    {
        $this->initialized['facility'] = true;
        $this->facility = $facility;
        return $this;
    }
    /**
     * @return string
     */
    public function getPriority(): string
    {
        return $this->priority;
    }
    /**
     * @param string $priority
     *
     * @return self
     */
    public function setPriority(string $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
}