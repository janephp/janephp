<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsAppMetadata implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier for the addon metadata item.
     *
     * @var int
     */
    public int $id;
    /**
     * The name of the metadata item.
     *
     * @var string
     */
    public string $name;
    /**
     * The display name of the metadata item.
     *
     * @var string
     */
    public string $displayName;
    /**
     * A brief description of the metadata item.
     *
     * @var string
     */
    public string $description;
    /**
     * The data type of the metadata value.
     *
     * @var string
     */
    public string $type;
    /**
     * @var list<string>
     */
    public array $options;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'displayName' => 'display_name', 'description' => 'description', 'type' => 'type', 'options' => 'options'];
    }
}