<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LoadBalancer implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference a load balancer.
     *
     * @var string
     */
    public string $id;
    /**
     * A human-readable name for a load balancer instance.
     *
     * @var string
     */
    public string $name;
    /**
     * The ID of the project that the load balancer is associated with. If no ID is provided at creation, the load balancer associates with the user's default project. If an invalid project ID is provided, the load balancer will not be created.
     *
     * @var string
     */
    public string $projectId;
    /**
     * An attribute containing the public-facing IP address of the load balancer.
     *
     * @var string
     */
    public string $ip;
    /**
     * An attribute containing the public-facing IPv6 address of the load balancer.
     *
     * @var string
     */
    public string $ipv6;
    /**
     * How many nodes the load balancer contains. Each additional node increases the load balancer's ability to manage more connections. Load balancers can be scaled up or down, and you can change the number of nodes after creation up to once per hour. This field is currently not available in the AMS2, NYC2, or SFO1 regions. Use the `size` field to scale load balancers that reside in these regions.
     *
     * @var int
     */
    public int $sizeUnit = 1;
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
    public string $size = 'lb-small';
    /**
     * This field has been deprecated. You can no longer specify an algorithm for load balancers.
     *
     * @deprecated
     *
     * @var string
     */
    public string $algorithm = 'round_robin';
    /**
     * A status string indicating the current state of the load balancer. This can be `new`, `active`, or `errored`.
     *
     * @var string
     */
    public string $status;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the load balancer was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * An array of objects specifying the forwarding rules for a load balancer.
     *
     * @var list<ForwardingRule>
     */
    public array $forwardingRules;
    /**
     * An object specifying health check settings for the load balancer.
     *
     * @var HealthCheck
     */
    public HealthCheck $healthCheck;
    /**
     * An object specifying sticky sessions settings for the load balancer.
     *
     * @var StickySessions
     */
    public StickySessions $stickySessions;
    /**
     * A boolean value indicating whether HTTP requests to the load balancer on port 80 will be redirected to HTTPS on port 443.
     *
     * @var bool
     */
    public bool $redirectHttpToHttps = false;
    /**
     * A boolean value indicating whether PROXY Protocol is in use.
     *
     * @var bool
     */
    public bool $enableProxyProtocol = false;
    /**
     * A boolean value indicating whether HTTP keepalive connections are maintained to target Droplets.
     *
     * @var bool
     */
    public bool $enableBackendKeepalive = false;
    /**
     * An integer value which configures the idle timeout for HTTP requests to the target droplets.
     *
     * @var int
     */
    public int $httpIdleTimeoutSeconds = 60;
    /**
     * A string specifying the UUID of the VPC to which the load balancer is assigned.
     *
     * @var string
     */
    public string $vpcUuid;
    /**
     * A boolean value indicating whether to disable automatic DNS record creation for Let's Encrypt certificates that are added to the load balancer.
     *
     * @var bool
     */
    public bool $disableLetsEncryptDnsRecords = false;
    /**
     * An object specifying allow and deny rules to control traffic to the load balancer.
     *
     * @var LbFirewall
     */
    public LbFirewall $firewall;
    /**
     * A string indicating whether the load balancer should be external or internal. Internal load balancers have no public IPs and are only accessible to resources on the same VPC network. This property cannot be updated after creating the load balancer.
     *
     * @var string
     */
    public string $network = 'EXTERNAL';
    /**
     * A string indicating whether the load balancer will support IPv4 or both IPv4 and IPv6 networking. This property cannot be updated after creating the load balancer.
     *
     * @var string
     */
    public string $networkStack = 'IPV4';
    /**
     * A string indicating whether the load balancer should be a standard regional HTTP load balancer, a regional network load balancer that routes traffic at the TCP/UDP transport layer, or a global load balancer.
     *
     * @var string
     */
    public string $type = 'REGIONAL';
    /**
     * An array of objects specifying the domain configurations for a Global load balancer.
     *
     * @var list<Domains>
     */
    public array $domains;
    /**
     * An object specifying forwarding configurations for a Global load balancer.
     *
     * @var GlbSettings
     */
    public GlbSettings $glbSettings;
    /**
     * An array containing the UUIDs of the Regional load balancers to be used as target backends for a Global load balancer.
     *
     * @var list<string>
     */
    public array $targetLoadBalancerIds;
    /**
     * A string indicating the policy for the TLS cipher suites used by the load balancer. The possible values are `DEFAULT` or `STRONG`. The default value is `DEFAULT`.
     *
     * @var string
     */
    public string $tlsCipherPolicy = 'DEFAULT';
    /**
     * @var array<string, mixed>
     */
    public iterable $region;
    /**
     * An array containing the IDs of the Droplets assigned to the load balancer.
     *
     * @var list<int>
     */
    public array $dropletIds;
    /**
     * The name of a Droplet tag corresponding to Droplets assigned to the load balancer.
     *
     * @var string
     */
    public string $tag;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'projectId' => 'project_id', 'ip' => 'ip', 'ipv6' => 'ipv6', 'sizeUnit' => 'size_unit', 'size' => 'size', 'algorithm' => 'algorithm', 'status' => 'status', 'createdAt' => 'created_at', 'forwardingRules' => 'forwarding_rules', 'healthCheck' => 'health_check', 'stickySessions' => 'sticky_sessions', 'redirectHttpToHttps' => 'redirect_http_to_https', 'enableProxyProtocol' => 'enable_proxy_protocol', 'enableBackendKeepalive' => 'enable_backend_keepalive', 'httpIdleTimeoutSeconds' => 'http_idle_timeout_seconds', 'vpcUuid' => 'vpc_uuid', 'disableLetsEncryptDnsRecords' => 'disable_lets_encrypt_dns_records', 'firewall' => 'firewall', 'network' => 'network', 'networkStack' => 'network_stack', 'type' => 'type', 'domains' => 'domains', 'glbSettings' => 'glb_settings', 'targetLoadBalancerIds' => 'target_load_balancer_ids', 'tlsCipherPolicy' => 'tls_cipher_policy', 'region' => 'region', 'dropletIds' => 'droplet_ids', 'tag' => 'tag'];
    }
}