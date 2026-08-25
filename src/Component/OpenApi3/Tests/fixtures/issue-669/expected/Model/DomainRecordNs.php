<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DomainRecordNs implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A unique identifier for each domain record.
     *
     * @var int
     */
    protected $id;
    /**
     * The type of the DNS record. For example: A, CNAME, TXT, ...
     *
     * @var string
     */
    protected $type;
    /**
     * The host name, alias, or service being defined by the record.
     *
     * @var string
     */
    protected $name;
    /**
     * Variable data depending on record type. For example, the "data" value for an A record would be the IPv4 address to which the domain will be mapped. For a CAA record, it would contain the domain name of the CA being granted permission to issue certificates.
     *
     * @var string
     */
    protected $data;
    /**
     * The priority for SRV and MX records.
     *
     * @var int|null
     */
    protected $priority;
    /**
     * The port for SRV records.
     *
     * @var int|null
     */
    protected $port;
    /**
     * This value is the time to live for the record, in seconds. This defines the time frame that clients can cache queried information before a refresh should be requested.
     *
     * @var int
     */
    protected $ttl;
    /**
     * The weight for SRV records.
     *
     * @var int|null
     */
    protected $weight;
    /**
     * An unsigned integer between 0-255 used for CAA records.
     *
     * @var int|null
     */
    protected $flags;
    /**
     * The parameter tag for CAA records. Valid values are "issue", "issuewild", or "iodef"
     *
     * @var string|null
     */
    protected $tag;
    /**
     * A unique identifier for each domain record.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * A unique identifier for each domain record.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The type of the DNS record. For example: A, CNAME, TXT, ...
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of the DNS record. For example: A, CNAME, TXT, ...
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
     * The host name, alias, or service being defined by the record.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The host name, alias, or service being defined by the record.
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
     * Variable data depending on record type. For example, the "data" value for an A record would be the IPv4 address to which the domain will be mapped. For a CAA record, it would contain the domain name of the CA being granted permission to issue certificates.
     *
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
    /**
     * Variable data depending on record type. For example, the "data" value for an A record would be the IPv4 address to which the domain will be mapped. For a CAA record, it would contain the domain name of the CA being granted permission to issue certificates.
     *
     * @param string $data
     *
     * @return self
     */
    public function setData(string $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * The priority for SRV and MX records.
     *
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }
    /**
     * The priority for SRV and MX records.
     *
     * @param int|null $priority
     *
     * @return self
     */
    public function setPriority(?int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * The port for SRV records.
     *
     * @return int|null
     */
    public function getPort(): ?int
    {
        return $this->port;
    }
    /**
     * The port for SRV records.
     *
     * @param int|null $port
     *
     * @return self
     */
    public function setPort(?int $port): self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
    /**
     * This value is the time to live for the record, in seconds. This defines the time frame that clients can cache queried information before a refresh should be requested.
     *
     * @return int
     */
    public function getTtl(): int
    {
        return $this->ttl;
    }
    /**
     * This value is the time to live for the record, in seconds. This defines the time frame that clients can cache queried information before a refresh should be requested.
     *
     * @param int $ttl
     *
     * @return self
     */
    public function setTtl(int $ttl): self
    {
        $this->initialized['ttl'] = true;
        $this->ttl = $ttl;
        return $this;
    }
    /**
     * The weight for SRV records.
     *
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }
    /**
     * The weight for SRV records.
     *
     * @param int|null $weight
     *
     * @return self
     */
    public function setWeight(?int $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * An unsigned integer between 0-255 used for CAA records.
     *
     * @return int|null
     */
    public function getFlags(): ?int
    {
        return $this->flags;
    }
    /**
     * An unsigned integer between 0-255 used for CAA records.
     *
     * @param int|null $flags
     *
     * @return self
     */
    public function setFlags(?int $flags): self
    {
        $this->initialized['flags'] = true;
        $this->flags = $flags;
        return $this;
    }
    /**
     * The parameter tag for CAA records. Valid values are "issue", "issuewild", or "iodef"
     *
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }
    /**
     * The parameter tag for CAA records. Valid values are "issue", "issuewild", or "iodef"
     *
     * @param string|null $tag
     *
     * @return self
     */
    public function setTag(?string $tag): self
    {
        $this->initialized['tag'] = true;
        $this->tag = $tag;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'type' => ['type', 'getType', 'setType'], 'name' => ['name', 'getName', 'setName'], 'data' => ['data', 'getData', 'setData'], 'priority' => ['priority', 'getPriority', 'setPriority'], 'port' => ['port', 'getPort', 'setPort'], 'ttl' => ['ttl', 'getTtl', 'setTtl'], 'weight' => ['weight', 'getWeight', 'setWeight'], 'flags' => ['flags', 'getFlags', 'setFlags'], 'tag' => ['tag', 'getTag', 'setTag']];
    }
}