<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Backup implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A time value given in ISO8601 combined date and time format at which the backup was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * The size of the database backup in GBs.
     *
     * @var float
     */
    public float $sizeGigabytes;
    /**
     * Indicates if this backup is a full or an incremental one (available only for MySQL).
     *
     * @var bool
     */
    public bool $incremental;
    public function definedProperties(): array
    {
        return ['createdAt' => 'created_at', 'sizeGigabytes' => 'size_gigabytes', 'incremental' => 'incremental'];
    }
}