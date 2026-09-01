<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KubernetesNodePoolBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference a specific node pool.
     *
     * @var string
     */
    public string $id;
    /**
     * A human-readable name for the node pool.
     *
     * @var string
     */
    public string $name;
    /**
     * The number of Droplet instances in the node pool.
     *
     * @var int
     */
    public int $count;
    /**
     * An array containing the tags applied to the node pool. All node pools are automatically tagged `k8s`, `k8s-worker`, and `k8s:$K8S_CLUSTER_ID`. <br><br>Requires `tag:read` scope.
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * An object of key/value mappings specifying labels to apply to all nodes in a pool. Labels will automatically be applied to all existing nodes and any subsequent nodes added to the pool. Note that when a label is removed, it is not deleted from the nodes in the pool.
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $labels;
    /**
     * An array of taints to apply to all nodes in a pool. Taints will automatically be applied to all existing nodes and any subsequent nodes added to the pool. When a taint is removed, it is deleted from all nodes in the pool.
     *
     * @var list<KubernetesNodePoolTaint>
     */
    public array $taints;
    /**
     * A boolean value indicating whether auto-scaling is enabled for this node pool.
     *
     * @var bool
     */
    public bool $autoScale;
    /**
     * The minimum number of nodes that this node pool can be auto-scaled to. The value will be `0` if `auto_scale` is set to `false`.
     *
     * @var int
     */
    public int $minNodes;
    /**
     * The maximum number of nodes that this node pool can be auto-scaled to. The value will be `0` if `auto_scale` is set to `false`.
     *
     * @var int
     */
    public int $maxNodes;
    /**
     * An object specifying the details of a specific worker node in a node pool.
     *
     * @var list<Node>
     */
    public array $nodes;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'count' => 'count', 'tags' => 'tags', 'labels' => 'labels', 'taints' => 'taints', 'autoScale' => 'auto_scale', 'minNodes' => 'min_nodes', 'maxNodes' => 'max_nodes', 'nodes' => 'nodes'];
    }
}