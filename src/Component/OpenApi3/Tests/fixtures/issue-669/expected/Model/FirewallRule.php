<?php

namespace Jane\Generated\DigitalOcean\Model;

class FirewallRule extends \ArrayObject
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
     * A unique ID for the firewall rule itself.
     *
     * @var string
     */
    protected $uuid;
    /**
     * A unique ID for the database cluster to which the rule is applied.
     *
     * @var string
     */
    protected $clusterUuid;
    /**
     * The type of resource that the firewall rule allows to access the database cluster.
     *
     * @var string
     */
    protected $type;
    /**
     * The ID of the specific resource, the name of a tag applied to a group of resources, or the IP address that the firewall rule allows to access the database cluster.
     *
     * @var string
     */
    protected $value;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the firewall rule was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A unique ID for the firewall rule itself.
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * A unique ID for the firewall rule itself.
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
     * A unique ID for the database cluster to which the rule is applied.
     *
     * @return string
     */
    public function getClusterUuid(): string
    {
        return $this->clusterUuid;
    }
    /**
     * A unique ID for the database cluster to which the rule is applied.
     *
     * @param string $clusterUuid
     *
     * @return self
     */
    public function setClusterUuid(string $clusterUuid): self
    {
        $this->initialized['clusterUuid'] = true;
        $this->clusterUuid = $clusterUuid;
        return $this;
    }
    /**
     * The type of resource that the firewall rule allows to access the database cluster.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of resource that the firewall rule allows to access the database cluster.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The ID of the specific resource, the name of a tag applied to a group of resources, or the IP address that the firewall rule allows to access the database cluster.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The ID of the specific resource, the name of a tag applied to a group of resources, or the IP address that the firewall rule allows to access the database cluster.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the firewall rule was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the firewall rule was created.
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
}