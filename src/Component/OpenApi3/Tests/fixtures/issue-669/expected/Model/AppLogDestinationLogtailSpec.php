<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppLogDestinationLogtailSpec implements AdditionalPropertiesInterface
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
     * Logtail token.
     *
     * @var string
     */
    protected $token;
    /**
     * Logtail token.
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
    /**
     * Logtail token.
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['token' => ['token', 'getToken', 'setToken']];
    }
}