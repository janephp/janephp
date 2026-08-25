<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class FirewallRuleTarget implements AdditionalPropertiesInterface
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
     * An array of strings containing the IPv4 addresses, IPv6 addresses, IPv4 CIDRs, and/or IPv6 CIDRs to which the firewall will allow traffic.
     *
     * @var list<string>
     */
    protected $addresses;
    /**
     * An array containing the IDs of the Droplets to which the firewall will allow traffic.
     *
     * @var list<int>
     */
    protected $dropletIds;
    /**
     * An array containing the IDs of the load balancers to which the firewall will allow traffic.
     *
     * @var list<string>
     */
    protected $loadBalancerUids;
    /**
     * An array containing the IDs of the Kubernetes clusters to which the firewall will allow traffic.
     *
     * @var list<string>
     */
    protected $kubernetesIds;
    /**
     * @var list<string>
     */
    protected $tags;
    /**
     * An array of strings containing the IPv4 addresses, IPv6 addresses, IPv4 CIDRs, and/or IPv6 CIDRs to which the firewall will allow traffic.
     *
     * @return list<string>
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }
    /**
     * An array of strings containing the IPv4 addresses, IPv6 addresses, IPv4 CIDRs, and/or IPv6 CIDRs to which the firewall will allow traffic.
     *
     * @param list<string> $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses): self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * An array containing the IDs of the Droplets to which the firewall will allow traffic.
     *
     * @return list<int>
     */
    public function getDropletIds(): array
    {
        return $this->dropletIds;
    }
    /**
     * An array containing the IDs of the Droplets to which the firewall will allow traffic.
     *
     * @param list<int> $dropletIds
     *
     * @return self
     */
    public function setDropletIds(array $dropletIds): self
    {
        $this->initialized['dropletIds'] = true;
        $this->dropletIds = $dropletIds;
        return $this;
    }
    /**
     * An array containing the IDs of the load balancers to which the firewall will allow traffic.
     *
     * @return list<string>
     */
    public function getLoadBalancerUids(): array
    {
        return $this->loadBalancerUids;
    }
    /**
     * An array containing the IDs of the load balancers to which the firewall will allow traffic.
     *
     * @param list<string> $loadBalancerUids
     *
     * @return self
     */
    public function setLoadBalancerUids(array $loadBalancerUids): self
    {
        $this->initialized['loadBalancerUids'] = true;
        $this->loadBalancerUids = $loadBalancerUids;
        return $this;
    }
    /**
     * An array containing the IDs of the Kubernetes clusters to which the firewall will allow traffic.
     *
     * @return list<string>
     */
    public function getKubernetesIds(): array
    {
        return $this->kubernetesIds;
    }
    /**
     * An array containing the IDs of the Kubernetes clusters to which the firewall will allow traffic.
     *
     * @param list<string> $kubernetesIds
     *
     * @return self
     */
    public function setKubernetesIds(array $kubernetesIds): self
    {
        $this->initialized['kubernetesIds'] = true;
        $this->kubernetesIds = $kubernetesIds;
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
    public function definedProperties(): array
    {
        return ['addresses' => ['addresses', 'getAddresses', 'setAddresses'], 'dropletIds' => ['droplet_ids', 'getDropletIds', 'setDropletIds'], 'loadBalancerUids' => ['load_balancer_uids', 'getLoadBalancerUids', 'setLoadBalancerUids'], 'kubernetesIds' => ['kubernetes_ids', 'getKubernetesIds', 'setKubernetesIds'], 'tags' => ['tags', 'getTags', 'setTags']];
    }
}