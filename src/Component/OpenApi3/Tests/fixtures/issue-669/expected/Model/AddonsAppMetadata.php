<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsAppMetadata implements AdditionalPropertiesInterface
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
     * Unique identifier for the addon metadata item.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the metadata item.
     *
     * @var string
     */
    protected $name;
    /**
     * The display name of the metadata item.
     *
     * @var string
     */
    protected $displayName;
    /**
     * A brief description of the metadata item.
     *
     * @var string
     */
    protected $description;
    /**
     * The data type of the metadata value.
     *
     * @var string
     */
    protected $type;
    /**
     * @var list<string>
     */
    protected $options;
    /**
     * Unique identifier for the addon metadata item.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Unique identifier for the addon metadata item.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The name of the metadata item.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the metadata item.
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
     * The display name of the metadata item.
     *
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }
    /**
     * The display name of the metadata item.
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * A brief description of the metadata item.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * A brief description of the metadata item.
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
    /**
     * The data type of the metadata value.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The data type of the metadata value.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getOptions(): array
    {
        return $this->options;
    }
    /**
     * @param list<string> $options
     *
     * @return self
     */
    public function setOptions(array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'displayName' => ['display_name', 'getDisplayName', 'setDisplayName'], 'description' => ['description', 'getDescription', 'setDescription'], 'type' => ['type', 'getType', 'setType'], 'options' => ['options', 'getOptions', 'setOptions']];
    }
}