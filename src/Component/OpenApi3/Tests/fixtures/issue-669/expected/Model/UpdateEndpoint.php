<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class UpdateEndpoint implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['ttl' => 'ttl', 'certificateId' => 'certificate_id', 'customDomain' => 'custom_domain'];
    }
}