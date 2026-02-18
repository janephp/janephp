<?php

namespace Jane\Generated\DigitalOcean\Model;

class KubernetesNodePool extends \ArrayObject
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
     * The slug identifier for the type of Droplet used as workers in the node pool.
     *
     * @var string
     */
    protected $size;
    /**
     * A unique ID that can be used to identify and reference a specific node pool.
     *
     * @var string
     */
    protected $id;
    /**
     * A human-readable name for the node pool.
     *
     * @var string
     */
    protected $name;
    /**
     * The number of Droplet instances in the node pool.
     *
     * @var int
     */
    protected $count;
    /**
     * An array containing the tags applied to the node pool. All node pools are automatically tagged `k8s`, `k8s-worker`, and `k8s:$K8S_CLUSTER_ID`. <br><br>Requires `tag:read` scope.
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * An object of key/value mappings specifying labels to apply to all nodes in a pool. Labels will automatically be applied to all existing nodes and any subsequent nodes added to the pool. Note that when a label is removed, it is not deleted from the nodes in the pool.
     *
     * @var array<string, mixed>|null
     */
    protected $labels;
    /**
     * An array of taints to apply to all nodes in a pool. Taints will automatically be applied to all existing nodes and any subsequent nodes added to the pool. When a taint is removed, it is deleted from all nodes in the pool.
     *
     * @var list<KubernetesNodePoolTaint>
     */
    protected $taints;
    /**
     * A boolean value indicating whether auto-scaling is enabled for this node pool.
     *
     * @var bool
     */
    protected $autoScale;
    /**
     * The minimum number of nodes that this node pool can be auto-scaled to. The value will be `0` if `auto_scale` is set to `false`.
     *
     * @var int
     */
    protected $minNodes;
    /**
     * The maximum number of nodes that this node pool can be auto-scaled to. The value will be `0` if `auto_scale` is set to `false`.
     *
     * @var int
     */
    protected $maxNodes;
    /**
     * An object specifying the details of a specific worker node in a node pool.
     *
     * @var list<Node>
     */
    protected $nodes;
    /**
     * The slug identifier for the type of Droplet used as workers in the node pool.
     *
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }
    /**
     * The slug identifier for the type of Droplet used as workers in the node pool.
     *
     * @param string $size
     *
     * @return self
     */
    public function setSize(string $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * A unique ID that can be used to identify and reference a specific node pool.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference a specific node pool.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * A human-readable name for the node pool.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human-readable name for the node pool.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The number of Droplet instances in the node pool.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * The number of Droplet instances in the node pool.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * An array containing the tags applied to the node pool. All node pools are automatically tagged `k8s`, `k8s-worker`, and `k8s:$K8S_CLUSTER_ID`. <br><br>Requires `tag:read` scope.
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * An array containing the tags applied to the node pool. All node pools are automatically tagged `k8s`, `k8s-worker`, and `k8s:$K8S_CLUSTER_ID`. <br><br>Requires `tag:read` scope.
     *
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * An object of key/value mappings specifying labels to apply to all nodes in a pool. Labels will automatically be applied to all existing nodes and any subsequent nodes added to the pool. Note that when a label is removed, it is not deleted from the nodes in the pool.
     *
     * @return array<string, mixed>|null
     */
    public function getLabels(): ?iterable
    {
        return $this->labels;
    }
    /**
     * An object of key/value mappings specifying labels to apply to all nodes in a pool. Labels will automatically be applied to all existing nodes and any subsequent nodes added to the pool. Note that when a label is removed, it is not deleted from the nodes in the pool.
     *
     * @param array<string, mixed>|null $labels
     *
     * @return self
     */
    public function setLabels(?iterable $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * An array of taints to apply to all nodes in a pool. Taints will automatically be applied to all existing nodes and any subsequent nodes added to the pool. When a taint is removed, it is deleted from all nodes in the pool.
     *
     * @return list<KubernetesNodePoolTaint>
     */
    public function getTaints(): array
    {
        return $this->taints;
    }
    /**
     * An array of taints to apply to all nodes in a pool. Taints will automatically be applied to all existing nodes and any subsequent nodes added to the pool. When a taint is removed, it is deleted from all nodes in the pool.
     *
     * @param list<KubernetesNodePoolTaint> $taints
     *
     * @return self
     */
    public function setTaints(array $taints): self
    {
        $this->initialized['taints'] = true;
        $this->taints = $taints;
        return $this;
    }
    /**
     * A boolean value indicating whether auto-scaling is enabled for this node pool.
     *
     * @return bool
     */
    public function getAutoScale(): bool
    {
        return $this->autoScale;
    }
    /**
     * A boolean value indicating whether auto-scaling is enabled for this node pool.
     *
     * @param bool $autoScale
     *
     * @return self
     */
    public function setAutoScale(bool $autoScale): self
    {
        $this->initialized['autoScale'] = true;
        $this->autoScale = $autoScale;
        return $this;
    }
    /**
     * The minimum number of nodes that this node pool can be auto-scaled to. The value will be `0` if `auto_scale` is set to `false`.
     *
     * @return int
     */
    public function getMinNodes(): int
    {
        return $this->minNodes;
    }
    /**
     * The minimum number of nodes that this node pool can be auto-scaled to. The value will be `0` if `auto_scale` is set to `false`.
     *
     * @param int $minNodes
     *
     * @return self
     */
    public function setMinNodes(int $minNodes): self
    {
        $this->initialized['minNodes'] = true;
        $this->minNodes = $minNodes;
        return $this;
    }
    /**
     * The maximum number of nodes that this node pool can be auto-scaled to. The value will be `0` if `auto_scale` is set to `false`.
     *
     * @return int
     */
    public function getMaxNodes(): int
    {
        return $this->maxNodes;
    }
    /**
     * The maximum number of nodes that this node pool can be auto-scaled to. The value will be `0` if `auto_scale` is set to `false`.
     *
     * @param int $maxNodes
     *
     * @return self
     */
    public function setMaxNodes(int $maxNodes): self
    {
        $this->initialized['maxNodes'] = true;
        $this->maxNodes = $maxNodes;
        return $this;
    }
    /**
     * An object specifying the details of a specific worker node in a node pool.
     *
     * @return list<Node>
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }
    /**
     * An object specifying the details of a specific worker node in a node pool.
     *
     * @param list<Node> $nodes
     *
     * @return self
     */
    public function setNodes(array $nodes): self
    {
        $this->initialized['nodes'] = true;
        $this->nodes = $nodes;
        return $this;
    }
}