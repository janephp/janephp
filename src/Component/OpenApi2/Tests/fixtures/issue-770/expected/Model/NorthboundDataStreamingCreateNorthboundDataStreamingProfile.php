<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class NorthboundDataStreamingCreateNorthboundDataStreamingProfile
{
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
    public bool $northboundDataStreamingEnabled = false;
    /**
     * Is Northbound Data Streaming enabled by domain/zone settings
     *
     * @var bool
     */
    public bool $streamingByDomainZoneEnabled = false;
    /**
     * Domain Ids for 'streamingByDomainZoneEnabled' settings
     *
     * @var list<string>
     */
    public array $streamingDomainIds = array();
    /**
     * Zone Ids for 'streamingByDomainZoneEnabled' settings
     *
     * @var list<string>
     */
    public array $streamingZoneIds = array();
}