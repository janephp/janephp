<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ClusterbladeClusterState
{
    /**
     * cluster name
     *
     * @var string
     */
    public string $clusterName;
    /**
     * cluster state
     *
     * @var string
     */
    public string $clusterState;
    /**
     * The cluster role of the current controller node
     *
     * @var string
     */
    public string $clusterRole;
    /**
     * Identifier of the current controller node
     *
     * @var string
     */
    public string $currentNodeId;
    /**
     * The name of the current controller node
     *
     * @var string
     */
    public string $currentNodeName;
    /**
     * @var list<ClusterbladeClusterStateNodeStateListItem>
     */
    public array $nodeStateList;
    /**
     * @var list<ClusterbladeClusterStateManagementServiceStateListItem>
     */
    public array $managementServiceStateList;
}