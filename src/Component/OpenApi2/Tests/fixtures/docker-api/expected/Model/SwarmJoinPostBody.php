<?php

namespace Docker\Api\Model;

class SwarmJoinPostBody
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Listen address used for inter-manager communication if the node
    gets promoted to manager, as well as determining the networking
    interface used for the VXLAN Tunnel Endpoint (VTEP).
    
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
    like `eth0`. If `DataPathAddr` is unspecified, the same addres
    as `AdvertiseAddr` is used.
    
    The `DataPathAddr` specifies the address that global scope
    network drivers will publish towards other nodes in order to
    reach the containers running on this node. Using this parameter
    it is possible to separate the container data traffic from the
    management traffic of the cluster.
    
    *
    * @var string
    */
    protected $dataPathAddr;
    /**
     * Addresses of manager nodes already participating in the swarm.
     *
     * @var list<string>
     */
    protected $remoteAddrs;
    /**
     * Secret token for joining this swarm.
     *
     * @var string
     */
    protected $joinToken;
    /**
    * Listen address used for inter-manager communication if the node
    gets promoted to manager, as well as determining the networking
    interface used for the VXLAN Tunnel Endpoint (VTEP).
    
    *
    * @return string
    */
    public function getListenAddr() : string
    {
        return $this->listenAddr;
    }
    /**
    * Listen address used for inter-manager communication if the node
    gets promoted to manager, as well as determining the networking
    interface used for the VXLAN Tunnel Endpoint (VTEP).
    
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
    like `eth0`. If `DataPathAddr` is unspecified, the same addres
    as `AdvertiseAddr` is used.
    
    The `DataPathAddr` specifies the address that global scope
    network drivers will publish towards other nodes in order to
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
    like `eth0`. If `DataPathAddr` is unspecified, the same addres
    as `AdvertiseAddr` is used.
    
    The `DataPathAddr` specifies the address that global scope
    network drivers will publish towards other nodes in order to
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
     * Addresses of manager nodes already participating in the swarm.
     *
     * @return list<string>
     */
    public function getRemoteAddrs() : array
    {
        return $this->remoteAddrs;
    }
    /**
     * Addresses of manager nodes already participating in the swarm.
     *
     * @param list<string> $remoteAddrs
     *
     * @return self
     */
    public function setRemoteAddrs(array $remoteAddrs) : self
    {
        $this->initialized['remoteAddrs'] = true;
        $this->remoteAddrs = $remoteAddrs;
        return $this;
    }
    /**
     * Secret token for joining this swarm.
     *
     * @return string
     */
    public function getJoinToken() : string
    {
        return $this->joinToken;
    }
    /**
     * Secret token for joining this swarm.
     *
     * @param string $joinToken
     *
     * @return self
     */
    public function setJoinToken(string $joinToken) : self
    {
        $this->initialized['joinToken'] = true;
        $this->joinToken = $joinToken;
        return $this;
    }
}