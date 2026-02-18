<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterbladeClusterState
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
     * cluster name
     *
     * @var string
     */
    protected $clusterName;
    /**
     * cluster state
     *
     * @var string
     */
    protected $clusterState;
    /**
     * The cluster role of the current controller node
     *
     * @var string
     */
    protected $clusterRole;
    /**
     * Identifier of the current controller node
     *
     * @var string
     */
    protected $currentNodeId;
    /**
     * The name of the current controller node
     *
     * @var string
     */
    protected $currentNodeName;
    /**
     * @var list<ClusterbladeClusterStateNodeStateListItem>
     */
    protected $nodeStateList;
    /**
     * @var list<ClusterbladeClusterStateManagementServiceStateListItem>
     */
    protected $managementServiceStateList;
    /**
     * cluster name
     *
     * @return string
     */
    public function getClusterName(): string
    {
        return $this->clusterName;
    }
    /**
     * cluster name
     *
     * @param string $clusterName
     *
     * @return self
     */
    public function setClusterName(string $clusterName): self
    {
        $this->initialized['clusterName'] = true;
        $this->clusterName = $clusterName;
        return $this;
    }
    /**
     * cluster state
     *
     * @return string
     */
    public function getClusterState(): string
    {
        return $this->clusterState;
    }
    /**
     * cluster state
     *
     * @param string $clusterState
     *
     * @return self
     */
    public function setClusterState(string $clusterState): self
    {
        $this->initialized['clusterState'] = true;
        $this->clusterState = $clusterState;
        return $this;
    }
    /**
     * The cluster role of the current controller node
     *
     * @return string
     */
    public function getClusterRole(): string
    {
        return $this->clusterRole;
    }
    /**
     * The cluster role of the current controller node
     *
     * @param string $clusterRole
     *
     * @return self
     */
    public function setClusterRole(string $clusterRole): self
    {
        $this->initialized['clusterRole'] = true;
        $this->clusterRole = $clusterRole;
        return $this;
    }
    /**
     * Identifier of the current controller node
     *
     * @return string
     */
    public function getCurrentNodeId(): string
    {
        return $this->currentNodeId;
    }
    /**
     * Identifier of the current controller node
     *
     * @param string $currentNodeId
     *
     * @return self
     */
    public function setCurrentNodeId(string $currentNodeId): self
    {
        $this->initialized['currentNodeId'] = true;
        $this->currentNodeId = $currentNodeId;
        return $this;
    }
    /**
     * The name of the current controller node
     *
     * @return string
     */
    public function getCurrentNodeName(): string
    {
        return $this->currentNodeName;
    }
    /**
     * The name of the current controller node 
     *
     * @param string $currentNodeName
     *
     * @return self
     */
    public function setCurrentNodeName(string $currentNodeName): self
    {
        $this->initialized['currentNodeName'] = true;
        $this->currentNodeName = $currentNodeName;
        return $this;
    }
    /**
     * @return list<ClusterbladeClusterStateNodeStateListItem>
     */
    public function getNodeStateList(): array
    {
        return $this->nodeStateList;
    }
    /**
     * @param list<ClusterbladeClusterStateNodeStateListItem> $nodeStateList
     *
     * @return self
     */
    public function setNodeStateList(array $nodeStateList): self
    {
        $this->initialized['nodeStateList'] = true;
        $this->nodeStateList = $nodeStateList;
        return $this;
    }
    /**
     * @return list<ClusterbladeClusterStateManagementServiceStateListItem>
     */
    public function getManagementServiceStateList(): array
    {
        return $this->managementServiceStateList;
    }
    /**
     * @param list<ClusterbladeClusterStateManagementServiceStateListItem> $managementServiceStateList
     *
     * @return self
     */
    public function setManagementServiceStateList(array $managementServiceStateList): self
    {
        $this->initialized['managementServiceStateList'] = true;
        $this->managementServiceStateList = $managementServiceStateList;
        return $this;
    }
}