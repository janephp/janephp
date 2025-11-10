<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneSyslog
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
     * Syslog configuration type.
     *
     * @var string
     */
    protected $syslogConfigType = 'CUSTOM';
    /**
     * Syslog server profile ID.
     *
     * @var string
     */
    protected $syslogServerProfileId;
    /**
     * Flow Level of the syslog
     *
     * @var string
     */
    protected $flowLevel = 'GENERAL_LOGS';
    /**
     * @var string
     */
    protected $address;
    /**
     * Port number of the syslog server
     *
     * @var int
     */
    protected $port = 514;
    /**
     * Protocol of the syslog server
     *
     * @var string
     */
    protected $protocol = 'IPPROTO_TCP';
    /**
     * @var string
     */
    protected $secondaryAddress;
    /**
     * Secondary Server Port of the syslog server
     *
     * @var int
     */
    protected $secondaryPort = 514;
    /**
     * Secondary Server Protocol of the syslog server
     *
     * @var string
     */
    protected $secondaryProtocol = 'IPPROTO_TCP';
    /**
     * Facility of the syslog server
     *
     * @var string
     */
    protected $facility = 'Keep_Original';
    /**
     * Priority of the log messages
     *
     * @var string
     */
    protected $priority = 'Error';
    /**
     * Syslog configuration type.
     *
     * @return string
     */
    public function getSyslogConfigType(): string
    {
        return $this->syslogConfigType;
    }
    /**
     * Syslog configuration type.
     *
     * @param string $syslogConfigType
     *
     * @return self
     */
    public function setSyslogConfigType(string $syslogConfigType): self
    {
        $this->initialized['syslogConfigType'] = true;
        $this->syslogConfigType = $syslogConfigType;
        return $this;
    }
    /**
     * Syslog server profile ID.
     *
     * @return string
     */
    public function getSyslogServerProfileId(): string
    {
        return $this->syslogServerProfileId;
    }
    /**
     * Syslog server profile ID.
     *
     * @param string $syslogServerProfileId
     *
     * @return self
     */
    public function setSyslogServerProfileId(string $syslogServerProfileId): self
    {
        $this->initialized['syslogServerProfileId'] = true;
        $this->syslogServerProfileId = $syslogServerProfileId;
        return $this;
    }
    /**
     * Flow Level of the syslog
     *
     * @return string
     */
    public function getFlowLevel(): string
    {
        return $this->flowLevel;
    }
    /**
     * Flow Level of the syslog
     *
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
     * Port number of the syslog server
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * Port number of the syslog server
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
     * Protocol of the syslog server
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * Protocol of the syslog server
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
     * Secondary Server Port of the syslog server
     *
     * @return int
     */
    public function getSecondaryPort(): int
    {
        return $this->secondaryPort;
    }
    /**
     * Secondary Server Port of the syslog server
     *
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
     * Secondary Server Protocol of the syslog server
     *
     * @return string
     */
    public function getSecondaryProtocol(): string
    {
        return $this->secondaryProtocol;
    }
    /**
     * Secondary Server Protocol of the syslog server
     *
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
     * Facility of the syslog server
     *
     * @return string
     */
    public function getFacility(): string
    {
        return $this->facility;
    }
    /**
     * Facility of the syslog server
     *
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
     * Priority of the log messages
     *
     * @return string
     */
    public function getPriority(): string
    {
        return $this->priority;
    }
    /**
     * Priority of the log messages
     *
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