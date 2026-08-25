<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateAgentDeploymentVisibilityInputPublic implements AdditionalPropertiesInterface
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
     * Unique id
     *
     * @var string
     */
    protected $uuid;
    /**
     * - VISIBILITY_UNKNOWN: The status of the deployment is unknown
     *  - VISIBILITY_DISABLED: The deployment is disabled and will no longer service requests
     *  - VISIBILITY_PLAYGROUND: Deprecated: No longer a valid state
     *  - VISIBILITY_PUBLIC: The deployment is public and will service requests from the public internet
     *  - VISIBILITY_PRIVATE: The deployment is private and will only service requests from other agents, or through API keys
     *
     * @var string
     */
    protected $visibility = 'VISIBILITY_UNKNOWN';
    /**
     * Unique id
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique id
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * - VISIBILITY_UNKNOWN: The status of the deployment is unknown
     *  - VISIBILITY_DISABLED: The deployment is disabled and will no longer service requests
     *  - VISIBILITY_PLAYGROUND: Deprecated: No longer a valid state
     *  - VISIBILITY_PUBLIC: The deployment is public and will service requests from the public internet
     *  - VISIBILITY_PRIVATE: The deployment is private and will only service requests from other agents, or through API keys
     *
     * @return string
     */
    public function getVisibility(): string
    {
        return $this->visibility;
    }
    /**
    * - VISIBILITY_UNKNOWN: The status of the deployment is unknown
    - VISIBILITY_DISABLED: The deployment is disabled and will no longer service requests
    - VISIBILITY_PLAYGROUND: Deprecated: No longer a valid state
    - VISIBILITY_PUBLIC: The deployment is public and will service requests from the public internet
    - VISIBILITY_PRIVATE: The deployment is private and will only service requests from other agents, or through API keys
    *
    * @param string $visibility
    *
    * @return self
    */
    public function setVisibility(string $visibility): self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['uuid' => ['uuid', 'getUuid', 'setUuid'], 'visibility' => ['visibility', 'getVisibility', 'setVisibility']];
    }
}