<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsRequest extends \ArrayObject
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
     * The human-readable name of the share.
     *
     * @var string
     */
    protected $name;
    /**
     * The desired/provisioned size of the share in GiB (Gibibytes). Must be >= 50.
     *
     * @var int
     */
    protected $sizeGib;
    /**
     * The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     *
     * @var string
     */
    protected $region;
    /**
     * List of VPC IDs that should be able to access the share.
     *
     * @var list<string>
     */
    protected $vpcIds;
    /**
     * The human-readable name of the share.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The human-readable name of the share.
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
     * The desired/provisioned size of the share in GiB (Gibibytes). Must be >= 50.
     *
     * @return int
     */
    public function getSizeGib(): int
    {
        return $this->sizeGib;
    }
    /**
     * The desired/provisioned size of the share in GiB (Gibibytes). Must be >= 50.
     *
     * @param int $sizeGib
     *
     * @return self
     */
    public function setSizeGib(int $sizeGib): self
    {
        $this->initialized['sizeGib'] = true;
        $this->sizeGib = $sizeGib;
        return $this;
    }
    /**
     * The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * List of VPC IDs that should be able to access the share.
     *
     * @return list<string>
     */
    public function getVpcIds(): array
    {
        return $this->vpcIds;
    }
    /**
     * List of VPC IDs that should be able to access the share.
     *
     * @param list<string> $vpcIds
     *
     * @return self
     */
    public function setVpcIds(array $vpcIds): self
    {
        $this->initialized['vpcIds'] = true;
        $this->vpcIds = $vpcIds;
        return $this;
    }
}