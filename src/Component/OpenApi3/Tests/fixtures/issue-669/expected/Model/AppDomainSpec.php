<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppDomainSpec implements AdditionalPropertiesInterface
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
     * The hostname for the domain
     *
     * @var string
     */
    protected $domain;
    /**
     * - DEFAULT: The default `.ondigitalocean.app` domain assigned to this app
     * - PRIMARY: The primary domain for this app that is displayed as the default in the control panel, used in bindable environment variables, and any other places that reference an app's live URL. Only one domain may be set as primary.
     * - ALIAS: A non-primary domain
     *
     * @var string
     */
    protected $type = 'UNSPECIFIED';
    /**
     * Indicates whether the domain includes all sub-domains, in addition to the given domain
     *
     * @var bool
     */
    protected $wildcard;
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
    protected $zone;
    /**
     * The minimum version of TLS a client application can use to access resources for the domain.  Must be one of the following values wrapped within quotations: `"1.2"` or `"1.3"`.
     *
     * @var string
     */
    protected $minimumTlsVersion;
    /**
     * The hostname for the domain
     *
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }
    /**
     * The hostname for the domain
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain(string $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * - DEFAULT: The default `.ondigitalocean.app` domain assigned to this app
     * - PRIMARY: The primary domain for this app that is displayed as the default in the control panel, used in bindable environment variables, and any other places that reference an app's live URL. Only one domain may be set as primary.
     * - ALIAS: A non-primary domain
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * - DEFAULT: The default `.ondigitalocean.app` domain assigned to this app
    - PRIMARY: The primary domain for this app that is displayed as the default in the control panel, used in bindable environment variables, and any other places that reference an app's live URL. Only one domain may be set as primary.
    - ALIAS: A non-primary domain
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
     * Indicates whether the domain includes all sub-domains, in addition to the given domain
     *
     * @return bool
     */
    public function getWildcard(): bool
    {
        return $this->wildcard;
    }
    /**
     * Indicates whether the domain includes all sub-domains, in addition to the given domain
     *
     * @param bool $wildcard
     *
     * @return self
     */
    public function setWildcard(bool $wildcard): self
    {
        $this->initialized['wildcard'] = true;
        $this->wildcard = $wildcard;
        return $this;
    }
    /**
     * Optional. If the domain uses DigitalOcean DNS and you would like App
     * Platform to automatically manage it for you, set this to the name of the
     * domain on your account.
     * 
     * For example, If the domain you are adding is `app.domain.com`, the zone
     * could be `domain.com`.
     *
     * @return string
     */
    public function getZone(): string
    {
        return $this->zone;
    }
    /**
    * Optional. If the domain uses DigitalOcean DNS and you would like App
    Platform to automatically manage it for you, set this to the name of the
    domain on your account.
    
    For example, If the domain you are adding is `app.domain.com`, the zone
    could be `domain.com`.
    *
    * @param string $zone
    *
    * @return self
    */
    public function setZone(string $zone): self
    {
        $this->initialized['zone'] = true;
        $this->zone = $zone;
        return $this;
    }
    /**
     * The minimum version of TLS a client application can use to access resources for the domain.  Must be one of the following values wrapped within quotations: `"1.2"` or `"1.3"`.
     *
     * @return string
     */
    public function getMinimumTlsVersion(): string
    {
        return $this->minimumTlsVersion;
    }
    /**
     * The minimum version of TLS a client application can use to access resources for the domain.  Must be one of the following values wrapped within quotations: `"1.2"` or `"1.3"`.
     *
     * @param string $minimumTlsVersion
     *
     * @return self
     */
    public function setMinimumTlsVersion(string $minimumTlsVersion): self
    {
        $this->initialized['minimumTlsVersion'] = true;
        $this->minimumTlsVersion = $minimumTlsVersion;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['domain' => ['domain', 'getDomain', 'setDomain'], 'type' => ['type', 'getType', 'setType'], 'wildcard' => ['wildcard', 'getWildcard', 'setWildcard'], 'zone' => ['zone', 'getZone', 'setZone'], 'minimumTlsVersion' => ['minimum_tls_version', 'getMinimumTlsVersion', 'setMinimumTlsVersion']];
    }
}