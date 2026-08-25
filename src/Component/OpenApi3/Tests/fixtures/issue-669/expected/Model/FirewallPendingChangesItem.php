<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class FirewallPendingChangesItem implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $dropletId;
    /**
     * @var bool
     */
    protected $removing;
    /**
     * @var string
     */
    protected $status;
    /**
     * @return int
     */
    public function getDropletId(): int
    {
        return $this->dropletId;
    }
    /**
     * @param int $dropletId
     *
     * @return self
     */
    public function setDropletId(int $dropletId): self
    {
        $this->initialized['dropletId'] = true;
        $this->dropletId = $dropletId;
        return $this;
    }
    /**
     * @return bool
     */
    public function getRemoving(): bool
    {
        return $this->removing;
    }
    /**
     * @param bool $removing
     *
     * @return self
     */
    public function setRemoving(bool $removing): self
    {
        $this->initialized['removing'] = true;
        $this->removing = $removing;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['dropletId' => ['droplet_id', 'getDropletId', 'setDropletId'], 'removing' => ['removing', 'getRemoving', 'setRemoving'], 'status' => ['status', 'getStatus', 'setStatus']];
    }
}