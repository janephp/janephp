<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class FirewallPendingChangesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $dropletId;
    /**
     * @var bool
     */
    public bool $removing;
    /**
     * @var string
     */
    public string $status;
    public function definedProperties(): array
    {
        return ['dropletId' => 'droplet_id', 'removing' => 'removing', 'status' => 'status'];
    }
}