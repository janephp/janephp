<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class FirewallRule implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID for the firewall rule itself.
     *
     * @var string
     */
    public string $uuid;
    /**
     * A unique ID for the database cluster to which the rule is applied.
     *
     * @var string
     */
    public string $clusterUuid;
    /**
     * The type of resource that the firewall rule allows to access the database cluster.
     *
     * @var string
     */
    public string $type;
    /**
     * The ID of the specific resource, the name of a tag applied to a group of resources, or the IP address that the firewall rule allows to access the database cluster.
     *
     * @var string
     */
    public string $value;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the firewall rule was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    public function definedProperties(): array
    {
        return ['uuid' => 'uuid', 'clusterUuid' => 'cluster_uuid', 'type' => 'type', 'value' => 'value', 'createdAt' => 'created_at'];
    }
}