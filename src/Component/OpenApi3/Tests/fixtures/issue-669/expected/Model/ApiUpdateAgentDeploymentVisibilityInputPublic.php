<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateAgentDeploymentVisibilityInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique id
     *
     * @var string
     */
    public string $uuid;
    /**
     * - VISIBILITY_UNKNOWN: The status of the deployment is unknown
     *  - VISIBILITY_DISABLED: The deployment is disabled and will no longer service requests
     *  - VISIBILITY_PLAYGROUND: Deprecated: No longer a valid state
     *  - VISIBILITY_PUBLIC: The deployment is public and will service requests from the public internet
     *  - VISIBILITY_PRIVATE: The deployment is private and will only service requests from other agents, or through API keys
     *
     * @var string
     */
    public string $visibility = 'VISIBILITY_UNKNOWN';
    public function definedProperties(): array
    {
        return ['uuid' => 'uuid', 'visibility' => 'visibility'];
    }
}