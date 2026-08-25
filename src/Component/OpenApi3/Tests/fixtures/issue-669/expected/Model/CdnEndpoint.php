<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class CdnEndpoint implements AdditionalPropertiesInterface
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
     * A unique ID that can be used to identify and reference a CDN endpoint.
     *
     * @var string
     */
    protected $id;
    /**
     * The fully qualified domain name (FQDN) for the origin server which provides the content for the CDN. This is currently restricted to a Space.
     *
     * @var string
     */
    protected $origin;
    /**
     * The fully qualified domain name (FQDN) from which the CDN-backed content is served.
     *
     * @var string
     */
    protected $endpoint;
    /**
     * The amount of time the content is cached by the CDN's edge servers in seconds. TTL must be one of 60, 600, 3600, 86400, or 604800. Defaults to 3600 (one hour) when excluded.
     *
     * @var int
     */
    protected $ttl = 3600;
    /**
     * The ID of a DigitalOcean managed TLS certificate used for SSL when a custom subdomain is provided.
     *
     * @var string
     */
    protected $certificateId;
    /**
     * The fully qualified domain name (FQDN) of the custom subdomain used with the CDN endpoint.
     *
     * @var string
     */
    protected $customDomain;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the CDN endpoint was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A unique ID that can be used to identify and reference a CDN endpoint.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference a CDN endpoint.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The fully qualified domain name (FQDN) for the origin server which provides the content for the CDN. This is currently restricted to a Space.
     *
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }
    /**
     * The fully qualified domain name (FQDN) for the origin server which provides the content for the CDN. This is currently restricted to a Space.
     *
     * @param string $origin
     *
     * @return self
     */
    public function setOrigin(string $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * The fully qualified domain name (FQDN) from which the CDN-backed content is served.
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }
    /**
     * The fully qualified domain name (FQDN) from which the CDN-backed content is served.
     *
     * @param string $endpoint
     *
     * @return self
     */
    public function setEndpoint(string $endpoint): self
    {
        $this->initialized['endpoint'] = true;
        $this->endpoint = $endpoint;
        return $this;
    }
    /**
     * The amount of time the content is cached by the CDN's edge servers in seconds. TTL must be one of 60, 600, 3600, 86400, or 604800. Defaults to 3600 (one hour) when excluded.
     *
     * @return int
     */
    public function getTtl(): int
    {
        return $this->ttl;
    }
    /**
     * The amount of time the content is cached by the CDN's edge servers in seconds. TTL must be one of 60, 600, 3600, 86400, or 604800. Defaults to 3600 (one hour) when excluded.
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
     * The ID of a DigitalOcean managed TLS certificate used for SSL when a custom subdomain is provided.
     *
     * @return string
     */
    public function getCertificateId(): string
    {
        return $this->certificateId;
    }
    /**
     * The ID of a DigitalOcean managed TLS certificate used for SSL when a custom subdomain is provided.
     *
     * @param string $certificateId
     *
     * @return self
     */
    public function setCertificateId(string $certificateId): self
    {
        $this->initialized['certificateId'] = true;
        $this->certificateId = $certificateId;
        return $this;
    }
    /**
     * The fully qualified domain name (FQDN) of the custom subdomain used with the CDN endpoint.
     *
     * @return string
     */
    public function getCustomDomain(): string
    {
        return $this->customDomain;
    }
    /**
     * The fully qualified domain name (FQDN) of the custom subdomain used with the CDN endpoint.
     *
     * @param string $customDomain
     *
     * @return self
     */
    public function setCustomDomain(string $customDomain): self
    {
        $this->initialized['customDomain'] = true;
        $this->customDomain = $customDomain;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the CDN endpoint was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the CDN endpoint was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'origin' => ['origin', 'getOrigin', 'setOrigin'], 'endpoint' => ['endpoint', 'getEndpoint', 'setEndpoint'], 'ttl' => ['ttl', 'getTtl', 'setTtl'], 'certificateId' => ['certificate_id', 'getCertificateId', 'setCertificateId'], 'customDomain' => ['custom_domain', 'getCustomDomain', 'setCustomDomain'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt']];
    }
}