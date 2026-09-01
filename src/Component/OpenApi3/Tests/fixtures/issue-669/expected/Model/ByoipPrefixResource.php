<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ByoipPrefixResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier for the allocation
     *
     * @var int
     */
    public int $id;
    /**
     * The BYOIP prefix UUID
     *
     * @var string
     */
    public string $byoip;
    /**
     * Region where the allocation is made
     *
     * @var string
     */
    public string $region;
    /**
     * The resource associated with the allocation
     *
     * @var string
     */
    public string $resource;
    /**
     * Time when the allocation was assigned
     *
     * @var \DateTime
     */
    public \DateTime $assignedAt;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'byoip' => 'byoip', 'region' => 'region', 'resource' => 'resource', 'assignedAt' => 'assigned_at'];
    }
}