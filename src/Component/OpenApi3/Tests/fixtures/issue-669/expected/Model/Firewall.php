<?php

namespace Jane\Generated\DigitalOcean\Model;

class Firewall extends \ArrayObject
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
     * A unique ID that can be used to identify and reference a firewall.
     *
     * @var string
     */
    protected $id;
    /**
     * A status string indicating the current state of the firewall. This can be "waiting", "succeeded", or "failed".
     *
     * @var string
     */
    protected $status;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the firewall was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * An array of objects each containing the fields "droplet_id", "removing", and "status". It is provided to detail exactly which Droplets are having their security policies updated. When empty, all changes have been successfully applied.
     *
     * @var list<FirewallPendingChangesItem>
     */
    protected $pendingChanges;
    /**
     * A human-readable name for a firewall. The name must begin with an alphanumeric character. Subsequent characters must either be alphanumeric characters, a period (.), or a dash (-).
     *
     * @var string
     */
    protected $name;
    /**
     * An array containing the IDs of the Droplets assigned to the firewall. <br><br>Requires `droplet:read` scope.
     *
     * @var list<int>|null
     */
    protected $dropletIds;
    /**
     * @var list<string>
     */
    protected $tags;
    /**
     * @var list<FirewallRulesInboundRulesItem>|null
     */
    protected $inboundRules;
    /**
     * @var list<FirewallRulesOutboundRulesItem>|null
     */
    protected $outboundRules;
    /**
     * A unique ID that can be used to identify and reference a firewall.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference a firewall.
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
     * A status string indicating the current state of the firewall. This can be "waiting", "succeeded", or "failed".
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * A status string indicating the current state of the firewall. This can be "waiting", "succeeded", or "failed".
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the firewall was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the firewall was created.
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
     * An array of objects each containing the fields "droplet_id", "removing", and "status". It is provided to detail exactly which Droplets are having their security policies updated. When empty, all changes have been successfully applied.
     *
     * @return list<FirewallPendingChangesItem>
     */
    public function getPendingChanges(): array
    {
        return $this->pendingChanges;
    }
    /**
     * An array of objects each containing the fields "droplet_id", "removing", and "status". It is provided to detail exactly which Droplets are having their security policies updated. When empty, all changes have been successfully applied.
     *
     * @param list<FirewallPendingChangesItem> $pendingChanges
     *
     * @return self
     */
    public function setPendingChanges(array $pendingChanges): self
    {
        $this->initialized['pendingChanges'] = true;
        $this->pendingChanges = $pendingChanges;
        return $this;
    }
    /**
     * A human-readable name for a firewall. The name must begin with an alphanumeric character. Subsequent characters must either be alphanumeric characters, a period (.), or a dash (-).
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human-readable name for a firewall. The name must begin with an alphanumeric character. Subsequent characters must either be alphanumeric characters, a period (.), or a dash (-).
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
     * An array containing the IDs of the Droplets assigned to the firewall. <br><br>Requires `droplet:read` scope.
     *
     * @return list<int>|null
     */
    public function getDropletIds(): ?array
    {
        return $this->dropletIds;
    }
    /**
     * An array containing the IDs of the Droplets assigned to the firewall. <br><br>Requires `droplet:read` scope.
     *
     * @param list<int>|null $dropletIds
     *
     * @return self
     */
    public function setDropletIds(?array $dropletIds): self
    {
        $this->initialized['dropletIds'] = true;
        $this->dropletIds = $dropletIds;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * @return list<FirewallRulesInboundRulesItem>|null
     */
    public function getInboundRules(): ?array
    {
        return $this->inboundRules;
    }
    /**
     * @param list<FirewallRulesInboundRulesItem>|null $inboundRules
     *
     * @return self
     */
    public function setInboundRules(?array $inboundRules): self
    {
        $this->initialized['inboundRules'] = true;
        $this->inboundRules = $inboundRules;
        return $this;
    }
    /**
     * @return list<FirewallRulesOutboundRulesItem>|null
     */
    public function getOutboundRules(): ?array
    {
        return $this->outboundRules;
    }
    /**
     * @param list<FirewallRulesOutboundRulesItem>|null $outboundRules
     *
     * @return self
     */
    public function setOutboundRules(?array $outboundRules): self
    {
        $this->initialized['outboundRules'] = true;
        $this->outboundRules = $outboundRules;
        return $this;
    }
}