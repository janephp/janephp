<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DockerCredentialsAuthsRegistryDigitaloceanCom implements AdditionalPropertiesInterface
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
     * A base64 encoded string containing credentials for the container registry.
     *
     * @var string
     */
    protected $auth;
    /**
     * A base64 encoded string containing credentials for the container registry.
     *
     * @return string
     */
    public function getAuth(): string
    {
        return $this->auth;
    }
    /**
     * A base64 encoded string containing credentials for the container registry.
     *
     * @param string $auth
     *
     * @return self
     */
    public function setAuth(string $auth): self
    {
        $this->initialized['auth'] = true;
        $this->auth = $auth;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['auth' => ['auth', 'getAuth', 'setAuth']];
    }
}