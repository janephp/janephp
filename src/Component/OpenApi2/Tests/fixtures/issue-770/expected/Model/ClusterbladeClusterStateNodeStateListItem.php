<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterbladeClusterStateNodeStateListItem
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
     * @var string
     */
    protected $nodeName;
    /**
     * node state
     *
     * @var string
     */
    protected $nodeState;
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
     * @return string
     */
    public function getNodeName(): string
    {
        return $this->nodeName;
    }
    /**
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
     * node state
     *
     * @return string
     */
    public function getNodeState(): string
    {
        return $this->nodeState;
    }
    /**
     * node state
     *
     * @param string $nodeState
     *
     * @return self
     */
    public function setNodeState(string $nodeState): self
    {
        $this->initialized['nodeState'] = true;
        $this->nodeState = $nodeState;
        return $this;
    }
}