<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsFeature implements AdditionalPropertiesInterface
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
     * Unique identifier for the app feature.
     *
     * @var int
     */
    protected $id;
    /**
     * Name of the feature.
     *
     * @var string
     */
    protected $name;
    /**
     * Feature type, indicating the kind of data it holds.
     *
     * @var string
     */
    protected $type;
    /**
     * Unit of measurement for the feature, if applicable. Units apply to allowance features.
     *
     * @var string
     */
    protected $unit;
    /**
     * Value of the feature, which can vary based on the type.
     *
     * @var mixed
     */
    protected $value;
    /**
     * Timestamp when the feature was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Timestamp when the feature was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique identifier for the app feature.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Unique identifier for the app feature.
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
     * Name of the feature.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the feature.
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
     * Feature type, indicating the kind of data it holds.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Feature type, indicating the kind of data it holds.
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
     * Unit of measurement for the feature, if applicable. Units apply to allowance features.
     *
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
    /**
     * Unit of measurement for the feature, if applicable. Units apply to allowance features.
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
    /**
     * Value of the feature, which can vary based on the type.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Value of the feature, which can vary based on the type.
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Timestamp when the feature was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Timestamp when the feature was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Timestamp when the feature was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Timestamp when the feature was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'type' => ['type', 'getType', 'setType'], 'unit' => ['unit', 'getUnit', 'setUnit'], 'value' => ['value', 'getValue', 'setValue'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt']];
    }
}