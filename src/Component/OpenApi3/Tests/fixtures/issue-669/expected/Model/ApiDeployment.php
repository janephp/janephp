<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiDeployment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Name
     *
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $status = 'STATUS_UNKNOWN';
    /**
     * Last modified
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * Access your deployed agent here
     *
     * @var string
     */
    public string $url;
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
        return ['createdAt' => 'created_at', 'name' => 'name', 'status' => 'status', 'updatedAt' => 'updated_at', 'url' => 'url', 'uuid' => 'uuid', 'visibility' => 'visibility'];
    }
}