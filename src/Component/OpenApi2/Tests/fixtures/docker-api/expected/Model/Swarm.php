<?php

namespace Docker\Api\Model;

class Swarm
{
    /**
     * The ID of the swarm.
     *
     * @var string
     */
    public string $iD;
    /**
     * The version number of the object such as node, service, etc. This is needed
     * to avoid conflicting writes. The client must send the version number along
     * with the modified specification when updating these objects.
     * 
     * This approach ensures safe concurrency and determinism in that the change
     * on the object may not be applied if the version number has changed from the
     * last read. In other words, if two update requests specify the same base
     * version, only one of the requests can succeed. As a result, two separate
     * update requests that happen at the same time will not unintentionally
     * overwrite each other.
     * 
     *
     * @var ObjectVersion
     */
    public ObjectVersion $version;
    /**
     * Date and time at which the swarm was initialised in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     * 
     *
     * @var string
     */
    public string $createdAt;
    /**
     * Date and time at which the swarm was last updated in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     * 
     *
     * @var string
     */
    public string $updatedAt;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec
     */
    public SwarmSpec $spec;
    /**
     * Information about the issuer of leaf TLS certificates and the trusted root
     * CA certificate.
     * 
     *
     * @var TLSInfo
     */
    public TLSInfo $tLSInfo;
    /**
     * Whether there is currently a root CA rotation in progress for the swarm
     * 
     *
     * @var bool
     */
    public bool $rootRotationInProgress;
    /**
     * DataPathPort specifies the data path port number for data traffic.
     * Acceptable port range is 1024 to 49151.
     * If no port is set or is set to 0, the default port (4789) is used.
     * 
     *
     * @var int
     */
    public int $dataPathPort = 4789;
    /**
     * Default Address Pool specifies default subnet pools for global scope
     * networks.
     * 
     *
     * @var list<string>
     */
    public array $defaultAddrPool;
    /**
     * SubnetSize specifies the subnet size of the networks created from the
     * default subnet pool.
     * 
     *
     * @var int
     */
    public int $subnetSize = 24;
    /**
     * JoinTokens contains the tokens workers and managers need to join the swarm.
     * 
     *
     * @var JoinTokens
     */
    public JoinTokens $joinTokens;
}