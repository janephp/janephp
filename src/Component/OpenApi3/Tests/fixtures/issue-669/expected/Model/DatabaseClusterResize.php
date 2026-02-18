<?php

namespace Jane\Generated\DigitalOcean\Model;

class DatabaseClusterResize extends \ArrayObject
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
     * A slug identifier representing desired the size of the nodes in the database cluster.
     *
     * @var string
     */
    protected $size;
    /**
     * The number of nodes in the database cluster. Valid values are are 1-3. In addition to the primary node, up to two standby nodes may be added for highly available configurations.
     *
     * @var int
     */
    protected $numNodes;
    /**
     * Additional storage added to the cluster, in MiB. If null, no additional storage is added to the cluster, beyond what is provided as a base amount from the 'size' and any previously added additional storage.
     *
     * @var int
     */
    protected $storageSizeMib;
    /**
     * A slug identifier representing desired the size of the nodes in the database cluster.
     *
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }
    /**
     * A slug identifier representing desired the size of the nodes in the database cluster.
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
     * The number of nodes in the database cluster. Valid values are are 1-3. In addition to the primary node, up to two standby nodes may be added for highly available configurations.
     *
     * @return int
     */
    public function getNumNodes(): int
    {
        return $this->numNodes;
    }
    /**
     * The number of nodes in the database cluster. Valid values are are 1-3. In addition to the primary node, up to two standby nodes may be added for highly available configurations.
     *
     * @param int $numNodes
     *
     * @return self
     */
    public function setNumNodes(int $numNodes): self
    {
        $this->initialized['numNodes'] = true;
        $this->numNodes = $numNodes;
        return $this;
    }
    /**
     * Additional storage added to the cluster, in MiB. If null, no additional storage is added to the cluster, beyond what is provided as a base amount from the 'size' and any previously added additional storage.
     *
     * @return int
     */
    public function getStorageSizeMib(): int
    {
        return $this->storageSizeMib;
    }
    /**
     * Additional storage added to the cluster, in MiB. If null, no additional storage is added to the cluster, beyond what is provided as a base amount from the 'size' and any previously added additional storage.
     *
     * @param int $storageSizeMib
     *
     * @return self
     */
    public function setStorageSizeMib(int $storageSizeMib): self
    {
        $this->initialized['storageSizeMib'] = true;
        $this->storageSizeMib = $storageSizeMib;
        return $this;
    }
}