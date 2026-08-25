<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcUpdatable implements AdditionalPropertiesInterface
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
     * The name of the VPC. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @var string
     */
    protected $name;
    /**
     * A free-form text field for describing the VPC's purpose. It may be a maximum of 255 characters.
     *
     * @var string
     */
    protected $description;
    /**
     * The name of the VPC. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the VPC. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * A free-form text field for describing the VPC's purpose. It may be a maximum of 255 characters.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * A free-form text field for describing the VPC's purpose. It may be a maximum of 255 characters.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'description' => ['description', 'getDescription', 'setDescription']];
    }
}