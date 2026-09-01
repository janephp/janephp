<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Node implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference the node.
     *
     * @var string
     */
    public string $id;
    /**
     * An automatically generated, human-readable name for the node.
     *
     * @var string
     */
    public string $name;
    /**
     * An object containing a `state` attribute whose value is set to a string indicating the current status of the node.
     *
     * @var NodeStatus
     */
    public NodeStatus $status;
    /**
     * The ID of the Droplet used for the worker node.
     *
     * @var string
     */
    public string $dropletId;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the node was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the node was last updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'status' => 'status', 'dropletId' => 'droplet_id', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at'];
    }
}