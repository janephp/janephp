<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsFeature implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier for the app feature.
     *
     * @var int
     */
    public int $id;
    /**
     * Name of the feature.
     *
     * @var string
     */
    public string $name;
    /**
     * Feature type, indicating the kind of data it holds.
     *
     * @var string
     */
    public string $type;
    /**
     * Unit of measurement for the feature, if applicable. Units apply to allowance features.
     *
     * @var string
     */
    public string $unit;
    /**
     * Value of the feature, which can vary based on the type.
     *
     * @var string|bool
     */
    public $value;
    /**
     * Timestamp when the feature was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Timestamp when the feature was last updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'type' => 'type', 'unit' => 'unit', 'value' => 'value', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at'];
    }
}