<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class NorthboundDataStreamingNorthboundDataStreamingProfile
{
    /**
     * UUID of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    public string $id;
    /**
     * Profile name of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    public string $name;
    /**
     * Server host of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    public string $serverHost;
    /**
     * Server port of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    public string $serverPort;
    /**
     * User name of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    public string $user;
    /**
     * Password of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    public string $password;
    /**
     * System UUID of the Northbound Data Streaming profile for Northbound Data Streaming interface
     *
     * @var string
     */
    public string $systemId;
    /**
     * Connection status of the Northbound Data Streaming Profile
     *
     * @var string
     */
    public string $connectionStatus;
    /**
     * Subscribed data types of the Northbound Data Streaming Profile
     *
     * @var list<string>
     */
    public array $dataTypes;
    /**
     * Is Northbound Data Streaming enabled or disabled
     *
     * @var bool
     */
    public bool $northboundDataStreamingEnabled;
    /**
     * Is Northbound Data Streaming enabled by domain/zone settings
     *
     * @var bool
     */
    public bool $streamingByDomainZoneEnabled;
    /**
     * Domain Ids for 'streamingByDomainZoneEnabled' settings
     *
     * @var list<string>
     */
    public array $streamingDomainIds;
    /**
     * Zone Ids for 'streamingByDomainZoneEnabled' settings
     *
     * @var list<string>
     */
    public array $streamingZoneIds;
}