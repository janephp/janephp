<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2DatabasesMetricsCredentialsPutBody extends \ArrayObject
{
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
}