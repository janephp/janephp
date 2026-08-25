<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class StickySessions implements AdditionalPropertiesInterface
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
     * An attribute indicating how and if requests from a client will be persistently served by the same backend Droplet. The possible values are `cookies` or `none`.
     *
     * @var string
     */
    protected $type = 'none';
    /**
     * The name of the cookie sent to the client. This attribute is only returned when using `cookies` for the sticky sessions type.
     *
     * @var string
     */
    protected $cookieName;
    /**
     * The number of seconds until the cookie set by the load balancer expires. This attribute is only returned when using `cookies` for the sticky sessions type.
     *
     * @var int
     */
    protected $cookieTtlSeconds;
    /**
     * An attribute indicating how and if requests from a client will be persistently served by the same backend Droplet. The possible values are `cookies` or `none`.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * An attribute indicating how and if requests from a client will be persistently served by the same backend Droplet. The possible values are `cookies` or `none`.
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
     * The name of the cookie sent to the client. This attribute is only returned when using `cookies` for the sticky sessions type.
     *
     * @return string
     */
    public function getCookieName(): string
    {
        return $this->cookieName;
    }
    /**
     * The name of the cookie sent to the client. This attribute is only returned when using `cookies` for the sticky sessions type.
     *
     * @param string $cookieName
     *
     * @return self
     */
    public function setCookieName(string $cookieName): self
    {
        $this->initialized['cookieName'] = true;
        $this->cookieName = $cookieName;
        return $this;
    }
    /**
     * The number of seconds until the cookie set by the load balancer expires. This attribute is only returned when using `cookies` for the sticky sessions type.
     *
     * @return int
     */
    public function getCookieTtlSeconds(): int
    {
        return $this->cookieTtlSeconds;
    }
    /**
     * The number of seconds until the cookie set by the load balancer expires. This attribute is only returned when using `cookies` for the sticky sessions type.
     *
     * @param int $cookieTtlSeconds
     *
     * @return self
     */
    public function setCookieTtlSeconds(int $cookieTtlSeconds): self
    {
        $this->initialized['cookieTtlSeconds'] = true;
        $this->cookieTtlSeconds = $cookieTtlSeconds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'cookieName' => ['cookie_name', 'getCookieName', 'setCookieName'], 'cookieTtlSeconds' => ['cookie_ttl_seconds', 'getCookieTtlSeconds', 'setCookieTtlSeconds']];
    }
}