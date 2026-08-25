<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsActionSnapshot implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The type of action to initiate for the NFS share (such as resize or snapshot).
     *
     * @var string
     */
    protected $type;
    /**
     * The DigitalOcean region slug (e.g. atl1, nyc2) where the NFS snapshot resides.
     *
     * @var string
     */
    protected $region;
    /**
     * @var NfsActionSnapshotParams
     */
    protected $params;
    /**
     * The type of action to initiate for the NFS share (such as resize or snapshot).
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of action to initiate for the NFS share (such as resize or snapshot).
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The DigitalOcean region slug (e.g. atl1, nyc2) where the NFS snapshot resides.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The DigitalOcean region slug (e.g. atl1, nyc2) where the NFS snapshot resides.
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
     * @return NfsActionSnapshotParams
     */
    public function getParams(): NfsActionSnapshotParams
    {
        return $this->params;
    }
    /**
     * @param NfsActionSnapshotParams $params
     *
     * @return self
     */
    public function setParams(NfsActionSnapshotParams $params): self
    {
        $this->initialized['params'] = true;
        $this->params = $params;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'region' => ['region', 'getRegion', 'setRegion'], 'params' => ['params', 'getParams', 'setParams']];
    }
}