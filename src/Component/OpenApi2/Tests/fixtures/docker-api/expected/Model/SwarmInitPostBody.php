<?php

namespace Docker\Api\Model;

class SwarmInitPostBody
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Listen address used for inter-manager communication, as well
    as determining the networking interface used for the VXLAN
    Tunnel Endpoint (VTEP). This can either be an address/port
    combination in the form `192.168.1.1:4567`, or an interface
    followed by a port number, like `eth0:4567`. If the port number
    is omitted, the default swarm listening port is used.
    
    *
    * @var string
    */
    protected $listenAddr;
    /**
    * Externally reachable address advertised to other nodes. This
    can either be an address/port combination in the form
    `192.168.1.1:4567`, or an interface followed by a port number,
    like `eth0:4567`. If the port number is omitted, the port
    number from the listen address is used. If `AdvertiseAddr` is
    not specified, it will be automatically detected when possible.
    
    *
    * @var string
    */
    protected $advertiseAddr;
    /**
    * Address or interface to use for data path traffic (format:
    `<ip|interface>`), for example,  `192.168.1.1`, or an interface,
    like `eth0`. If `DataPathAddr` is unspecified, the same address
    as `AdvertiseAddr` is used.
    
    The `DataPathAddr` specifies the address that global scope
    network drivers will publish towards other  nodes in order to
    reach the containers running on this node. Using this parameter
    it is possible to separate the container data traffic from the
    management traffic of the cluster.
    
    *
    * @var string
    */
    protected $dataPathAddr;
    /**
    * DataPathPort specifies the data path port number for data traffic.
    Acceptable port range is 1024 to 49151.
    if no port is set or is set to 0, default port 4789 will be used.
    
    *
    * @var int
    */
    protected $dataPathPort;
    /**
    * Default Address Pool specifies default subnet pools for global
    scope networks.
    
    *
    * @var string[]
    */
    protected $defaultAddrPool;
    /**
     * Force creation of a new swarm.
     *
     * @var bool
     */
    protected $forceNewCluster;
    /**
    * SubnetSize specifies the subnet size of the networks created
    from the default subnet pool.
    
    *
    * @var int
    */
    protected $subnetSize;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec
     */
    protected $spec;
    /**
    * Listen address used for inter-manager communication, as well
    as determining the networking interface used for the VXLAN
    Tunnel Endpoint (VTEP). This can either be an address/port
    combination in the form `192.168.1.1:4567`, or an interface
    followed by a port number, like `eth0:4567`. If the port number
    is omitted, the default swarm listening port is used.
    
    *
    * @return string
    */
    public function getListenAddr() : string
    {
        return $this->listenAddr;
    }
    /**
    * Listen address used for inter-manager communication, as well
    as determining the networking interface used for the VXLAN
    Tunnel Endpoint (VTEP). This can either be an address/port
    combination in the form `192.168.1.1:4567`, or an interface
    followed by a port number, like `eth0:4567`. If the port number
    is omitted, the default swarm listening port is used.
    
    *
    * @param string $listenAddr
    *
    * @return self
    */
    public function setListenAddr(string $listenAddr) : self
    {
        $this->initialized['listenAddr'] = true;
        $this->listenAddr = $listenAddr;
        return $this;
    }
    /**
    * Externally reachable address advertised to other nodes. This
    can either be an address/port combination in the form
    `192.168.1.1:4567`, or an interface followed by a port number,
    like `eth0:4567`. If the port number is omitted, the port
    number from the listen address is used. If `AdvertiseAddr` is
    not specified, it will be automatically detected when possible.
    
    *
    * @return string
    */
    public function getAdvertiseAddr() : string
    {
        return $this->advertiseAddr;
    }
    /**
    * Externally reachable address advertised to other nodes. This
    can either be an address/port combination in the form
    `192.168.1.1:4567`, or an interface followed by a port number,
    like `eth0:4567`. If the port number is omitted, the port
    number from the listen address is used. If `AdvertiseAddr` is
    not specified, it will be automatically detected when possible.
    
    *
    * @param string $advertiseAddr
    *
    * @return self
    */
    public function setAdvertiseAddr(string $advertiseAddr) : self
    {
        $this->initialized['advertiseAddr'] = true;
        $this->advertiseAddr = $advertiseAddr;
        return $this;
    }
    /**
    * Address or interface to use for data path traffic (format:
    `<ip|interface>`), for example,  `192.168.1.1`, or an interface,
    like `eth0`. If `DataPathAddr` is unspecified, the same address
    as `AdvertiseAddr` is used.
    
    The `DataPathAddr` specifies the address that global scope
    network drivers will publish towards other  nodes in order to
    reach the containers running on this node. Using this parameter
    it is possible to separate the container data traffic from the
    management traffic of the cluster.
    
    *
    * @return string
    */
    public function getDataPathAddr() : string
    {
        return $this->dataPathAddr;
    }
    /**
    * Address or interface to use for data path traffic (format:
    `<ip|interface>`), for example,  `192.168.1.1`, or an interface,
    like `eth0`. If `DataPathAddr` is unspecified, the same address
    as `AdvertiseAddr` is used.
    
    The `DataPathAddr` specifies the address that global scope
    network drivers will publish towards other  nodes in order to
    reach the containers running on this node. Using this parameter
    it is possible to separate the container data traffic from the
    management traffic of the cluster.
    
    *
    * @param string $dataPathAddr
    *
    * @return self
    */
    public function setDataPathAddr(string $dataPathAddr) : self
    {
        $this->initialized['dataPathAddr'] = true;
        $this->dataPathAddr = $dataPathAddr;
        return $this;
    }
    /**
    * DataPathPort specifies the data path port number for data traffic.
    Acceptable port range is 1024 to 49151.
    if no port is set or is set to 0, default port 4789 will be used.
    
    *
    * @return int
    */
    public function getDataPathPort() : int
    {
        return $this->dataPathPort;
    }
    /**
    * DataPathPort specifies the data path port number for data traffic.
    Acceptable port range is 1024 to 49151.
    if no port is set or is set to 0, default port 4789 will be used.
    
    *
    * @param int $dataPathPort
    *
    * @return self
    */
    public function setDataPathPort(int $dataPathPort) : self
    {
        $this->initialized['dataPathPort'] = true;
        $this->dataPathPort = $dataPathPort;
        return $this;
    }
    /**
    * Default Address Pool specifies default subnet pools for global
    scope networks.
    
    *
    * @return string[]
    */
    public function getDefaultAddrPool() : array
    {
        return $this->defaultAddrPool;
    }
    /**
    * Default Address Pool specifies default subnet pools for global
    scope networks.
    
    *
    * @param string[] $defaultAddrPool
    *
    * @return self
    */
    public function setDefaultAddrPool(array $defaultAddrPool) : self
    {
        $this->initialized['defaultAddrPool'] = true;
        $this->defaultAddrPool = $defaultAddrPool;
        return $this;
    }
    /**
     * Force creation of a new swarm.
     *
     * @return bool
     */
    public function getForceNewCluster() : bool
    {
        return $this->forceNewCluster;
    }
    /**
     * Force creation of a new swarm.
     *
     * @param bool $forceNewCluster
     *
     * @return self
     */
    public function setForceNewCluster(bool $forceNewCluster) : self
    {
        $this->initialized['forceNewCluster'] = true;
        $this->forceNewCluster = $forceNewCluster;
        return $this;
    }
    /**
    * SubnetSize specifies the subnet size of the networks created
    from the default subnet pool.
    
    *
    * @return int
    */
    public function getSubnetSize() : int
    {
        return $this->subnetSize;
    }
    /**
    * SubnetSize specifies the subnet size of the networks created
    from the default subnet pool.
    
    *
    * @param int $subnetSize
    *
    * @return self
    */
    public function setSubnetSize(int $subnetSize) : self
    {
        $this->initialized['subnetSize'] = true;
        $this->subnetSize = $subnetSize;
        return $this;
    }
    /**
     * User modifiable swarm configuration.
     *
     * @return SwarmSpec
     */
    public function getSpec() : SwarmSpec
    {
        return $this->spec;
    }
    /**
     * User modifiable swarm configuration.
     *
     * @param SwarmSpec $spec
     *
     * @return self
     */
    public function setSpec(SwarmSpec $spec) : self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
}