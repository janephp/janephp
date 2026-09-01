<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier of the NFS share.
     *
     * @var string
     */
    public string $id;
    /**
     * The human-readable name of the share.
     *
     * @var string
     */
    public string $name;
    /**
     * The desired/provisioned size of the share in GiB (Gibibytes). Must be >= 50.
     *
     * @var int
     */
    public int $sizeGib;
    /**
     * The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     *
     * @var string
     */
    public string $region;
    /**
     * The current status of the share.
     *
     * @var string
     */
    public string $status;
    /**
     * Timestamp for when the NFS share was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * List of VPC IDs that should be able to access the share.
     *
     * @var list<string>
     */
    public array $vpcIds;
    /**
     * Path at which the share will be available, to be mounted at a target of the user's choice within the client
     *
     * @var string
     */
    public string $mountPath;
    /**
     * The host IP of the NFS server that will be accessible from the associated VPC
     *
     * @var string
     */
    public string $host;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'sizeGib' => 'size_gib', 'region' => 'region', 'status' => 'status', 'createdAt' => 'created_at', 'vpcIds' => 'vpc_ids', 'mountPath' => 'mount_path', 'host' => 'host'];
    }
}