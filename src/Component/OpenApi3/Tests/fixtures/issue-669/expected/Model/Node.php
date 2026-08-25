<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Node implements AdditionalPropertiesInterface
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
     * A unique ID that can be used to identify and reference the node.
     *
     * @var string
     */
    protected $id;
    /**
     * An automatically generated, human-readable name for the node.
     *
     * @var string
     */
    protected $name;
    /**
     * An object containing a `state` attribute whose value is set to a string indicating the current status of the node.
     *
     * @var NodeStatus
     */
    protected $status;
    /**
     * The ID of the Droplet used for the worker node.
     *
     * @var string
     */
    protected $dropletId;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the node was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the node was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * A unique ID that can be used to identify and reference the node.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference the node.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * An automatically generated, human-readable name for the node.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * An automatically generated, human-readable name for the node.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * An object containing a `state` attribute whose value is set to a string indicating the current status of the node.
     *
     * @return NodeStatus
     */
    public function getStatus(): NodeStatus
    {
        return $this->status;
    }
    /**
     * An object containing a `state` attribute whose value is set to a string indicating the current status of the node.
     *
     * @param NodeStatus $status
     *
     * @return self
     */
    public function setStatus(NodeStatus $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The ID of the Droplet used for the worker node.
     *
     * @return string
     */
    public function getDropletId(): string
    {
        return $this->dropletId;
    }
    /**
     * The ID of the Droplet used for the worker node.
     *
     * @param string $dropletId
     *
     * @return self
     */
    public function setDropletId(string $dropletId): self
    {
        $this->initialized['dropletId'] = true;
        $this->dropletId = $dropletId;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the node was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the node was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the node was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the node was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'status' => ['status', 'getStatus', 'setStatus'], 'dropletId' => ['droplet_id', 'getDropletId', 'setDropletId'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt']];
    }
}