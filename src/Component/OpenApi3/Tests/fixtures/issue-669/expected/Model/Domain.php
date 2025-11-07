<?php

namespace Jane\Generated\DigitalOcean\Model;

class Domain extends \ArrayObject
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
     * The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, `example.com` is a valid domain name.
     *
     * @var string
     */
    protected $name;
    /**
     * This optional attribute may contain an IP address. When provided, an A record will be automatically created pointing to the apex domain.
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * This value is the time to live for the records on this domain, in seconds. This defines the time frame that clients can cache queried information before a refresh should be requested.
     *
     * @var int|null
     */
    protected $ttl;
    /**
     * This attribute contains the complete contents of the zone file for the selected domain. Individual domain record resources should be used to get more granular control over records. However, this attribute can also be used to get information about the SOA record, which is created automatically and is not accessible as an individual record resource.
     *
     * @var string|null
     */
    protected $zoneFile;
    /**
     * The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, `example.com` is a valid domain name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, `example.com` is a valid domain name.
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
     * This optional attribute may contain an IP address. When provided, an A record will be automatically created pointing to the apex domain.
     *
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    /**
     * This optional attribute may contain an IP address. When provided, an A record will be automatically created pointing to the apex domain.
     *
     * @param string $ipAddress
     *
     * @return self
     */
    public function setIpAddress(string $ipAddress): self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * This value is the time to live for the records on this domain, in seconds. This defines the time frame that clients can cache queried information before a refresh should be requested.
     *
     * @return int|null
     */
    public function getTtl(): ?int
    {
        return $this->ttl;
    }
    /**
     * This value is the time to live for the records on this domain, in seconds. This defines the time frame that clients can cache queried information before a refresh should be requested.
     *
     * @param int|null $ttl
     *
     * @return self
     */
    public function setTtl(?int $ttl): self
    {
        $this->initialized['ttl'] = true;
        $this->ttl = $ttl;
        return $this;
    }
    /**
     * This attribute contains the complete contents of the zone file for the selected domain. Individual domain record resources should be used to get more granular control over records. However, this attribute can also be used to get information about the SOA record, which is created automatically and is not accessible as an individual record resource.
     *
     * @return string|null
     */
    public function getZoneFile(): ?string
    {
        return $this->zoneFile;
    }
    /**
     * This attribute contains the complete contents of the zone file for the selected domain. Individual domain record resources should be used to get more granular control over records. However, this attribute can also be used to get information about the SOA record, which is created automatically and is not accessible as an individual record resource.
     *
     * @param string|null $zoneFile
     *
     * @return self
     */
    public function setZoneFile(?string $zoneFile): self
    {
        $this->initialized['zoneFile'] = true;
        $this->zoneFile = $zoneFile;
        return $this;
    }
}