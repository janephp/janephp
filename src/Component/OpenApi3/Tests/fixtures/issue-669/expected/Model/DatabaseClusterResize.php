<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseClusterResize implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A slug identifier representing desired the size of the nodes in the database cluster.
     *
     * @var string
     */
    public string $size;
    /**
     * The number of nodes in the database cluster. Valid values are are 1-3. In addition to the primary node, up to two standby nodes may be added for highly available configurations.
     *
     * @var int
     */
    public int $numNodes;
    /**
     * Additional storage added to the cluster, in MiB. If null, no additional storage is added to the cluster, beyond what is provided as a base amount from the 'size' and any previously added additional storage.
     *
     * @var int
     */
    public int $storageSizeMib;
    public function definedProperties(): array
    {
        return ['size' => 'size', 'numNodes' => 'num_nodes', 'storageSizeMib' => 'storage_size_mib'];
    }
}