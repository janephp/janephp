<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseMetricsAuth implements AdditionalPropertiesInterface
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
     * @var DatabaseMetricsCredentials
     */
    protected $credentials;
    /**
     * @return DatabaseMetricsCredentials
     */
    public function getCredentials(): DatabaseMetricsCredentials
    {
        return $this->credentials;
    }
    /**
     * @param DatabaseMetricsCredentials $credentials
     *
     * @return self
     */
    public function setCredentials(DatabaseMetricsCredentials $credentials): self
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