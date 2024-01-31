<?php

namespace Docker\Api\Model;

class Node
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
     * 
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
    * Date and time at which the node was added to the swarm in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string
    */
    protected $createdAt;
    /**
    * Date and time at which the node was last updated in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string
    */
    protected $updatedAt;
    /**
     * 
     *
     * @var NodeSpec
     */
    protected $spec;
    /**
    * NodeDescription encapsulates the properties of the Node as reported by the
    agent.
    
    *
    * @var NodeDescription
    */
    protected $description;
    /**
    * NodeStatus represents the status of a node.
    
    It provides the current status of the node, as seen by the manager.
    
    *
    * @var NodeStatus
    */
    protected $status;
    /**
    * ManagerStatus represents the status of a manager.
    
    It provides the current status of a node's manager component, if the node
    is a manager.
    
    *
    * @var ManagerStatus|null
    */
    protected $managerStatus;
    /**
     * 
     *
     * @return string
     */
    public function getID() : string
    {
        return $this->iD;
    }
    /**
     * 
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
    * Date and time at which the node was added to the swarm in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string
    */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
    * Date and time at which the node was added to the swarm in
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
    * Date and time at which the node was last updated in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string
    */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
    * Date and time at which the node was last updated in
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
     * 
     *
     * @return NodeSpec
     */
    public function getSpec() : NodeSpec
    {
        return $this->spec;
    }
    /**
     * 
     *
     * @param NodeSpec $spec
     *
     * @return self
     */
    public function setSpec(NodeSpec $spec) : self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
    /**
    * NodeDescription encapsulates the properties of the Node as reported by the
    agent.
    
    *
    * @return NodeDescription
    */
    public function getDescription() : NodeDescription
    {
        return $this->description;
    }
    /**
    * NodeDescription encapsulates the properties of the Node as reported by the
    agent.
    
    *
    * @param NodeDescription $description
    *
    * @return self
    */
    public function setDescription(NodeDescription $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
    * NodeStatus represents the status of a node.
    
    It provides the current status of the node, as seen by the manager.
    
    *
    * @return NodeStatus
    */
    public function getStatus() : NodeStatus
    {
        return $this->status;
    }
    /**
    * NodeStatus represents the status of a node.
    
    It provides the current status of the node, as seen by the manager.
    
    *
    * @param NodeStatus $status
    *
    * @return self
    */
    public function setStatus(NodeStatus $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
    * ManagerStatus represents the status of a manager.
    
    It provides the current status of a node's manager component, if the node
    is a manager.
    
    *
    * @return ManagerStatus|null
    */
    public function getManagerStatus() : ?ManagerStatus
    {
        return $this->managerStatus;
    }
    /**
    * ManagerStatus represents the status of a manager.
    
    It provides the current status of a node's manager component, if the node
    is a manager.
    
    *
    * @param ManagerStatus|null $managerStatus
    *
    * @return self
    */
    public function setManagerStatus(?ManagerStatus $managerStatus) : self
    {
        $this->initialized['managerStatus'] = true;
        $this->managerStatus = $managerStatus;
        return $this;
    }
}