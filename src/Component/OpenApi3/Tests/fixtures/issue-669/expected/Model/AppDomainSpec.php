<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppDomainSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The hostname for the domain
     *
     * @var string
     */
    public string $domain;
    /**
     * - DEFAULT: The default `.ondigitalocean.app` domain assigned to this app
     * - PRIMARY: The primary domain for this app that is displayed as the default in the control panel, used in bindable environment variables, and any other places that reference an app's live URL. Only one domain may be set as primary.
     * - ALIAS: A non-primary domain
     *
     * @var string
     */
    public string $type = 'UNSPECIFIED';
    /**
     * Indicates whether the domain includes all sub-domains, in addition to the given domain
     *
     * @var bool
     */
    public bool $wildcard;
    /**
     * Optional. If the domain uses DigitalOcean DNS and you would like App
     * Platform to automatically manage it for you, set this to the name of the
     * domain on your account.
     * 
     * For example, If the domain you are adding is `app.domain.com`, the zone
     * could be `domain.com`.
     *
     * @var string
     */
    public string $zone;
    /**
     * The minimum version of TLS a client application can use to access resources for the domain.  Must be one of the following values wrapped within quotations: `"1.2"` or `"1.3"`.
     *
     * @var string
     */
    public string $minimumTlsVersion;
    public function definedProperties(): array
    {
        return ['domain' => 'domain', 'type' => 'type', 'wildcard' => 'wildcard', 'zone' => 'zone', 'minimumTlsVersion' => 'minimum_tls_version'];
    }
}