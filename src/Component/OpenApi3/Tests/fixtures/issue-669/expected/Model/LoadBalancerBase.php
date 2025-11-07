<?php

namespace Jane\Generated\DigitalOcean\Model;

class LoadBalancerBase extends \ArrayObject
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
     * A unique ID that can be used to identify and reference a load balancer.
     *
     * @var string
     */
    protected $id;
    /**
     * A human-readable name for a load balancer instance.
     *
     * @var string
     */
    protected $name;
    /**
     * The ID of the project that the load balancer is associated with. If no ID is provided at creation, the load balancer associates with the user's default project. If an invalid project ID is provided, the load balancer will not be created.
     *
     * @var string
     */
    protected $projectId;
    /**
     * An attribute containing the public-facing IP address of the load balancer.
     *
     * @var string
     */
    protected $ip;
    /**
     * An attribute containing the public-facing IPv6 address of the load balancer.
     *
     * @var string
     */
    protected $ipv6;
    /**
     * How many nodes the load balancer contains. Each additional node increases the load balancer's ability to manage more connections. Load balancers can be scaled up or down, and you can change the number of nodes after creation up to once per hour. This field is currently not available in the AMS2, NYC2, or SFO1 regions. Use the `size` field to scale load balancers that reside in these regions.
     *
     * @var int
     */
    protected $sizeUnit = 1;
    /**
     * This field has been replaced by the `size_unit` field for all regions except in AMS2, NYC2, and SFO1. Each available load balancer size now equates to the load balancer having a set number of nodes.
     * * `lb-small` = 1 node
     * * `lb-medium` = 3 nodes
     * * `lb-large` = 6 nodes
     * 
     * You can resize load balancers after creation up to once per hour. You cannot resize a load balancer within the first hour of its creation.
     *
     * @deprecated
     *
     * @var string
     */
    protected $size = 'lb-small';
    /**
     * This field has been deprecated. You can no longer specify an algorithm for load balancers.
     *
     * @deprecated
     *
     * @var string
     */
    protected $algorithm = 'round_robin';
    /**
     * A status string indicating the current state of the load balancer. This can be `new`, `active`, or `errored`.
     *
     * @var string
     */
    protected $status;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the load balancer was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * An array of objects specifying the forwarding rules for a load balancer.
     *
     * @var list<ForwardingRule>
     */
    protected $forwardingRules;
    /**
     * An object specifying health check settings for the load balancer.
     *
     * @var HealthCheck
     */
    protected $healthCheck;
    /**
     * An object specifying sticky sessions settings for the load balancer.
     *
     * @var StickySessions
     */
    protected $stickySessions;
    /**
     * A boolean value indicating whether HTTP requests to the load balancer on port 80 will be redirected to HTTPS on port 443.
     *
     * @var bool
     */
    protected $redirectHttpToHttps = false;
    /**
     * A boolean value indicating whether PROXY Protocol is in use.
     *
     * @var bool
     */
    protected $enableProxyProtocol = false;
    /**
     * A boolean value indicating whether HTTP keepalive connections are maintained to target Droplets.
     *
     * @var bool
     */
    protected $enableBackendKeepalive = false;
    /**
     * An integer value which configures the idle timeout for HTTP requests to the target droplets.
     *
     * @var int
     */
    protected $httpIdleTimeoutSeconds = 60;
    /**
     * A string specifying the UUID of the VPC to which the load balancer is assigned.
     *
     * @var string
     */
    protected $vpcUuid;
    /**
     * A boolean value indicating whether to disable automatic DNS record creation for Let's Encrypt certificates that are added to the load balancer.
     *
     * @var bool
     */
    protected $disableLetsEncryptDnsRecords = false;
    /**
     * An object specifying allow and deny rules to control traffic to the load balancer.
     *
     * @var LbFirewall
     */
    protected $firewall;
    /**
     * A string indicating whether the load balancer should be external or internal. Internal load balancers have no public IPs and are only accessible to resources on the same VPC network. This property cannot be updated after creating the load balancer.
     *
     * @var string
     */
    protected $network = 'EXTERNAL';
    /**
     * A string indicating whether the load balancer will support IPv4 or both IPv4 and IPv6 networking. This property cannot be updated after creating the load balancer.
     *
     * @var string
     */
    protected $networkStack = 'IPV4';
    /**
     * A string indicating whether the load balancer should be a standard regional HTTP load balancer, a regional network load balancer that routes traffic at the TCP/UDP transport layer, or a global load balancer.
     *
     * @var string
     */
    protected $type = 'REGIONAL';
    /**
     * An array of objects specifying the domain configurations for a Global load balancer.
     *
     * @var list<Domains>
     */
    protected $domains;
    /**
     * An object specifying forwarding configurations for a Global load balancer.
     *
     * @var GlbSettings
     */
    protected $glbSettings;
    /**
     * An array containing the UUIDs of the Regional load balancers to be used as target backends for a Global load balancer.
     *
     * @var list<string>
     */
    protected $targetLoadBalancerIds;
    /**
     * A string indicating the policy for the TLS cipher suites used by the load balancer. The possible values are `DEFAULT` or `STRONG`. The default value is `DEFAULT`.
     *
     * @var string
     */
    protected $tlsCipherPolicy = 'DEFAULT';
    /**
     * A unique ID that can be used to identify and reference a load balancer.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference a load balancer.
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
     * A human-readable name for a load balancer instance.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human-readable name for a load balancer instance.
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
     * The ID of the project that the load balancer is associated with. If no ID is provided at creation, the load balancer associates with the user's default project. If an invalid project ID is provided, the load balancer will not be created.
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * The ID of the project that the load balancer is associated with. If no ID is provided at creation, the load balancer associates with the user's default project. If an invalid project ID is provided, the load balancer will not be created.
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * An attribute containing the public-facing IP address of the load balancer.
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * An attribute containing the public-facing IP address of the load balancer.
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * An attribute containing the public-facing IPv6 address of the load balancer.
     *
     * @return string
     */
    public function getIpv6(): string
    {
        return $this->ipv6;
    }
    /**
     * An attribute containing the public-facing IPv6 address of the load balancer.
     *
     * @param string $ipv6
     *
     * @return self
     */
    public function setIpv6(string $ipv6): self
    {
        $this->initialized['ipv6'] = true;
        $this->ipv6 = $ipv6;
        return $this;
    }
    /**
     * How many nodes the load balancer contains. Each additional node increases the load balancer's ability to manage more connections. Load balancers can be scaled up or down, and you can change the number of nodes after creation up to once per hour. This field is currently not available in the AMS2, NYC2, or SFO1 regions. Use the `size` field to scale load balancers that reside in these regions.
     *
     * @return int
     */
    public function getSizeUnit(): int
    {
        return $this->sizeUnit;
    }
    /**
     * How many nodes the load balancer contains. Each additional node increases the load balancer's ability to manage more connections. Load balancers can be scaled up or down, and you can change the number of nodes after creation up to once per hour. This field is currently not available in the AMS2, NYC2, or SFO1 regions. Use the `size` field to scale load balancers that reside in these regions.
     *
     * @param int $sizeUnit
     *
     * @return self
     */
    public function setSizeUnit(int $sizeUnit): self
    {
        $this->initialized['sizeUnit'] = true;
        $this->sizeUnit = $sizeUnit;
        return $this;
    }
    /**
     * This field has been replaced by the `size_unit` field for all regions except in AMS2, NYC2, and SFO1. Each available load balancer size now equates to the load balancer having a set number of nodes.
     * * `lb-small` = 1 node
     * * `lb-medium` = 3 nodes
     * * `lb-large` = 6 nodes
     * 
     * You can resize load balancers after creation up to once per hour. You cannot resize a load balancer within the first hour of its creation.
     *
     * @deprecated
     *
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }
    /**
    * This field has been replaced by the `size_unit` field for all regions except in AMS2, NYC2, and SFO1. Each available load balancer size now equates to the load balancer having a set number of nodes.
    * `lb-small` = 1 node
    * `lb-medium` = 3 nodes
    * `lb-large` = 6 nodes
    
    You can resize load balancers after creation up to once per hour. You cannot resize a load balancer within the first hour of its creation.
    *
    * @param string $size
    *
    * @deprecated
    *
    * @return self
    */
    public function setSize(string $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * This field has been deprecated. You can no longer specify an algorithm for load balancers.
     *
     * @deprecated
     *
     * @return string
     */
    public function getAlgorithm(): string
    {
        return $this->algorithm;
    }
    /**
     * This field has been deprecated. You can no longer specify an algorithm for load balancers.
     *
     * @param string $algorithm
     *
     * @deprecated
     *
     * @return self
     */
    public function setAlgorithm(string $algorithm): self
    {
        $this->initialized['algorithm'] = true;
        $this->algorithm = $algorithm;
        return $this;
    }
    /**
     * A status string indicating the current state of the load balancer. This can be `new`, `active`, or `errored`.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * A status string indicating the current state of the load balancer. This can be `new`, `active`, or `errored`.
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
     * A time value given in ISO8601 combined date and time format that represents when the load balancer was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the load balancer was created.
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
     * An array of objects specifying the forwarding rules for a load balancer.
     *
     * @return list<ForwardingRule>
     */
    public function getForwardingRules(): array
    {
        return $this->forwardingRules;
    }
    /**
     * An array of objects specifying the forwarding rules for a load balancer.
     *
     * @param list<ForwardingRule> $forwardingRules
     *
     * @return self
     */
    public function setForwardingRules(array $forwardingRules): self
    {
        $this->initialized['forwardingRules'] = true;
        $this->forwardingRules = $forwardingRules;
        return $this;
    }
    /**
     * An object specifying health check settings for the load balancer.
     *
     * @return HealthCheck
     */
    public function getHealthCheck(): HealthCheck
    {
        return $this->healthCheck;
    }
    /**
     * An object specifying health check settings for the load balancer.
     *
     * @param HealthCheck $healthCheck
     *
     * @return self
     */
    public function setHealthCheck(HealthCheck $healthCheck): self
    {
        $this->initialized['healthCheck'] = true;
        $this->healthCheck = $healthCheck;
        return $this;
    }
    /**
     * An object specifying sticky sessions settings for the load balancer.
     *
     * @return StickySessions
     */
    public function getStickySessions(): StickySessions
    {
        return $this->stickySessions;
    }
    /**
     * An object specifying sticky sessions settings for the load balancer.
     *
     * @param StickySessions $stickySessions
     *
     * @return self
     */
    public function setStickySessions(StickySessions $stickySessions): self
    {
        $this->initialized['stickySessions'] = true;
        $this->stickySessions = $stickySessions;
        return $this;
    }
    /**
     * A boolean value indicating whether HTTP requests to the load balancer on port 80 will be redirected to HTTPS on port 443.
     *
     * @return bool
     */
    public function getRedirectHttpToHttps(): bool
    {
        return $this->redirectHttpToHttps;
    }
    /**
     * A boolean value indicating whether HTTP requests to the load balancer on port 80 will be redirected to HTTPS on port 443.
     *
     * @param bool $redirectHttpToHttps
     *
     * @return self
     */
    public function setRedirectHttpToHttps(bool $redirectHttpToHttps): self
    {
        $this->initialized['redirectHttpToHttps'] = true;
        $this->redirectHttpToHttps = $redirectHttpToHttps;
        return $this;
    }
    /**
     * A boolean value indicating whether PROXY Protocol is in use.
     *
     * @return bool
     */
    public function getEnableProxyProtocol(): bool
    {
        return $this->enableProxyProtocol;
    }
    /**
     * A boolean value indicating whether PROXY Protocol is in use.
     *
     * @param bool $enableProxyProtocol
     *
     * @return self
     */
    public function setEnableProxyProtocol(bool $enableProxyProtocol): self
    {
        $this->initialized['enableProxyProtocol'] = true;
        $this->enableProxyProtocol = $enableProxyProtocol;
        return $this;
    }
    /**
     * A boolean value indicating whether HTTP keepalive connections are maintained to target Droplets.
     *
     * @return bool
     */
    public function getEnableBackendKeepalive(): bool
    {
        return $this->enableBackendKeepalive;
    }
    /**
     * A boolean value indicating whether HTTP keepalive connections are maintained to target Droplets.
     *
     * @param bool $enableBackendKeepalive
     *
     * @return self
     */
    public function setEnableBackendKeepalive(bool $enableBackendKeepalive): self
    {
        $this->initialized['enableBackendKeepalive'] = true;
        $this->enableBackendKeepalive = $enableBackendKeepalive;
        return $this;
    }
    /**
     * An integer value which configures the idle timeout for HTTP requests to the target droplets.
     *
     * @return int
     */
    public function getHttpIdleTimeoutSeconds(): int
    {
        return $this->httpIdleTimeoutSeconds;
    }
    /**
     * An integer value which configures the idle timeout for HTTP requests to the target droplets.
     *
     * @param int $httpIdleTimeoutSeconds
     *
     * @return self
     */
    public function setHttpIdleTimeoutSeconds(int $httpIdleTimeoutSeconds): self
    {
        $this->initialized['httpIdleTimeoutSeconds'] = true;
        $this->httpIdleTimeoutSeconds = $httpIdleTimeoutSeconds;
        return $this;
    }
    /**
     * A string specifying the UUID of the VPC to which the load balancer is assigned.
     *
     * @return string
     */
    public function getVpcUuid(): string
    {
        return $this->vpcUuid;
    }
    /**
     * A string specifying the UUID of the VPC to which the load balancer is assigned.
     *
     * @param string $vpcUuid
     *
     * @return self
     */
    public function setVpcUuid(string $vpcUuid): self
    {
        $this->initialized['vpcUuid'] = true;
        $this->vpcUuid = $vpcUuid;
        return $this;
    }
    /**
     * A boolean value indicating whether to disable automatic DNS record creation for Let's Encrypt certificates that are added to the load balancer.
     *
     * @return bool
     */
    public function getDisableLetsEncryptDnsRecords(): bool
    {
        return $this->disableLetsEncryptDnsRecords;
    }
    /**
     * A boolean value indicating whether to disable automatic DNS record creation for Let's Encrypt certificates that are added to the load balancer.
     *
     * @param bool $disableLetsEncryptDnsRecords
     *
     * @return self
     */
    public function setDisableLetsEncryptDnsRecords(bool $disableLetsEncryptDnsRecords): self
    {
        $this->initialized['disableLetsEncryptDnsRecords'] = true;
        $this->disableLetsEncryptDnsRecords = $disableLetsEncryptDnsRecords;
        return $this;
    }
    /**
     * An object specifying allow and deny rules to control traffic to the load balancer.
     *
     * @return LbFirewall
     */
    public function getFirewall(): LbFirewall
    {
        return $this->firewall;
    }
    /**
     * An object specifying allow and deny rules to control traffic to the load balancer.
     *
     * @param LbFirewall $firewall
     *
     * @return self
     */
    public function setFirewall(LbFirewall $firewall): self
    {
        $this->initialized['firewall'] = true;
        $this->firewall = $firewall;
        return $this;
    }
    /**
     * A string indicating whether the load balancer should be external or internal. Internal load balancers have no public IPs and are only accessible to resources on the same VPC network. This property cannot be updated after creating the load balancer.
     *
     * @return string
     */
    public function getNetwork(): string
    {
        return $this->network;
    }
    /**
     * A string indicating whether the load balancer should be external or internal. Internal load balancers have no public IPs and are only accessible to resources on the same VPC network. This property cannot be updated after creating the load balancer.
     *
     * @param string $network
     *
     * @return self
     */
    public function setNetwork(string $network): self
    {
        $this->initialized['network'] = true;
        $this->network = $network;
        return $this;
    }
    /**
     * A string indicating whether the load balancer will support IPv4 or both IPv4 and IPv6 networking. This property cannot be updated after creating the load balancer.
     *
     * @return string
     */
    public function getNetworkStack(): string
    {
        return $this->networkStack;
    }
    /**
     * A string indicating whether the load balancer will support IPv4 or both IPv4 and IPv6 networking. This property cannot be updated after creating the load balancer.
     *
     * @param string $networkStack
     *
     * @return self
     */
    public function setNetworkStack(string $networkStack): self
    {
        $this->initialized['networkStack'] = true;
        $this->networkStack = $networkStack;
        return $this;
    }
    /**
     * A string indicating whether the load balancer should be a standard regional HTTP load balancer, a regional network load balancer that routes traffic at the TCP/UDP transport layer, or a global load balancer.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * A string indicating whether the load balancer should be a standard regional HTTP load balancer, a regional network load balancer that routes traffic at the TCP/UDP transport layer, or a global load balancer.
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
     * An array of objects specifying the domain configurations for a Global load balancer.
     *
     * @return list<Domains>
     */
    public function getDomains(): array
    {
        return $this->domains;
    }
    /**
     * An array of objects specifying the domain configurations for a Global load balancer.
     *
     * @param list<Domains> $domains
     *
     * @return self
     */
    public function setDomains(array $domains): self
    {
        $this->initialized['domains'] = true;
        $this->domains = $domains;
        return $this;
    }
    /**
     * An object specifying forwarding configurations for a Global load balancer.
     *
     * @return GlbSettings
     */
    public function getGlbSettings(): GlbSettings
    {
        return $this->glbSettings;
    }
    /**
     * An object specifying forwarding configurations for a Global load balancer.
     *
     * @param GlbSettings $glbSettings
     *
     * @return self
     */
    public function setGlbSettings(GlbSettings $glbSettings): self
    {
        $this->initialized['glbSettings'] = true;
        $this->glbSettings = $glbSettings;
        return $this;
    }
    /**
     * An array containing the UUIDs of the Regional load balancers to be used as target backends for a Global load balancer.
     *
     * @return list<string>
     */
    public function getTargetLoadBalancerIds(): array
    {
        return $this->targetLoadBalancerIds;
    }
    /**
     * An array containing the UUIDs of the Regional load balancers to be used as target backends for a Global load balancer.
     *
     * @param list<string> $targetLoadBalancerIds
     *
     * @return self
     */
    public function setTargetLoadBalancerIds(array $targetLoadBalancerIds): self
    {
        $this->initialized['targetLoadBalancerIds'] = true;
        $this->targetLoadBalancerIds = $targetLoadBalancerIds;
        return $this;
    }
    /**
     * A string indicating the policy for the TLS cipher suites used by the load balancer. The possible values are `DEFAULT` or `STRONG`. The default value is `DEFAULT`.
     *
     * @return string
     */
    public function getTlsCipherPolicy(): string
    {
        return $this->tlsCipherPolicy;
    }
    /**
     * A string indicating the policy for the TLS cipher suites used by the load balancer. The possible values are `DEFAULT` or `STRONG`. The default value is `DEFAULT`.
     *
     * @param string $tlsCipherPolicy
     *
     * @return self
     */
    public function setTlsCipherPolicy(string $tlsCipherPolicy): self
    {
        $this->initialized['tlsCipherPolicy'] = true;
        $this->tlsCipherPolicy = $tlsCipherPolicy;
        return $this;
    }
}