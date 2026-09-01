<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DomainRecord implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique identifier for each domain record.
     *
     * @var int
     */
    public int $id;
    /**
     * The type of the DNS record. For example: A, CNAME, TXT, ...
     *
     * @var string
     */
    public string $type;
    /**
     * The host name, alias, or service being defined by the record.
     *
     * @var string
     */
    public string $name;
    /**
     * Variable data depending on record type. For example, the "data" value for an A record would be the IPv4 address to which the domain will be mapped. For a CAA record, it would contain the domain name of the CA being granted permission to issue certificates.
     *
     * @var string
     */
    public string $data;
    /**
     * The priority for SRV and MX records.
     *
     * @var int|null
     */
    public ?int $priority;
    /**
     * The port for SRV records.
     *
     * @var int|null
     */
    public ?int $port;
    /**
     * This value is the time to live for the record, in seconds. This defines the time frame that clients can cache queried information before a refresh should be requested.
     *
     * @var int
     */
    public int $ttl;
    /**
     * The weight for SRV records.
     *
     * @var int|null
     */
    public ?int $weight;
    /**
     * An unsigned integer between 0-255 used for CAA records.
     *
     * @var int|null
     */
    public ?int $flags;
    /**
     * The parameter tag for CAA records. Valid values are "issue", "issuewild", or "iodef"
     *
     * @var string|null
     */
    public ?string $tag;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'type' => 'type', 'name' => 'name', 'data' => 'data', 'priority' => 'priority', 'port' => 'port', 'ttl' => 'ttl', 'weight' => 'weight', 'flags' => 'flags', 'tag' => 'tag'];
    }
}