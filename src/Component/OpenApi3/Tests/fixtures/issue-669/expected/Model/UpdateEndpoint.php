<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class UpdateEndpoint implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['ttl' => ['ttl', 'getTtl', 'setTtl'], 'certificateId' => ['certificate_id', 'getCertificateId', 'setCertificateId'], 'customDomain' => ['custom_domain', 'getCustomDomain', 'setCustomDomain']];
    }
}