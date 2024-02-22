<?php

namespace Docker\Api\Model;

class ClusterInfo
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
     * The ID of the swarm.
     *
     * @var string
     */
    protected $iD;
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @var ObjectVersion
    */
    protected $version;
    /**
    * Date and time at which the swarm was initialised in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string
    */
    protected $createdAt;
    /**
    * Date and time at which the swarm was last updated in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string
    */
    protected $updatedAt;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec
     */
    protected $spec;
    /**
    * Information about the issuer of leaf TLS certificates and the trusted root
    CA certificate.
    
    *
    * @var TLSInfo
    */
    protected $tLSInfo;
    /**
     * Whether there is currently a root CA rotation in progress for the swarm
     *
     * @var bool
     */
    protected $rootRotationInProgress;
    /**
    * DataPathPort specifies the data path port number for data traffic.
    Acceptable port range is 1024 to 49151.
    If no port is set or is set to 0, the default port (4789) is used.
    
    *
    * @var int
    */
    protected $dataPathPort = 4789;
    /**
    * Default Address Pool specifies default subnet pools for global scope
    networks.
    
    *
    * @var list<string>
    */
    protected $defaultAddrPool;
    /**
    * SubnetSize specifies the subnet size of the networks created from the
    default subnet pool.
    
    *
    * @var int
    */
    protected $subnetSize = 24;
    /**
     * The ID of the swarm.
     *
     * @return string
     */
    public function getID() : string
    {
        return $this->iD;
    }
    /**
     * The ID of the swarm.
     *
     * @param string $iD
     *
     * @return self
     */
    public function setID(string $iD) : self
    {
        $this->initialized['iD'] = true;
        $this->iD = $iD;
        return $this;
    }
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @return ObjectVersion
    */
    public function getVersion() : ObjectVersion
    {
        return $this->version;
    }
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @param ObjectVersion $version
    *
    * @return self
    */
    public function setVersion(ObjectVersion $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
    * Date and time at which the swarm was initialised in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string
    */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
    * Date and time at which the swarm was initialised in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @param string $createdAt
    *
    * @return self
    */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
    * Date and time at which the swarm was last updated in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string
    */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
    * Date and time at which the swarm was last updated in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @param string $updatedAt
    *
    * @return self
    */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
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
    /**
    * Information about the issuer of leaf TLS certificates and the trusted root
    CA certificate.
    
    *
    * @return TLSInfo
    */
    public function getTLSInfo() : TLSInfo
    {
        return $this->tLSInfo;
    }
    /**
    * Information about the issuer of leaf TLS certificates and the trusted root
    CA certificate.
    
    *
    * @param TLSInfo $tLSInfo
    *
    * @return self
    */
    public function setTLSInfo(TLSInfo $tLSInfo) : self
    {
        $this->initialized['tLSInfo'] = true;
        $this->tLSInfo = $tLSInfo;
        return $this;
    }
    /**
     * Whether there is currently a root CA rotation in progress for the swarm
     *
     * @return bool
     */
    public function getRootRotationInProgress() : bool
    {
        return $this->rootRotationInProgress;
    }
    /**
     * Whether there is currently a root CA rotation in progress for the swarm
     *
     * @param bool $rootRotationInProgress
     *
     * @return self
     */
    public function setRootRotationInProgress(bool $rootRotationInProgress) : self
    {
        $this->initialized['rootRotationInProgress'] = true;
        $this->rootRotationInProgress = $rootRotationInProgress;
        return $this;
    }
    /**
    * DataPathPort specifies the data path port number for data traffic.
    Acceptable port range is 1024 to 49151.
    If no port is set or is set to 0, the default port (4789) is used.
    
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
    If no port is set or is set to 0, the default port (4789) is used.
    
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
    * Default Address Pool specifies default subnet pools for global scope
    networks.
    
    *
    * @return list<string>
    */
    public function getDefaultAddrPool() : array
    {
        return $this->defaultAddrPool;
    }
    /**
    * Default Address Pool specifies default subnet pools for global scope
    networks.
    
    *
    * @param list<string> $defaultAddrPool
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
    * SubnetSize specifies the subnet size of the networks created from the
    default subnet pool.
    
    *
    * @return int
    */
    public function getSubnetSize() : int
    {
        return $this->subnetSize;
    }
    /**
    * SubnetSize specifies the subnet size of the networks created from the
    default subnet pool.
    
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
}