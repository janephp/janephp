<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2FirewallsPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference a firewall.
     *
     * @var string
     */
    public string $id;
    /**
     * A status string indicating the current state of the firewall. This can be "waiting", "succeeded", or "failed".
     *
     * @var string
     */
    public string $status;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the firewall was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * An array of objects each containing the fields "droplet_id", "removing", and "status". It is provided to detail exactly which Droplets are having their security policies updated. When empty, all changes have been successfully applied.
     *
     * @var list<FirewallPendingChangesItem>
     */
    public array $pendingChanges;
    /**
     * A human-readable name for a firewall. The name must begin with an alphanumeric character. Subsequent characters must either be alphanumeric characters, a period (.), or a dash (-).
     *
     * @var string
     */
    public string $name;
    /**
     * An array containing the IDs of the Droplets assigned to the firewall. <br><br>Requires `droplet:read` scope.
     *
     * @var list<int>|null
     */
    public ?array $dropletIds;
    /**
     * @var list<string>
     */
    public array $tags;
    /**
     * @var list<FirewallRulesInboundRulesItem>|null
     */
    public ?array $inboundRules;
    /**
     * @var list<FirewallRulesOutboundRulesItem>|null
     */
    public ?array $outboundRules;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'status' => 'status', 'createdAt' => 'created_at', 'pendingChanges' => 'pending_changes', 'name' => 'name', 'dropletIds' => 'droplet_ids', 'tags' => 'tags', 'inboundRules' => 'inbound_rules', 'outboundRules' => 'outbound_rules'];
    }
}