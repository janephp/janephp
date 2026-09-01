<?php

namespace Docker\Api\Model;

class SwarmInitPostBody
{
    /**
     * Listen address used for inter-manager communication, as well
     * as determining the networking interface used for the VXLAN
     * Tunnel Endpoint (VTEP). This can either be an address/port
     * combination in the form `192.168.1.1:4567`, or an interface
     * followed by a port number, like `eth0:4567`. If the port number
     * is omitted, the default swarm listening port is used.
     * 
     *
     * @var string
     */
    public string $listenAddr;
    /**
     * Externally reachable address advertised to other nodes. This
     * can either be an address/port combination in the form
     * `192.168.1.1:4567`, or an interface followed by a port number,
     * like `eth0:4567`. If the port number is omitted, the port
     * number from the listen address is used. If `AdvertiseAddr` is
     * not specified, it will be automatically detected when possible.
     * 
     *
     * @var string
     */
    public string $advertiseAddr;
    /**
     * Address or interface to use for data path traffic (format:
     * `<ip|interface>`), for example,  `192.168.1.1`, or an interface,
     * like `eth0`. If `DataPathAddr` is unspecified, the same address
     * as `AdvertiseAddr` is used.
     * 
     * The `DataPathAddr` specifies the address that global scope
     * network drivers will publish towards other  nodes in order to
     * reach the containers running on this node. Using this parameter
     * it is possible to separate the container data traffic from the
     * management traffic of the cluster.
     * 
     *
     * @var string
     */
    public string $dataPathAddr;
    /**
     * DataPathPort specifies the data path port number for data traffic.
     * Acceptable port range is 1024 to 49151.
     * if no port is set or is set to 0, default port 4789 will be used.
     * 
     *
     * @var int
     */
    public int $dataPathPort;
    /**
     * Default Address Pool specifies default subnet pools for global
     * scope networks.
     * 
     *
     * @var list<string>
     */
    public array $defaultAddrPool;
    /**
     * Force creation of a new swarm.
     *
     * @var bool
     */
    public bool $forceNewCluster;
    /**
     * SubnetSize specifies the subnet size of the networks created
     * from the default subnet pool.
     * 
     *
     * @var int
     */
    public int $subnetSize;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec
     */
    public SwarmSpec $spec;
}