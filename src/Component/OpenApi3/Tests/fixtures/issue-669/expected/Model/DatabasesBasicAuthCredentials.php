<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabasesBasicAuthCredentials implements AdditionalPropertiesInterface
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
     * basic authentication username for metrics HTTP endpoint
     *
     * @var string
     */
    protected $basicAuthUsername;
    /**
     * basic authentication password for metrics HTTP endpoint
     *
     * @var string
     */
    protected $basicAuthPassword;
    /**
     * basic authentication username for metrics HTTP endpoint
     *
     * @return string
     */
    public function getBasicAuthUsername(): string
    {
        return $this->basicAuthUsername;
    }
    /**
     * basic authentication username for metrics HTTP endpoint
     *
     * @param string $basicAuthUsername
     *
     * @return self
     */
    public function setBasicAuthUsername(string $basicAuthUsername): self
    {
        $this->initialized['basicAuthUsername'] = true;
        $this->basicAuthUsername = $basicAuthUsername;
        return $this;
    }
    /**
     * basic authentication password for metrics HTTP endpoint
     *
     * @return string
     */
    public function getBasicAuthPassword(): string
    {
        return $this->basicAuthPassword;
    }
    /**
     * basic authentication password for metrics HTTP endpoint
     *
     * @param string $basicAuthPassword
     *
     * @return self
     */
    public function setBasicAuthPassword(string $basicAuthPassword): self
    {
        $this->initialized['basicAuthPassword'] = true;
        $this->basicAuthPassword = $basicAuthPassword;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['basicAuthUsername' => ['basic_auth_username', 'getBasicAuthUsername', 'setBasicAuthUsername'], 'basicAuthPassword' => ['basic_auth_password', 'getBasicAuthPassword', 'setBasicAuthPassword']];
    }
}