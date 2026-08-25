<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UnassignLayerAction extends BusinessRuleAction implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['layerId' => ['layerId', 'getLayerId', 'setLayerId']];
    }
}