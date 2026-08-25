<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AssignLayerAction extends BusinessRuleAction implements AdditionalPropertiesInterface
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
     * The ID of the layer.
     *
     * @var string|null
     */
    protected $layerId;
    /**
     * An object containing default values (used for example to populate required fields).
     *
     * @var array<string, mixed>|null
     */
    protected $defaultValues;
    /**
     * The ID of the layer.
     *
     * @return string|null
     */
    public function getLayerId(): ?string
    {
        return $this->layerId;
    }
    /**
     * The ID of the layer.
     *
     * @param string|null $layerId
     *
     * @return self
     */
    public function setLayerId(?string $layerId): self
    {
        $this->initialized['layerId'] = true;
        $this->layerId = $layerId;
        return $this;
    }
    /**
     * An object containing default values (used for example to populate required fields).
     *
     * @return array<string, mixed>|null
     */
    public function getDefaultValues(): ?iterable
    {
        return $this->defaultValues;
    }
    /**
     * An object containing default values (used for example to populate required fields).
     *
     * @param array<string, mixed>|null $defaultValues
     *
     * @return self
     */
    public function setDefaultValues(?iterable $defaultValues): self
    {
        $this->initialized['defaultValues'] = true;
        $this->defaultValues = $defaultValues;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['layerId' => ['layerId', 'getLayerId', 'setLayerId'], 'defaultValues' => ['defaultValues', 'getDefaultValues', 'setDefaultValues']];
    }
}