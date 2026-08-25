<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseMetricsCredentials implements AdditionalPropertiesInterface
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
     * @var DatabasesBasicAuthCredentials
     */
    protected $credentials;
    /**
     * @return DatabasesBasicAuthCredentials
     */
    public function getCredentials(): DatabasesBasicAuthCredentials
    {
        return $this->credentials;
    }
    /**
     * @param DatabasesBasicAuthCredentials $credentials
     *
     * @return self
     */
    public function setCredentials(DatabasesBasicAuthCredentials $credentials): self
    {
        $this->initialized['credentials'] = true;
        $this->credentials = $credentials;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['credentials' => ['credentials', 'getCredentials', 'setCredentials']];
    }
}