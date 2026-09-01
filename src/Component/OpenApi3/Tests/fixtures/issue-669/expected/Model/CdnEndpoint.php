<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class CdnEndpoint implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference a CDN endpoint.
     *
     * @var string
     */
    public string $id;
    /**
     * The fully qualified domain name (FQDN) for the origin server which provides the content for the CDN. This is currently restricted to a Space.
     *
     * @var string
     */
    public string $origin;
    /**
     * The fully qualified domain name (FQDN) from which the CDN-backed content is served.
     *
     * @var string
     */
    public string $endpoint;
    /**
     * The amount of time the content is cached by the CDN's edge servers in seconds. TTL must be one of 60, 600, 3600, 86400, or 604800. Defaults to 3600 (one hour) when excluded.
     *
     * @var int
     */
    public int $ttl = 3600;
    /**
     * The ID of a DigitalOcean managed TLS certificate used for SSL when a custom subdomain is provided.
     *
     * @var string
     */
    public string $certificateId;
    /**
     * The fully qualified domain name (FQDN) of the custom subdomain used with the CDN endpoint.
     *
     * @var string
     */
    public string $customDomain;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the CDN endpoint was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'origin' => 'origin', 'endpoint' => 'endpoint', 'ttl' => 'ttl', 'certificateId' => 'certificate_id', 'customDomain' => 'custom_domain', 'createdAt' => 'created_at'];
    }
}