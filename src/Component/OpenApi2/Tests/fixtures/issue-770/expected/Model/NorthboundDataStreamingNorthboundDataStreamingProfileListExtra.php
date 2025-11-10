<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class NorthboundDataStreamingNorthboundDataStreamingProfileListExtra
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