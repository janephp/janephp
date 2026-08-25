<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsSnapshotListResponse implements AdditionalPropertiesInterface
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
     * @var list<NfsSnapshotResponse>
     */
    protected $snapshots;
    /**
     * @return list<NfsSnapshotResponse>
     */
    public function getSnapshots(): array
    {
        return $this->snapshots;
    }
    /**
     * @param list<NfsSnapshotResponse> $snapshots
     *
     * @return self
     */
    public function setSnapshots(array $snapshots): self
    {
        $this->initialized['snapshots'] = true;
        $this->snapshots = $snapshots;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['snapshots' => ['snapshots', 'getSnapshots', 'setSnapshots']];
    }
}