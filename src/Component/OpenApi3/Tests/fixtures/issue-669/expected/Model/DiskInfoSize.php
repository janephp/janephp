<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DiskInfoSize implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The amount of space allocated to the disk.
     *
     * @var int
     */
    public int $amount;
    /**
     * The unit of measure for the disk size.
     *
     * @var string
     */
    public string $unit;
    public function definedProperties(): array
    {
        return ['amount' => 'amount', 'unit' => 'unit'];
    }
}