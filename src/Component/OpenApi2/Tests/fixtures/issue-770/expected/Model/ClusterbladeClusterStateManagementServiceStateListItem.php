<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterbladeClusterStateManagementServiceStateListItem
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
     * Identifier of the controller node
     *
     * @var string
     */
    protected $nodeId;
    /**
     * node name
     *
     * @var string
     */
    protected $nodeName;
    /**
     * management service state
     *
     * @var string
     */
    protected $managementServiceState;
    /**
     * Identifier of the controller node
     *
     * @return string
     */
    public function getNodeId(): string
    {
        return $this->nodeId;
    }
    /**
     * Identifier of the controller node
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId): self
    {
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * node name
     *
     * @return string
     */
    public function getNodeName(): string
    {
        return $this->nodeName;
    }
    /**
     * node name
     *
     * @param string $nodeName
     *
     * @return self
     */
    public function setNodeName(string $nodeName): self
    {
        $this->initialized['nodeName'] = true;
        $this->nodeName = $nodeName;
        return $this;
    }
    /**
     * management service state
     *
     * @return string
     */
    public function getManagementServiceState(): string
    {
        return $this->managementServiceState;
    }
    /**
     * management service state
     *
     * @param string $managementServiceState
     *
     * @return self
     */
    public function setManagementServiceState(string $managementServiceState): self
    {
        $this->initialized['managementServiceState'] = true;
        $this->managementServiceState = $managementServiceState;
        return $this;
    }
}