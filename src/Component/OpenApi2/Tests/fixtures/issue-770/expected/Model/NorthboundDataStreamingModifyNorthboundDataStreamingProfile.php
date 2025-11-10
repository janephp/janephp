<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class NorthboundDataStreamingModifyNorthboundDataStreamingProfile
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
     * Profile name of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    protected $name;
    /**
     * Server host of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    protected $serverHost;
    /**
     * Server port of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    protected $serverPort;
    /**
     * User name of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    protected $user;
    /**
     * Password of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    protected $password;
    /**
     * System UUID of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    protected $systemId;
    /**
     * Subscribed data types of the Northbound Data Streaming Profile
     *
     * @var list<string>
     */
    protected $dataTypes;
    /**
     * Is Northbound Data Streaming enabled or disabled
     *
     * @var bool
     */
    protected $northboundDataStreamingEnabled;
    /**
     * Is Northbound Data Streaming enabled by domain/zone settings
     *
     * @var bool
     */
    protected $streamingByDomainZoneEnabled;
    /**
     * Domain Ids for 'streamingByDomainZoneEnabled' settings
     *
     * @var list<string>
     */
    protected $streamingDomainIds;
    /**
     * Zone Ids for 'streamingByDomainZoneEnabled' settings
     *
     * @var list<string>
     */
    protected $streamingZoneIds;
    /**
     * Profile name of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Profile name of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
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
     * Server host of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @return string
     */
    public function getServerHost(): string
    {
        return $this->serverHost;
    }
    /**
     * Server host of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @param string $serverHost
     *
     * @return self
     */
    public function setServerHost(string $serverHost): self
    {
        $this->initialized['serverHost'] = true;
        $this->serverHost = $serverHost;
        return $this;
    }
    /**
     * Server port of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @return string
     */
    public function getServerPort(): string
    {
        return $this->serverPort;
    }
    /**
     * Server port of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @param string $serverPort
     *
     * @return self
     */
    public function setServerPort(string $serverPort): self
    {
        $this->initialized['serverPort'] = true;
        $this->serverPort = $serverPort;
        return $this;
    }
    /**
     * User name of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }
    /**
     * User name of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * Password of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * Password of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * System UUID of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @return string
     */
    public function getSystemId(): string
    {
        return $this->systemId;
    }
    /**
     * System UUID of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @param string $systemId
     *
     * @return self
     */
    public function setSystemId(string $systemId): self
    {
        $this->initialized['systemId'] = true;
        $this->systemId = $systemId;
        return $this;
    }
    /**
     * Subscribed data types of the Northbound Data Streaming Profile
     *
     * @return list<string>
     */
    public function getDataTypes(): array
    {
        return $this->dataTypes;
    }
    /**
     * Subscribed data types of the Northbound Data Streaming Profile
     *
     * @param list<string> $dataTypes
     *
     * @return self
     */
    public function setDataTypes(array $dataTypes): self
    {
        $this->initialized['dataTypes'] = true;
        $this->dataTypes = $dataTypes;
        return $this;
    }
    /**
     * Is Northbound Data Streaming enabled or disabled
     *
     * @return bool
     */
    public function getNorthboundDataStreamingEnabled(): bool
    {
        return $this->northboundDataStreamingEnabled;
    }
    /**
     * Is Northbound Data Streaming enabled or disabled
     *
     * @param bool $northboundDataStreamingEnabled
     *
     * @return self
     */
    public function setNorthboundDataStreamingEnabled(bool $northboundDataStreamingEnabled): self
    {
        $this->initialized['northboundDataStreamingEnabled'] = true;
        $this->northboundDataStreamingEnabled = $northboundDataStreamingEnabled;
        return $this;
    }
    /**
     * Is Northbound Data Streaming enabled by domain/zone settings
     *
     * @return bool
     */
    public function getStreamingByDomainZoneEnabled(): bool
    {
        return $this->streamingByDomainZoneEnabled;
    }
    /**
     * Is Northbound Data Streaming enabled by domain/zone settings
     *
     * @param bool $streamingByDomainZoneEnabled
     *
     * @return self
     */
    public function setStreamingByDomainZoneEnabled(bool $streamingByDomainZoneEnabled): self
    {
        $this->initialized['streamingByDomainZoneEnabled'] = true;
        $this->streamingByDomainZoneEnabled = $streamingByDomainZoneEnabled;
        return $this;
    }
    /**
     * Domain Ids for 'streamingByDomainZoneEnabled' settings
     *
     * @return list<string>
     */
    public function getStreamingDomainIds(): array
    {
        return $this->streamingDomainIds;
    }
    /**
     * Domain Ids for 'streamingByDomainZoneEnabled' settings
     *
     * @param list<string> $streamingDomainIds
     *
     * @return self
     */
    public function setStreamingDomainIds(array $streamingDomainIds): self
    {
        $this->initialized['streamingDomainIds'] = true;
        $this->streamingDomainIds = $streamingDomainIds;
        return $this;
    }
    /**
     * Zone Ids for 'streamingByDomainZoneEnabled' settings
     *
     * @return list<string>
     */
    public function getStreamingZoneIds(): array
    {
        return $this->streamingZoneIds;
    }
    /**
     * Zone Ids for 'streamingByDomainZoneEnabled' settings
     *
     * @param list<string> $streamingZoneIds
     *
     * @return self
     */
    public function setStreamingZoneIds(array $streamingZoneIds): self
    {
        $this->initialized['streamingZoneIds'] = true;
        $this->streamingZoneIds = $streamingZoneIds;
        return $this;
    }
}