<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Domain implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, `example.com` is a valid domain name.
     *
     * @var string
     */
    public string $name;
    /**
     * This optional attribute may contain an IP address. When provided, an A record will be automatically created pointing to the apex domain.
     *
     * @var string
     */
    public string $ipAddress;
    /**
     * This value is the time to live for the records on this domain, in seconds. This defines the time frame that clients can cache queried information before a refresh should be requested.
     *
     * @var int|null
     */
    public ?int $ttl;
    /**
     * This attribute contains the complete contents of the zone file for the selected domain. Individual domain record resources should be used to get more granular control over records. However, this attribute can also be used to get information about the SOA record, which is created automatically and is not accessible as an individual record resource.
     *
     * @var string|null
     */
    public ?string $zoneFile;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'ipAddress' => 'ip_address', 'ttl' => 'ttl', 'zoneFile' => 'zone_file'];
    }
}