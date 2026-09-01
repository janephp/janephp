<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class FirewallRulesInboundRulesItemSources implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of strings containing the IPv4 addresses, IPv6 addresses, IPv4 CIDRs, and/or IPv6 CIDRs to which the firewall will allow traffic.
     *
     * @var list<string>
     */
    public array $addresses;
    /**
     * An array containing the IDs of the Droplets to which the firewall will allow traffic.
     *
     * @var list<int>
     */
    public array $dropletIds;
    /**
     * An array containing the IDs of the load balancers to which the firewall will allow traffic.
     *
     * @var list<string>
     */
    public array $loadBalancerUids;
    /**
     * An array containing the IDs of the Kubernetes clusters to which the firewall will allow traffic.
     *
     * @var list<string>
     */
    public array $kubernetesIds;
    /**
     * @var list<string>
     */
    public array $tags;
    public function definedProperties(): array
    {
        return ['addresses' => 'addresses', 'dropletIds' => 'droplet_ids', 'loadBalancerUids' => 'load_balancer_uids', 'kubernetesIds' => 'kubernetes_ids', 'tags' => 'tags'];
    }
}