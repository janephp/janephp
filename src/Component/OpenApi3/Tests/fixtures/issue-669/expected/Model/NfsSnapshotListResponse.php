<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsSnapshotListResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<NfsSnapshotResponse>
     */
    public array $snapshots;
    public function definedProperties(): array
    {
        return ['snapshots' => 'snapshots'];
    }
}